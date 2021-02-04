<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\ContactUs\Message;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        //
    }

    public function send(ContactUsRequest $request)
    {
        $message = Message::create($request->validated());
    }
}
