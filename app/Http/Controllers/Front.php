<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
    public function index( Request $request)
    {
        return $request->post();
    }
}
