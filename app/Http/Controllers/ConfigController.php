<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
	{
		
		$id="hello anis ";
		return view('configuration/config',compact('id'));
	}
}
