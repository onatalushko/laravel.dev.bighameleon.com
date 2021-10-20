<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Services\DateCheck;
use Illuminate\Http\Request;
use App\Facades\DateService;

class MainController extends Controller
{
    public function home() {
      return view('home');
    }

    public function review() {
        $ext = new DateCheck();
        dump($ext->isValid('25/01/2021'));
//        dump(DateService::isValid('25/01/2021'));
        return view('review');
    }

    public function review_check(Request $request) {
//        dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500',
        ]);

        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');
        $review->save();
    }
}
