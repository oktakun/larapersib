<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanPersibController extends Controller
{
    public function getDash()
    {
      return view('dashboard');
    }
}
