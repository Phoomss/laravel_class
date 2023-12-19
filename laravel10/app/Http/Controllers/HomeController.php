<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('post/home');
    }

    public function aboute(){
        return view('about');
    }

    public function create($id = null)
    {
        return "Create" . $id;
    }

    public function update(Request $request)
    {
        return "Update" . $request->id;
    }

    public function store()
    {
        return "Stroe";
    }

    public function show()
    {
        return "Show Data";
    }

    public function edit()
    {
        return "Edit";
    }

    public function destroy()
    {
        return "Detele";
    }
}
