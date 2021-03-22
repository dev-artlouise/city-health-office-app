<!--Medical-Officer/Client/View--->
@extends('layouts.app-medical-officer')
@section('medical-officer-content')
    
<div class="container profile">
    <h4>Client Information</h4>
    <form method="post">
        
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p>CONTACT INFORMATION</p>
                    <span>0909-090-9090</span><br>
                    <span>sampleemail.gmail.com</span>

                    <p>ATTACHMENTS</p>
                    <span><a href="{{asset('img/rtpcr.pdf')}}" target="blank">RTPCR.jpg</a></span><br>
                    <span><a href="#" target="blank">Chest-Xray.jpeg</a></span>
                    
                    <p>STATUS</p>
                    <span>Approved</span><br>
            
                </div>
            </div>

            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        
                        <div class="row">

                            <div class="col-md-6">
                                <label>Name</label>
                            </div>

                            <div class="col-md-6">
                                <p>Ricah Mae G. Maque</p>
                            </div>

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

             <div class="action-buttons">
                <button type="button" class="btn btn-success">Approve</button>
            </div>
            
        </div>

    </form>           
</div>

@endsection