<!--Medical-Officer/Dashboard--->
@extends('layouts.app-medical-officer')
@section('medical-officer-content')

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

<h2 class="dashboard-title">Overview</h2>

<div class="dashboard-cards">

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-users"></i></span>
            <div>
                <h5>CLIENTS</h5>
                <h4>2</h4>
            </div>
        </div>
        <div class="card-footer">
            <a href="/admin/client/">View</a>
        </div>
    </div>
</div>

<section class="recent">
    <h3>Recent Client Request</h3>
    <div class="recent-table-card">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>Jhon Ray Singson</td>
                        <td>03/19/2021</td>
                        <td>Pending</td>
                        <td>
                            <button type="button" class="btn btn-outline-warning">
                                <!-- <span>+</span> -->
                                view
                            </button> 
                        </td>
                    </tr>

                    <tr>
                        <td>Ricah Mae Maque</td>
                        <td>03/18/2021</td>
                        <td>Pending</td>
                        <td>
                            <a  href="{{'/medical-officer/client/view'}}" class="btn btn-outline-warning">View</a>
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection