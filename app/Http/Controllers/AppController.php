<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function welcome ()
    {
        $todos = todo::all();
        return view('welcome', ['todos' => $todos]);
    }
}
