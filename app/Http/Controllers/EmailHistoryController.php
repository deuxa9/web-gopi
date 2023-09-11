<?php

namespace App\Http\Controllers;

use App\Models\Email;
use PDF;
use Illuminate\Http\Request;

class EmailHistoryController extends Controller
{
    public function index(){
        return view('contactus.emailhistory', [
            'emails' => Email::latest()->paginate(10)
        ]);
    }

    public function exportemailhistorypdf()
    {
        $emails = Email::all();
        view()->share('emails', $emails);
        $pdf = PDF::loadview('contactus.historyemail-pdf');
        return $pdf->download('historyemail.pdf');
    }
}
