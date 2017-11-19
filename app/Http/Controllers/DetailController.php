<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DetailController extends Controller
{
    public function index(){

      $users = User::all();

      return view('details', compact('users'));
    }
}
