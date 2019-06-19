<?php

namespace App\Http\Controllers;

use App\Mail\UserEmailVerification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware(['auth', 'verified']);
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::where('user_role', '2')->get();
		return view('users.listall', compact('users'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'account_type' => 'required',
			'first_name' => 'required',
			'last_name' => 'nullable',
			'id_number' => 'required | unique:users',
			'email' => 'required | email | unique:users',
			'start_date' => 'required|date|before:end_date',
			'end_date' => 'required|date|after:start_date',
			'password' => 'required|confirmed|min:3'
		]);
		
		$request->request->add(['name' => $request->input('first_name') . ' ' . $request->input('last_name')]);
		$request->request->add(['user_role' => 2]);
		$request->request->add(['work_live_status' => 'not_assigned']);
		
		$request->merge(['password' => Hash::make($request->get('password'))]);
		$request->merge(array_map('trim', $request->all()));
		
		$user_id = User::insertGetId($request->except('_token', 'password_confirmation'));
		
		$user_data = User::find($user_id);
		$user_data->verifyurl = $this->createVerificationUrl($user_id);
		
		Mail::to($user_data)->send(new UserEmailVerification($user_data));

//		Mail::send('emails.verifyemail', $data, function ($message)  use ($request) {
//			$message->to($request->get('email'), $request->get('name'))
//				->subject('Verify Email Address');
//		});
		return Redirect::route('user.index');
	}
	
	/**
	 * @param $user_id
	 * @return string
	 */
	public function createVerificationUrl($user_id)
	{
		return URL::temporarySignedRoute(
			'verification.verify',
			Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
			['id' => $user_id]
		);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param User $user
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.details', compact('user'));
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param User $user
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param User $user
	 * @return Response
	 */
	public function update(Request $request, User $user)
	{
		$request->validate([
			'account_type' => 'required',
			'first_name' => 'required',
			'last_name' => 'nullable',
			'id_number' => 'required | unique:users,id_number,' . $user->id,
			'email' => 'required | email | unique:users,email,' . $user->id,
			'start_date' => 'required|date|before:end_date',
			'end_date' => 'required|date|after:start_date'
		]);
		
		$request->request->add(['name' => $request->input('first_name') . ' ' . $request->input('last_name')]);
		
		$request->merge(array_map('trim', $request->all()));
		
		$user->find($user->id)->update($request->all());
		
		if ($user->email !== $request->input('email')) {
			
			$user_data = User::find($user->id);
			$user_data->email_verified_at = Null;
			$user_data->save();
			
			$user_data['verifyurl'] = $this->createVerificationUrl($user->id);
			
			Mail::to($user_data)->send(new UserEmailVerification($user_data));
			
			return Redirect::route('user.show', array($request->route('user')));
		}
		return Redirect::route('user.show', array($request->route('user')));
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param User $user
	 * @return Response
	 */
	public function destroy(User $user)
	{
		//
	}
	
}
