<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use App\Mail\AdminConfirmationEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Movie;


class PublicController extends Controller
{
    
    public function homepage()
    {
        return view('homepage');
    }

   public function about_us(){                                    
        return view('about-us');  
    } 

    public function where(){                                    
        return view('where');   
    }   

    public function contact_us(){                                    
        return view('contact-us');   
    }   

    public function send_emails(Request $message){ 
        $messaggio=$message->all();
        
        Mail::to($message->email)->send(new ConfirmationEmail());       
        Mail::to('admin@admin.it')->send(new AdminConfirmationEmail($messaggio));
        
        return redirect()->route('contact_us')->with('successMessage', 'Email inviata con successo');
    }   

   

}