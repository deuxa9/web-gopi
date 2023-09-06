<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailDBController extends Controller
{
    public function create()
    {
        return view('contactus.home',[
            'emails' => Email::all()
        ]);
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',

       ]);

        Email::create($validatedData);
        return back();
    }
}
