<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\ContactUs\Message;
use App\Notifications\Site\ContactUsNotification;
use App\User;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function send(ContactUsRequest $request)
    {
        $msg = Message::create($request->validated());
        $admin = User::where('name', 'admin')->first();
        if ($admin) {
            $admin->notify(new ContactUsNotification($msg));
        }
        return redirect(route('site.home') . "#contact-section")->withSuccess('message sended succfully');
    }
}
