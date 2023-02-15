<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){

        $details = [
        'title' => 'Ini Sebuah email percobaan',
        'body' => 'Hallo orang tampan'
        ];
       
        Mail::to('lamkhil3000@gmail.com')->send(new MyTestMail($details));
       
        dd("Email sudah terkirim.");
    
        }
}
