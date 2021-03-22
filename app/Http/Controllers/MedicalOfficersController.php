<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalOfficersController extends Controller
{
    //for Medical-officer methods
    public function dashboard()
    {
        return view('medical-officer.dashboard');
    }

    //for Medical-officers/Client methods
    public function indexClient()
    {
        return view('medical-officer.client.index');
    }

    public function viewClient()
    {
        return view('medical-officer.client.view');
    }

    //for Medical-officers/Transaction History
    public function indexHistory(){
        return view('medical-officer.history.index');
    }

    public function viewHistory(){
        return view('medical-officer.history.view');
    }

    public function export(){
        //code here for export report
    }


    //for Medical-officers/Profile
    public function indexProfile(){
        return view('medical-officer.profile.index');
    }

    public function updateProfile(){
        return view('medical-officer.profile.update');
    }

}
