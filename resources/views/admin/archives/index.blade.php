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

<div container>
    <h2 class="dashboard-title">Archives</h2>

    <div class="dashboard-cards">

        <div class="card-single">
            <div class="card-body">
                <span><i class="fas fa-users"></i></span>
                <div >
                    <h5>CLIENTS</h5>
                    <h4>3</h4>
                </div>
            </div>
            {{-- <div class="card-footer">
                <a href="/admin/client/">View</a>
            </div> --}}
        </div>

    </div>


    <section class="recent">
        <div class="table-responsive">
            <h2 class="dashboard-title">Client Data</h2>

             <!--Filter function buttons-->
            <div class="col-xs-12 col-sm-12 col-md-4 mt-3 pl-5">
                <label for="sex">Sort By: </label>

                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="RadioOptions" id="male"
                        value="male" checked>
                    <label class="form-check-label" for="male">Date approved</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="RadioOptions" id="option2"
                        value="female">
                    <label class="form-check-label" for="female">Reviewed By</label>
                </div>
            </div>

            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Street</th>
                        <th>Barangay</th>
                        <th>City</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Date Requested</th>
                        <th>Date Approved</th>
                        <th>Reviewed By</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00001</td>
                        <td>Art Louise Sambrano</td>
                        <td>05/29/1999</td>
                        <td>21</td>
                        <td>Male</td>
                        <td>Mcll Highway</td>
                        <td>Tetuan</td>
                        <td>Zamboanga</td>
                        <td>0997783448</td>
                        <td>dev.artlouises@gmail.com</td>
                        <td>Approved</td>
                        <td>03/08/2021</td>
                        <td>03/09/2021</td>
                        <td>Marvin D. Valaquio</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button type="button" class="btn btn-outline-secondary mb-2">
            <span><i class="fas fa-file-download"></i></span>
            Export
        </button>
        </div>
    </section>

    
@endsection