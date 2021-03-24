<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        alert()->success('Success','Please check your email after we review your data');
        return view('client.index');
    }

    public function about()
    {
        return view('client.about');
    }
    public function clientlogin()
    {
        return view('auth.login');
    }
}