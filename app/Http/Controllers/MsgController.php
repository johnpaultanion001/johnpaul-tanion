<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use Illuminate\Http\Request;
use Validator;

class MsgController extends Controller
{
    
    public function index()
    {
        $msgs = Msg::latest()->get();
        return response()->json($msgs);
    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $errors =  Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'message' => ['required'],
        ]);

        if ($errors->fails()) {
            return response()->json(['errors' => $errors->errors()]);
        }

        Msg::create($request->all());

        return response()->json(['success' => 'Your message sent, Thank You :)']);
    }

  
    public function show(Msg $msg)
    {
        //
    }

   
    public function edit(Msg $msg)
    {
        //
    }

   
    public function update(Request $request, Msg $msg)
    {
        //
    }

    public function destroy(Msg $msg)
    {
        //
    }
}
