<?php

namespace App\Http\Controllers;

class RecipesController extends Controller
{
    public function __construct()
    {
        //
    }

    function list() {
        return response()->json(\App\Recipe::get());
    }

    public function show($id)
    {
        return response()->json(\App\Recipe::find($id));
    }
}
