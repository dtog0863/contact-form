<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
    return view('index');
    }

    public function confirm(Request $request){
    $contact = $request->only(['name','email','tel','contact']);
    return view('confirm',['contact' =>$contact]);
    }

    public function store(Request $request){
    $contact = $request->only(['name','email','tel','contact']);
    Contact::create(contacts);
    return view('thanks');
    }
}
