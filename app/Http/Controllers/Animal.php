<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addanimal;

class Animal extends Controller
{
    // camelCase
    function animal(){
        return view('animal');
    }

    function addAnimal(Request $request){
        // dd($request->all());

        $addanimal = new Animal();
        $addanimal->create($request->all());

        return view('animal');
    }
}
