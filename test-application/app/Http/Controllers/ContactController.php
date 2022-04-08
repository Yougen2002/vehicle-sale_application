<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // CRUD - Create, Read, Update, Delete

    // Create = POST = Store
    // Read = GET = Index, Show
    // Update = PUT = Update
    // Delete = DELETE = Destroy

    public function show(){
        return view('contact');
    }

    public function store(Request $request){

        (new Contact())->create([
            'email' => $request->email,
            'message' => $request->message
        ]);

        dd('form stored');
    }

}
