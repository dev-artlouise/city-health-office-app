@extends('layouts.app-admin')
@section('admin-content')

<header>
    <div class="search-wrapper">
        <span class="search"><i class="fas fa-search"></i></span>
        <input class="" type="search" placeholder="Search...">
    </div>

    <div class="social-icons">
        <span class="bell"></span>
        <div></div>
    </div>
</header>

<h2 class="dashboard-title">Overview for Medical Officers</h2>

<div class="dashboard-cards">

    <div class="card-single ">
        <div class="card-body">
            <span><i class="fas fa-user-md"></i></span>
            <div>
                <h5>MEDICAL OFFICERS</h5>
                <h4>3</h4>
            </div>
        </div>
        {{-- <div class="card-footer">
            <a href="/admin/medical-officer/">View</a>
        </div> --}}
    </div>


    <div class="card-single ">
        <div class="card-body">
            <span><i class="fas fa-user-check"></i></span>
            <div>
                <h5>ACTIVE</h5>
                <h4>3</h4>
            </div>
        </div>
        {{-- <div class="card-footer">
            <a href="/admin/medical-officer/">View</a>
        </div> --}}
    </div>


    <div class="card-single ">
        <div class="card-body">
            <span><i class="fas fa-user-times"></i></span>
            <div>
                <h5>INACTIVE</h5>
                <h4>1</h4>
            </div>
        </div>
        {{-- <div class="card-footer">
            <a href="/admin/medical-officer/">View</a>
        </div> --}}
    </div>

</div>

<section class="recent">
    <div class="table-responsive">
        <h2 class="dashboard-title">Medical Officers</h2>

        <div class="action-button mt-2">
            {{-- <button type="button" class="btn btn-outline-success mb-2">
                <span><i class="fas fa-user-plus"></i></span>
                Create
            </button> --}}
        
            <a href="{{'/admin/medical-officer/create'}}" class="btn btn-outline-success mb-2">
                <span><i class="fas fa-user-plus"></i></span>
                Create
            </a>
        </div>

        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>License No</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Marvin D. Valaquio</td>
                    <td>Medical Officer IV</td>
                    <td>121578</td>
                    <td>08/03/2021</td>
                    <td>Active</td>
                    <td>
                        <a href="{{'/admin/medical-officer/view'}}" class="btn btn-outline-warning">View</a>
                        <button class="btn btn-outline-danger" id='activateMedicalOfficer'>Deactivate</button>
                    </td>
                </tr>

                <tr>
                    <td>Gerfer Emmanuel O. De Villa</td>
                    <td>Medical Officer IV</td>
                    <td>125163</td>
                    <td>08/03/2021</td>
                    <td>Active</td>
                    <td>
                        <a href="" class="btn btn-outline-warning">View</a>
                        <button class="btn btn-outline-danger" id='btn'>Deactivate</button>
                    </td>
                </tr>

                <tr>
                    <td>Mark Anthony Sta.Elena</td>
                    <td>Medical Officer IV</td>
                    <td>132308</td>
                    <td>08/03/2021</td>
                    <td>Active</td>
                    <td>
                        <a href="" class="btn btn-outline-warning">View</a>
                        <button class="btn btn-outline-danger"  id='isActiveToggle'>Deactivate</button>
                    </td>
                </tr>

                <tr>
                    <td>Juan Dela Cruz</td>
                    <td>Medical Officer IV</td>
                    <td>12345</td>
                    <td>08/03/2021</td>
                    <td>Inactive</td>
                    <td>
                        <a href="" class="btn btn-outline-warning">View</a>
                        <button class="btn btn-outline-success"  id='isActiveToggle'>Activate</button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
</section>

@endsection