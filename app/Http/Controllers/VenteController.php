<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VenteController extends Controller
{
    public function Suivi()
	{
		
		
		return view('configuration/Vente');
	}
}
