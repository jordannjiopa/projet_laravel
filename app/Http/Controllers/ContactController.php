<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactUs;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function contact_traitement(Request $request)
    {
        $request->validate([
  
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            
           ]); 
      
          $contact = new Contact();
          $contact->name = $request->name;
          $contact->email = $request->email;
          $contact->message = $request->message;
          $contact->save();
          $data  = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
       
            Mail::to('jordannjoipa@gmail.com')->send(new ContactUs($data));
            //dd('envoyer avec success');
            return redirect()->back()->with('success','message sent successfully');

    }

    
}
