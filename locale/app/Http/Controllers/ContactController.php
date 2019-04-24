<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    public function gmaps()
    {
        $locations = DB::table('locations')->get();
        return view('gmaps',compact('locations'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContact()
    {
        return view('sections.contact');
    }

    public function postContact(ContactRequest $request)
    {
        {

            $data = array(
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'subject' => $request->subject,
                'msg' => $request->msg,

            );

            \Mail::send('emails.contact', $data, function ($message) use ($request) {
                // put default email to recieve contact us emails on settings
                $message->to('ayman@8-digitalmarketing.com', $request->name)
                    ->subject('New Contact Message');
            });

            Session::flash('Success','Yor Mail Sent');
            return redirect()->to('/');
        }
    }
}

