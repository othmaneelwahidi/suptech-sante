<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;  // Import the Contact model
use Illuminate\Support\Facades\Auth;  // Import the Auth facade
use Illuminate\Support\Facades\DB;  // Import the DB facade

class ContactUsController extends Controller
{
    

    public function InsertContact(Request $request)
    {
        $contact = new Contact;
        $contact->Full_Name = $request->name;
        $contact->email = $request->email;
        $contact->Tele = $request->Tele;
        $contact->sujet = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès');
    }

    public function destroy( $id)
    {
        if (Auth::check()) {
            Contact::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {
            return view('admin/Login');
        }
    }

    public function show()
{
    if (Auth::check()) {
        $data = Contact::all();
        return view('contact', compact('data'))->with('panelactive', 'contact');
    } else {
        return redirect('admin/Login'); // Redirect to login if not authenticated
    }
}

public function Checkcontactpanel()
{
    if (Auth::check()) {
        $data = Contact::all();
        $msg = DB::table('contacts')->orderBy('id', 'ASC')->get();
        return view('admin/Contact', compact('data', 'msg'))->with('Val', 1)->with('panelactive', 'contact');
    }

    return redirect('admin/Login'); // Redirect to login if not authenticated
}

}
