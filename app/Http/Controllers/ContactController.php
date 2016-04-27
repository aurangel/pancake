<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMeRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests;

class ContactController extends Controller
{
    /**
     * Show the contact form
     *
     * @return mixed
     */
    public function showForm()
    {
        return view('blog.contact');
    }

    /**
     * Email the contact request
     *
     * @param ContactMeRequest $request
     * @return mixed
     */
    public function sendContactInfo(ContactMeRequest $request)
    {
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: ' . $data['name'])
                ->to(config('blog.contact_email'))
                ->replyTo($data['email']);
        });

        return back()->withSuccess("Thank you for your message. It has been sent.");
    }
}