<!--Admin/client/view-->
@extends('layouts.app-admin')
@section('admin-content')

    {{-- <div class="container">
        <h6 class=mt-3><strong>USER INFORMATION</strong></h6>

        <div class="form-row container mt-2">
            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="firstName">Id no:</label>
                <span><strong>00002</strong></span> 
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="firstName">First Name:</label>  
                <span><strong>Ricah Mae</strong></span> 
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="lastName">Last Name:</label>
                <span><strong>Macque</strong></span> 
                
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="middleName">Middle Name:</label>
                <span><strong>Garcia</strong></span> 
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Date of Birth:</label>
                <span><strong>05/29/1998</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Age:</label>
                <span><strong>22</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Gender:</label>
                <span><strong>Female</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Civil Status:</label>
                <span><strong>Single</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="lastName">Citizenship:</label>
                <span><strong>Filipino</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Street:</label>
                <span><strong>Zone 4</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">Barangay:</label>
                <span><strong>Zambowood</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <label for="">City:</label>
                <span><strong>Zamboanga</strong></span>
            </div>
        </div>

        <h6 class="mt-4"><strong>CONTACT INFORMATION</strong></h6>
        <div class="form-row container mt-2">
            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="">Contact Number:</label>
                <span><strong>0909090909</strong></span>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6">
                <label for="lastName">email:</label>
                <span><strong>ricah@gmail.com</strong></span>
            </div>
        </div>
            
        <h6 class="mt-4"><strong>ATTACHMENTS</strong></h6>
        <div class="form-row container mt-2">
            <div class="form-group col-4">
                <a href="{{asset('img/rtpcr.pdf')}}" target="blank">RTPCR.jpg</a>
            </div>

            <div class="form-group col-4">
                <a href="#" target="blank">Chest-Xray.jpeg</a>
            </div>
        </div>


        <h6 class="mt-4"><strong>STATUS INFORMATION</strong></h6>

        <div class="form-group">
            <span><strong>Pending Approval</strong></span>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success">Approve</button>
        </div>
    </div> --}}

    <div class="container profile">
        <h4>Client Information</h4>
        <form method="post">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="profile-work">
                        
                        <p>WORK INFORMATION</p>
                        <span>Medical Officer IV</span><br>
                        <span>License No. 121578</span>

                        <p>CONTACT INFORMATION</p>
                        <span>0909-090-9090</span><br>
                        <span>sampleemail.gmail.com</span>

                        <p>ATTACHMENTS</p>
                        <span><a href="{{asset('img/rtpcr.pdf')}}" target="blank">RTPCR.jpg</a></span><br>
                        <span><a href="#" target="blank">Chest-Xray.jpeg</a></span>
                        
                        <p>STATUS</p>
                        <span>Pending Approval</span><br>
                
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