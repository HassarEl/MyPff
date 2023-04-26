<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index()
    {
        return view('contenu.index');
    }
}
