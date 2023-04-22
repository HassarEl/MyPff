<?php

namespace App\Http\Controllers;

use App\Models\Jardin;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class JardinController extends Controller
{
    public function index()
    {   $jardins = Jardin::all();
        return view('jardin.index', compact('jardins'));
    }
    public function create()
    {
        return view('jardin.create');
    }
    public function store(Request $request)
    {
        $jardin = new Jardin();

        // $image = $request->file('file');
        // $destinationPath = public_path('jardinimage');
        // $imagename=time().'.'.$image->getClientOriginalExtension();
        // $image->move($destinationPath, $imagename);

        $jardin->NumJ=$request->NumJ;
        $jardin->nomJardin=$request->nomJardin;
        $jardin->adresse=$request->adresse;
        $jardin->ville=$request->ville;
        $jardin->superficie=$request->superficie;
        $jardin->image='image';
        $jardin->user_id=auth()->user()->id;
        $jardin->save();

        return redirect('jardin')->with('message', 'Jardin Has Been Added Seccessfuly');
    }
}

