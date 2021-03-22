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

<h2 class="dashboard-title">Overview For Clients</h2>

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

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-check"></i></span>
            <div >
                
                <h5>APPROVED</h5>
                <h4>1</h4>
            </div>
        </div>
        {{-- <div class="card-footer">
            <a href="/admin/client/">View</a>
        </div> --}}
    </div>

    <div class="card-single">
        <div class="card-body">
            <span><i class="fas fa-user-clock"></i></span>
            <div >
                
                <h5>PENDING</h5>
                <h4>2</h4>
            </div>
        </div>
        {{-- <div class="card-footer">
            <a href="/admin/client/">View</a>
        </div> --}}
    </div>

</div>

<section class="recent">
    <h3>Clients</h3>
    <div class="recent-table-card">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Date Requested</th>
                        <th>Status</th>
                        <th>Reviewed By</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td>00003</td>
                        <td>Jhon Ray Singson</td>
                        <td>03/19/2021</td>
                        <td>Pending</td>
                        <td>-</td>
                        <td>
                            <a href="" class="btn btn-outline-warning mb-2">
                                <!-- <span>+</span> -->
                                view
                            </a>
                        </td> 
                    </tr>

                    <tr>
                        <td>00002</td>
                        <td>Ricah Mae Maque</td>
                        <td>03/18/2021</td>
                        <td>Pending</td>
                        <td>-</td>
                        <td>
                            <a href="{{'/admin/client/view'}}" class="btn btn-outline-warning mb-2">
                                <!-- <span>+</span> -->
                                view
                            </a>
                        </td> 
                    </tr>

                    <tr>
                        <td>00001</td>
                        <td>Art Louise Sambrano</td>
                        <td>03/18/2021</td>
                        <td>Approved</td>
                        <td>Marvin D. Valaquio</td>
                        <td>
                            <button type="button" class="btn btn-outline-warning mb-2" data-toggle="modal" data-target="#modalviewUser">
                                <!-- <span>+</span> -->
                                view
                            </button>
                        </td> 
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection