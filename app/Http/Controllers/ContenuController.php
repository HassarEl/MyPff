<?php

namespace App\Http\Controllers;

use App\Models\Jardin;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index()
    {
        $jardins = Jardin::all();
        return view('contenu.index', compact('jardins'));
    }
}
