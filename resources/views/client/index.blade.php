@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <div class="card w-80">
            <div class="card-header">
                <h5 class="card-title text-center">Client Information</h5>
            </div>

            <div class="card-body">

                <form action="">

                    <div class="form-row">
                        <div class="form-group col-sm-12 col-xs-12 col-md-4">
                            <label for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control" placeholder="Enter First Name" name="first_name">
                        </div>

                        <div class="form-group col-sm-12 col-xs-12 col-md-4">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control" placeholder="Enter Last Name" name="last_name">
                        </div>

                        <div class="form-group col-sm-12 col-xs-12 col-md-4">
                            <label for="middleName">Middle Name</label>
                            <input type="text" id="middleName" class="form-control" placeholder="Enter Middle Name" name="middle_name">
                        </div>

                        <div class="form-group col-sm-12 col-xs-12 col-md-4">
                            <label for="dateofBirth">Date of Birth</label>
                            <input type="date" id="dateofBirth" class="form-control">
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

                        <h4 class='mt-5'>Attachments</h4>

                        <div class="form-group col-xs-12 col-sm-12">
                            <label for="attachment"><span>Please upload your requirements here</span></label>
                            <input type="file" id="attachment" class="form-control" placeholder=''>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 mt-2">
                            <label for="attachment"><span>Please upload your requirements here</span></label>
                            <input type="file" id="attachment" class="form-control" placeholder=''>
                        </div>

                        <div class="form-group col-xs-12 col-sm-12 mt-2">
                            <label for="attachment"><span>Please upload your requirements here</span></label>
                            <input type="file" id="attachment" class="form-control" placeholder=''>
                        </div>

                    </div>

                    <button id="btn-submit" class="btn btn-success btn-block">Submit</button>
                    
                </form>

                <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
            </div>
        </div>
    </div>

@endsection