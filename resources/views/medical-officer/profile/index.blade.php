@extends('layouts.app-medical-officer')
@section('medical-officer-content')
<div class="container profile">
    <form>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="{{asset('img/default-avatar.jpg')}}" alt="profile-avatar"/>
                    {{-- <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div> --}}
                </div>
            </div>

            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        Marvin D. Valaquio
                    </h5>
                    <h6>
                        Medical Officer IV
                    </h6>
                </div>
            </div>

            <div class="col-md-2">
                <a  class="btn btn-outline-primary" href="{{('/medical-officer/profile/update')}}">Update</a>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="profile-work">
                    
                    <p>WORK INFORMATION</p>
                    <span>Medical Officer IV</span><br>
                    <span>License No. 121578</span>

                    <p>CONTACT INFORMATION</p>
                    <span>0909-090-9090</span><br>
                    <span>sampleemail.gmail.com</span>

                    <p>STATUS</p>
                    <span>Active</span><br>
            
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <label>Age</label>
                            </div>
                            <div class="col-md-6">
                                <p>30</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Date of Birth</label>
                            </div>
                            <div class="col-md-6">
                                <p>sample date of birth</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                                <p>male</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Civil Status</label>
                            </div>
                            <div class="col-md-6">
                                <p>Single</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Citizenship</label>
                            </div>
                            <div class="col-md-6">
                                <p>Filipino</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Street</label>
                            </div>
                            <div class="col-md-6">
                                <p>sample street</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Barangay</label>
                            </div>
                            <div class="col-md-6">
                                <p>sample barangay</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>City</label>
                            </div>
                            <div class="col-md-6">
                                <p>Zamboanga</p>
                            </div>
                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </form>           
</div>
@endsection