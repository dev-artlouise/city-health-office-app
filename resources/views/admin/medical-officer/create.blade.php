@extends('layouts.app-admin')
@section('admin-content')
<div class="container">
    <h2>Create Medical Officer</h2>
    
    <form action="">
        <div class="form-row">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" class="form-control" placeholder="Enter First Name">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" class="form-control" placeholder="Enter Last Name">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="middleName">Middle Name</label>
                <input type="text" id="middleName" class="form-control" placeholder="Enter Middle Name">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="dob">Date Of Birth</label>
                <input type="date" id="dob" class="form-control">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 mt-5 pl-5">
                <label for="sex">Gender</label>

                <div class="form-check form-check-inline pl-3">
                    <input class="form-check-input" type="radio" name="gender_options" id="male"
                        value="male" checked>
                    <label class="form-check-label" for="male">Male</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender_options" id="female"
                        value="female">
                    <label class="form-check-label" for="female">Female</label>
                </div>
            </div>

            <div class="col-sm-12 col-xs-12 col-md-4">

                <label for="sex">Civil Status</label>

                <div class="form-row align-items-center">
                    <div class="col my-1">
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Select Civil Status</option>
                            <option>Single</option>
                            <option>Married</option>
                            <option>Widowed</option>
                            <option>Annuled</option>
                            <option>Separated</option>
                            <option>N/A</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="citizenship">Citizenship</label>
                <input type="text" id="citizenship" class="form-control" placeholder='Enter Citizenship' name="citizenship">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="street">Street</label>
                <input type="text" id="street" class="form-control" placeholder='House-No/Block/Street' name="street">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="barangay">Barangay</label>
                <input type="text" id="barangay" class="form-control" placeholder='Enter Barangay' name="barangay">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="city">Zamboanga City</label>
                <input type="text" id="street" class="form-control" placeholder='Enter City' name="city">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" class="form-control" placeholder='Enter Contact Number' name="contact_number">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" placeholder='Enter Email Address' name="email">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for=position>Work Position</label>
                <input type="text" id="position" class="form-control" placeholder="Enter Work Position">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="license">License No</label>
                <input type="text" id="license" class="form-control" placeholder="Enter License Number">
            </div>

        </div>

        <div class="action-buttons">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-success">
                Save
            </button>
        </div>

    </form>
</div>
@endsection