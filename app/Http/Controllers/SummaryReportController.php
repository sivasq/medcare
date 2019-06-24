<?php

namespace App\Http\Controllers;

use App\Summary_report;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Illuminate\Http\Request;
use kamermans\OAuth2\GrantType\AuthorizationCode;
use kamermans\OAuth2\GrantType\RefreshToken;
use kamermans\OAuth2\OAuth2Middleware;
use kamermans\OAuth2\Persistence\FileTokenPersistence;
use Validator;

class SummaryReportController extends Controller
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
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_patient_summary_details(Request $request)
	{
		$validator = Validator::make($request->all(),
			[
				'work_queue_id' => 'required',
				'patient_report' => 'required'
			]);
		
		if ($validator->fails()) {
			return response()->json(['errors' => $validator->errors()->all()]);
		}
		
		Summary_report::updateOrCreate(
			['work_queue_id' => $request->get('work_queue_id')],
			['patient_report' => htmlspecialchars($request->get('patient_report'))]
		);
		return response()->json(['success' => 'Record is successfully added']);
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store_provider_summary_details(Request $request)
	{
		$validator = Validator::make($request->all(),
			[
				'work_queue_id' => 'required',
				'provider_report' => 'required'
			]);
		
		if ($validator->fails()) {
			return response()->json(['errors' => $validator->errors()->all()]);
		}
		
		Summary_report::updateOrCreate(
			['work_queue_id' => $request->get('work_queue_id')],
			['provider_report' => htmlspecialchars($request->get('provider_report'))]
		);
		return response()->json(['success' => 'Record is successfully added']);
	}
	
	
	public function auth_test()
	{
		$token_storage = new FileTokenPersistence('/tmp/token.txt');
		
		$client_id = '0oalr276su83HKbyb0h7';
		
		$client_secret = 'Pp3buER5XFum8FWcihblBcTWGT11lNduoruLS5ln';
		
		// This is the authentication code that the user pasted into the console, or null if we don't need one
		$auth_code = null;
		$auth_code = 'NLDP4o5Uj5CIuu-EnKaO';
		
		// This is the redirect URI for the Google Cloud Platform SDK (aka 'gcloud')
		// To use your own OAuth application, adjust this or prompt for it
		$redirect_uri = 'https://www.oauth.com/playground/authorization-code.html';
		
		// If we have no access token or refresh token, we need to get user consent to obtain one
		if ($token_storage->hasToken() === false) {
			$auth_url = 'https://dev-396343.oktapreview.com/oauth2/default/v1/authorize?' . http_build_query(['client_id' => $client_id, 'redirect_uri' => $redirect_uri, 'response_type' => 'code', 'scope' => implode(' ', ['photo',]), "state" => 1561190161,]);
			echo "Go to the following link in your browser:\n\n";
			echo "$auth_url\n\n";
			$auth_code = 'NLDP4o5Uj5CIuu-EnKaO';
		}
		
		// Authorization client - this is used to request OAuth access tokens
		$reauth_client = new Client([// URL for access_token request
			'base_uri' => 'https://dev-396343.oktapreview.com/oauth2/default/v1/token',// 'debug' => true,
		]);
		$reauth_config = ['code' => $auth_code, 'client_id' => $client_id, 'client_secret' => $client_secret, 'redirect_uri' => $redirect_uri, 'grantType ' => 'authorization_code', 'scope' => implode(' ', ['photo',]),];
		$grant_type = new AuthorizationCode($reauth_client, $reauth_config);
		$refresh_grant_type = new RefreshToken($reauth_client, $reauth_config);
		$oauth = new OAuth2Middleware($grant_type, $refresh_grant_type);
		$oauth->setTokenPersistence($token_storage);
		$stack = HandlerStack::create();
		$stack->push($oauth);
		
		// This is the normal Guzzle client that you use in your application
		$client = new Client([//			'handler' => $stack,
//			'auth'    => 'oauth2',
		]);
		$endpoint_url = 'https://stu3.test.pyrohealth.net/fhir/Patient/e4db51dc-71d0-483d-8c9c-63844022dbcf/_history/5';
		$response = $client->get($endpoint_url);
		echo $response->getBody(), "\n";
		dd($client);
	}
}
