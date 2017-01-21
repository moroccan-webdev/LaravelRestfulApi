<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AuthController extends Controller
{
  public function __construct()
  {
      //$this->middleware('name');
  }
  
  public function store(Request $request)
  {
      return "it works fine!!";
  }

  public function signin(Request $request)
  {
      return "it works fine!!";
  }

}
