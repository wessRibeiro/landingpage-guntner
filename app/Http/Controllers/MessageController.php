<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    public function store(Request $request): RedirectResponse{


        $message = new Message();
        $message->name = $request->inputName;
        $message->telephone = $request->inputTelephone;
        $message->email = $request->inputEmail;
        $message->subject = $request->inputSubject;
        $message->message = $request->inputMessage;
        $message->save();

        return redirect('/');
    }
}
