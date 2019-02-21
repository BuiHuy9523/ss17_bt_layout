<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $list = \App\Lists::all();
        return view('list', compact($list));
    }
    public function add()
    {
        return view('index')
    }
    public function insert(Request $request)
    {
        $insert = new Lists();
        $insert->category = $request->input;
        $insert->save;
        return redirect()->route('list');
    }

}
