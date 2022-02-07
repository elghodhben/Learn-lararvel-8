<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StockController extends Controller
{
    public function Suivi()
	{
		
		
		return view('configuration/Stock');
	}
	public function addutilisateur(Request $request)
	{
		$Nom=$request->input('exampleInputNom');
		$Prenom=$request->input('exampleInputPrenom');
		$Emailaddress=$request->input('exampleInputEmail1');
		$Password=$request->input('exampleInputPassword1');
		
		echo "votre Password est ".$Password." ".$prenom." et Email address =".$Email." address";

	
}
}

