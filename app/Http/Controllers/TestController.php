<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request)
	{
		dd($request->all());
	}

	public function authorize(Request $request)
	{
		$token = $request->get('token');
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "http://181.65.247.204:4500/account/activate");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);

		curl_setopt($ch, CURLOPT_POST, TRUE);

		curl_setopt($ch, CURLOPT_POSTFIELDS, "{
			  token: $token
			}");

		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Content-Type: application/json"
		));

		$response = curl_exec($ch);
		curl_close($ch);
	}
}
