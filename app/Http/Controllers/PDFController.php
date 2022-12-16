<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(){
        
        $users = User::get();

        $data = [
            'title' => 'This is just an example to generate PDF',
            'date' => date('m/d/Y'),
            'users' => $users
        ];


        $pdf = PDF::loadView('myPDF', $data);

        return $pdf->download('example.pdf');
    }
}
