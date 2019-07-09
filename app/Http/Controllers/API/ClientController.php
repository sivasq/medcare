<?php
/**
 * Created by PhpStorm.
 * User: Sivaraj
 * Date: 22-04-2019 022
 * Time: 15:32
 */

namespace App\Http\Controllers\API;

use App\Client;
use App\Http\Resources\Client as ClientResource;
use App\Http\Resources\ClientCollection;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Auth;
use Validator;


class ClientController extends BaseController
{

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware(['verified']);
	}

	/**
	 * Display a listing of the resource.
	 *
	 * // * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//		$user = Auth::user();
		//		return $user;
		//		return new ClientCollection(Client::all());
		//		return $this->sendResponse($user, 'User Details Retrieved Successfully.');

		$users = Client::find(9);
		return new ClientResource($users);
//		return new ClientCollection($users);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();

		$validator = Validator::make($input, [
			'name' => 'required',
			'description' => 'required'
		]);


		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}

		$vehicleType = VehicleType::create($input);

		return $this->sendResponse($vehicleType->toArray(), 'VehicleType created successfully.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$vehicleType = VehicleType::find($id);

		if (is_null($vehicleType)) {
			return $this->sendError('VehicleType not found.');
		}

		return $this->sendResponse($vehicleType->toArray(), 'VehicleType retrieved successfully.');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, VehicleType $vehicleType)
	{
		$input = $request->all();

		$validator = Validator::make($input, [
			'name' => 'required',
			'description' => 'required'
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation Error.', $validator->errors());
		}

		$vehicleType->name = $input['name'];
		$vehicleType->description = $input['description'];
		$vehicleType->save();

		return $this->sendResponse($vehicleType->toArray(), 'VehicleType updated successfully.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(VehicleType $vehicleType)
	{
		$vehicleType->delete();

		return $this->sendResponse($vehicleType->toArray(), 'VehicleType deleted successfully.');
	}
}