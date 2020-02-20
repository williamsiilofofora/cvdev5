<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RGPDController extends Controller
{
    public function index()
    {

        return view('RGPD.mentionLegal');
    }
}