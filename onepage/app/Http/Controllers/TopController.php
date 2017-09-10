<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novel;
use Validator;
class TopController extends Controller
{
    //TOP表示
	public function index(){
		return view('top');
	}
}
