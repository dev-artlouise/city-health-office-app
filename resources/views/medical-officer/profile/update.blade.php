<!---Medical/Profile/update-->
@extends('layouts.app-medical-officer')
@section('medical-officer-content')

<div class="container">
    <h2>Update Medical Officer</h2>
    
    <form action="">
        <div class="form-row">
            
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
                <label for="street">Street</label>
                <input type="text" id="street" class="form-control" placeholder='House-No/Block/Street' name="street">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="barangay">Barangay</label>
                <input type="text" id="barangay" class="form-control" placeholder='Update Barangay' name="barangay">
            </div>


            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="contact">Contact Number</label>
                <input type="text" id="contact" class="form-control" placeholder='Update Contact Number' name="contact_number">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-4">
                <label for="email">Email Address</label>
                <input type="email" id="email" class="form-control" placeholder='Update Email Address' name="email">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for=position>Work Position</label>
                <input type="text" id="position" class="form-control" placeholder="Update Work Position">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="license">License No</label>
                <input type="text" id="license" class="form-control" placeholder="Update License Number">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for=position>Username</label>
                <input type="text" id="position" class="form-control" placeholder="Update Work Position">
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="license">Password</label>
                <input type="text" id="license" class="form-control" placeholder="Update License Number">
            </div>

        </div>

        <div class="action-buttons">
            <button type="button" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-success">Save</button>
        </div>

    </form>
</div>
@endsection
