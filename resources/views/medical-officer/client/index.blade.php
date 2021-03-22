<!--Medical-Officer/Client/index--->
@extends('layouts.app-medical-officer')
@section('medical-officer-content')

<header>
    <div class="search-wrapper">
        <span class="search"><i class="fas fa-search"></i></span>
        <input class="" type="search" placeholder="Enter Control Number">
    </div>

    <div class="social-icons">
        <span class="bell"></span>
        <div></div>
    </div>
</header>

<section class="recent">
    <h3>Search Results</h3>
    <div class="recent-table-card">
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date Approved</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ricah Mae Maque</td>
                        <td>03/20/2021</td>
                        <td>Approved</td>
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