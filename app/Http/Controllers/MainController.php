<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
	//
	public function index()
	{
		return view('welcome');
	}

	public function testPost()
	{
		return response()->json(['POST' =>'ok'],201);
	}

	public function testPut()
	{
		return response()->json(['PUT' =>'ok']);
	}
}
