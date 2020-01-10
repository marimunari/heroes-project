<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;

class APIController extends Controller
{
    public function listagem()
    {
        $heroes = Hero::all();
        return response()->json($heroes);
    }
}
