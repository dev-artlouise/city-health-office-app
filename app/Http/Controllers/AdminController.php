<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    //for Admin/Medical-officer methods

    public function indexMedicalOfficer()
    {
        return view('admin.medical-officer.index');
    }

    public function createMedicalOfficer()
    {
        return view('admin.medical-officer.create');
    }

    public function viewMedicalOfficer()
    {
        return view('admin.medical-officer.view');
    }

    public function searchMedicalOfficer(){
        // code search here
    }

    public function activateOfficer()
    {
        //code here for deactivate and activate medical officer
    }


    //for Admin/Clients method
    public function indexClient(){
        return view('admin.client.index');
    }

    public function viewClient()
    {
        return view('admin.client.view');
    }

    //for Admin/Archives methods
    public function indexArchives(){
        return view('admin.archives.index');
    }

    public function searchArchives()
    {
        //code here for search archives
    }

    public function exportArchives()
    {
        //code here for export method archives
    }

    public function filter()
    {
        // code here for function filter by
    }

}
