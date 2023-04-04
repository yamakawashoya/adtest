<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function confirm(ContactRequest $request)
    {
        $input = $request->validated();

        $gender = '';
        if ($input['gender'] === 'male') {
            $gender = '男性';
        } elseif ($input['gender'] === 'female') {
            $gender = '女性';
        } else {
            $gender = 'その他';
        }

        return view('contacts.confirm', compact('input', 'gender'));
    }

    public function store(ContactRequest $request)
    {
        $input = $request->validated();

        Mail::to($input['email'])
            ->send(new ContactMail($input));

        return redirect('/thanks');
    }
}