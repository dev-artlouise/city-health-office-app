@extends('layouts.app-admin')
@section('admin-content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{'/admin/medical-officer'}}">Medical Officers</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>

<div class="">
    <h2>Create Medical Officer</h2>
    
    <form action="" method="">

        <div class="row" >

            <div class="general-info col-xs-12 col-sm-12 col-lg-4 mt-3">
                <div class="card ">
                    <div class="card-header">
                        <h5>General Information</h5>
                    </div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="firstName">First Name</label>
                                <input type="text" id="firstName" class="form-control" placeholder="Enter First Name">
                            </div>
        
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="lastName">Last Name</label>
                                <input type="text" id="lastName" class="form-control" placeholder="Enter Last Name">
                            </div>
                
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="middleName">Middle Name</label>
                                <input type="text" id="middleName" class="form-control" placeholder="Enter Middle Name">
                            </div>
                
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" id="dob" class="form-control">
                            </div>

                            <div class="col-xs-12 col-sm-12">
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
                
                            <div class="col-xs-12 col-sm-12 col-sm-4">
                
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
                
                            <div class="form-group col-xs-12 col-sm-12 col-sm-4">
                                <label for="citizenship">Citizenship</label>
                                <input type="text" id="citizenship" class="form-control" placeholder='Enter Citizenship' name="citizenship">
                            </div>

                        </div> 
                    </div>
                </div>
            </div>

            <div class="current-address col-xs-12 col-sm-12 col-lg-4 mt-3">
                <div class="card ">
                    <div class="card-header">
                        <h5>Current Address</h5>
                    </div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="street">Street</label>
                                <input type="text" id="street" class="form-control" placeholder='House-No/Block/Street' name="street">
                            </div>
                
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="barangay">Barangay</label>
                                <input type="text" id="barangay" class="form-control" placeholder='Enter Barangay' name="barangay">
                            </div>
                
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="city">Zamboanga City</label>
                                <input type="text" id="street" class="form-control" placeholder='Enter City' name="city">
                            </div>
                        </div> 
                    </div>

                    <div class="card-header mt-2">
                        <h5>Contact Information</h5>
                    </div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="street">Email</label>
                                <input type="text" id="street" class="form-control" placeholder='House-No/Block/Street' name="street">
                            </div>
                
                            <div class="form-group col-xs-12 col-sm-12">
                                <label for="barangay">Contact Number</label>
                                <input type="text" id="barangay" class="form-control" placeholder='Enter Barangay' name="barangay">
                            </div>
                        </div> 
                    </div>    
                </div>
            </div>

            <div class="current-address col-xs-12 col-sm-12 col-lg-4 mt-3">
                <div class="card ">
                    <div class="card-header">
                        <h5>Work Information</h5>
                    </div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for=position>Work Position</label>
                                <input type="text" id="position" class="form-control" placeholder="Enter Work Position">
                            </div>
                
                            <div class="form-group col-12">
                                <label for="license">License No</label>
                                <input type="text" id="license" class="form-control" placeholder="Enter License Number">
                            </div> 
                        </div> 
                    </div>

                    <div class="card-header mt-2">
                        <h5>Account Information</h5>
                    </div>
    
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control" placeholder='Username' name="username">
                            </div>
                
                            <div class="form-group col-12">
                                <label for="password">Password</label>
                                <input type="password" id="password" class="form-control" placeholder='Password' name="password">
                            </div>

                            <div class="form-group col-12">
                                <label for="confirm password">Confirm Password</label>
                                <input type="password" id="confirm password" class="form-control" placeholder='Confirm password' name="confirm password">
                            </div>

                        </div> 
                    </div>    
                </div>
            </div>

            <div class="action-buttons pl-3 mt-3">
                <button type="button" class="btn btn-secondary">Cancel</button>
                <button type="button" class="btn btn-success">Create</button>
            </div>

        </div>
    </form>
</div>

@endsection