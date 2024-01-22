<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\Notification;

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
        $emailContent = [
            'notif'          => 'Message from ' . $request->input('name'),
            'email'           => $request->input('email'),
            'name'           => $request->input('name'),
            'body'           => $request->input('message'),
        ];
        Mail::to('johnpaultanion001@gmail.com')
                ->send(new Notification($emailContent));


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
