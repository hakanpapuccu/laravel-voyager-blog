<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index() {

        return view('contact');

    }

    public function insert (Request $Request) {


     /*   $addContact=Contact::create(["

            'name' => $Request->name,
            'email' => $Request->email,
            'message' => $Request->message,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),

            "]); */

       $addContact= DB::insert('insert into contacts (name, email, message, created_at, updated_at) values (?, ?, ?, ?, ?)', [$Request->name, $Request->email, $Request->message, date('Y-m-d'), date('Y-m-d')]);

        if ($addContact) {

            return redirect(route('contact'));

        }

    }

}
