<?php

namespace App\Http\Controllers;

use App\Email;
use App\Http\Requests\EmailFormRequest;

class EmailController extends Controller
{
    public function sendEmail(EmailFormRequest $request) {
        $validatator = $request->validated();

        Email::create(['email' => $request->email]);
        session()->flash('success', 'Мы свяжемся с вами в ближайшее время');
        return redirect()->route('index');
    }

}
