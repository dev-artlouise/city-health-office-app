@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="form-container" method="post" action="{{ url ('/client/login') }}">

                    <div class="data-privacy">
                        <div class="card">
                            
                            <div class="card-header">
                               <h2> Data Privacy </h2>
                            </div>

                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Eum eveniet dolore tenetur commodi, modi recusandae nesciunt at, 
                                    dolorum veritatis vero dolor est, aliquam deserunt impedit maiores. 
                                    Laborum molestiae exercitationem quaerat.
                                <p>

                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                    Eum eveniet dolore tenetur commodi, modi recusandae nesciunt at, 
                                    dolorum veritatis vero dolor est, aliquam deserunt impedit maiores. 
                                    Laborum molestiae exercitationem quaerat.
                                <p>

                                <p class="card-text">
                                    <strong>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Eum eveniet dolore tenetur commodi, modi recusandae nesciunt at,
                                    </strong>
                                </p>

                                <p class="card-text"> 
                                    <strong>
                                    ipsum dolor sit amet consectetur adipisicing elit. 
                                    Eum eveniet dolore tenetur commodi,
                                    </strong>
                                <p>

                            </div>
                        </div>
                    </div>

                    <div class="general-info mt-2">
                        <div class="card">

                            <div class="card-header">
                                <h4>General Information</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-row">
                        
                                    <div class="form-group col-12">
                                        <label for="firstName">First Name - Unang Pangalan</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="Juan" name="first_name">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="lastName">Last Name - Apelyido</label>
                                        <input type="text" id="lastName" class="form-control" placeholder="Dela Cruz" name="last_name">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="middleName">Middle Name - Panggitnang Apelyido</label>
                                        <input type="text" id="middleName" class="form-control" placeholder="Middle Name - Panggitnang Apelyido" name="middle_name">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="dateofBirth">Date of Birth - Kaarawan</label>
                                        <input type="date" id="dateofBirth" class="form-control">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="gender">Gender</label>
                
                                        <div class="form-check form-check-inline pl-3">
                                            <input class="form-check-input" type="radio" name="gender_options" id="gender"
                                                value="male" checked>
                                            <label class="form-check-label" for="male">Male - Lalake</label>
                                        </div>
                
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="gender_options" id="gender"
                                                value="female">
                                            <label class="form-check-label" for="female">Female - Babae</label>
                                        </div>
                                    </div>
                
                                    <div class="form-group col-12">
                
                                        <label for="civilStatus">Civil Status - Estadong Sibil</label>
                
                                        <div class="form-row align-items-center">
                                            <div class="col my-1">
                                                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                    <option selected>Select Civil Status - Pumili ng Estadong Sibil</option>
                                                    <option>Single</option>
                                                    <option>Married - Kasal</option>
                                                    <option>Widowed - Biyudo/Biyuda</option>
                                                    <option>Annuled - Napawalang Bisa</option>
                                                    <option>Separated - Hiwalay</option>
                                                    <option>N/A - Hindi Naaangkop</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="citizenship">Citizenship</label>
                                        <input type="text" id="citizenship" class="form-control" placeholder='Filipino' name="citizenship">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="Current Address mt-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Current Address</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="house_address">House Address - Tirahan</label>
                                        <input type="text" id="street" class="form-control" placeholder='123 Bukangliwayway St.' name="street">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="barangay">Barangay</label>
                                        <input type="text" id="barangay" class="form-control" placeholder='Mercedes' name="barangay">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="city">City - Lungsod</label>
                                        <input type="text" id="street" class="form-control" placeholder='Zamboanga' name="city">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>
                    
                    <div class="contact-info mt-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Contact Information</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="contact">Contact Number</label>
                                        <input type="text" id="contact" class="form-control" placeholder='09090909090' name="contact_number">
                                    </div>
                
                                    <div class="form-group col-12">
                                        <label for="email">Email Address</label>
                                        <input type="email" id="email" class="form-control" placeholder='juandelacruz@gmail.com' name="email">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
        
                    <div class="attachments mt-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>Attachments</h4>
                            </div>

                            <div class="card-body">
                                <div class="form-group col-12">
                                    <label for="attachment"><span>Please upload your scanned or picture of Reverse transcription polymerase chain reaction (RTPCR)</span></label>
                                    <input type="file" id="attachment" class="form-control" placeholder=''>
                                </div>
                
                                <div class="form-group col-12 mt-2">
                                    <label for="attachment"><span>Please upload your scanned or picture of Chest X-RAY Result</span></label>
                                    <input type="file" id="attachment" class="form-control" placeholder=''>
                                </div>
                
                                <div class="form-group col-12 mt-2">
                                    <label for="attachment"><span>Please upload your scanned or picture of Declaration Form</span></label>
                                    <input type="file" id="attachment" class="form-control" placeholder=''>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <input id="btn-submit" class="btn btn-outline-success btn-block mt-2" type="submit" value="Submit">
                    
                </form>
            </div>
        </div>
    </div>

@endsection