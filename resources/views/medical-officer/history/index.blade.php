@extends('layouts.app-medical-officer')
@section('medical-officer-content')

<section class="recent">
    <div class="table-responsive">
        <h2 class="dashboard-title">Clients that you have approved</h2>

         <!--Filter function buttons-->
        <div class="col-xs-12 col-sm-12 col-md-4 mt-3 pl-5">
            <label for="sex">Sort By: </label>

            <div class="form-check form-check-inline pl-3">
                <input class="form-check-input" type="radio" name="RadioOptions" id="male"
                    value="male" checked>
                <label class="form-check-label" for="male">Date</label>
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

{{-- <div class='container'>
    <div class="table-responsive">

      <h2>Clients that you have Approved</h2>

      <div class="col-xs-12 col-sm-12 col-md-4 mt-5 pl-5">
          <label for="sex">Filter By: </label>

          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="RadioOptions" id="option2"
                  value="female">
              <label class="form-check-label" for="female">Sort By Date</label>
          </div>

      </div>

      <table class="table table-striped table-sm">
          <thead>
              <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Status</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>Ricah Mae Maque</td>
                  <td>03/10/2021</td>
                  <td>Pending</td>
              </tr>

          </tbody>
      </table>

      <button type="button" class="btn btn-outline-secondary mb-2" data-toggle="modal" data-target="#modalviewUser">
          <!-- <span>+</span> -->
          Export
      </button> 
    </div>

</div> --}}
@endsection