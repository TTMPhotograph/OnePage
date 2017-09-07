<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
   //ページを割り振るよう

   public function index() {
       return view('welcome');
    }
}
