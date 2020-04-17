<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IlhamController extends Controller
{
    
    public function index(){
    	return view('coba/coba');
    }

    public function show($id){
    	return view('coba/coba2', ['no' => $id]);
    }
}
