<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function socialite()
    {
        return view('documentation.socialite');
    }

    public function copy_to_clipboard()
    {
        return view('documentation.copy_to_clipboard');
    }

    public function dompdf()
    {
        return view('documentation.dompdf');
    }

}
