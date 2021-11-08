@php
//Get URL 
$url_type= request()->segments();
@endphp
@extends('crm.admin.dashboard.home')
@section('dashboard_custom_css')
<style>
    input[type='number'] {
        appearance: textfield;
    }
    input[type='number']::-webkit-inner-spin-button,
    input[type='number']::-webkit-outer-spin-button,
    input[type='number']:hover::-webkit-inner-spin-button, 
    input[type='number']:hover::-webkit-outer-spin-button {
        -webkit-appearance: none !important;
        appearance: none !important;
        margin: 0 !important;
    }
</style>
@endsection
@section('dashboard_content')
    @section('page_header')
        <h5 class="h5">{{$url_type[3]==='add'?'Add Students':'Edit Students'}}</h5>
    @endsection
    <div class="container">
        <form>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!--Account Related Information -->
                    
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">                       
                        <b>Account Information</b>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentFirstName" class="form-label">Student First Name</label>
                                <input type="text" class="form-control" id="StudentFirstName" name="first_name" placeholder="John">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Student Last Name</label>
                                <input type="text" class="form-control" id="StudentLastName" name="last_name" placeholder="Doe">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentMobileNumber" class="form-label">Student Mobile Number</label>
                                <input type="tel" class="form-control" id="StudentMobileNumber" name="mobile_number" placeholder="0123456789" onkeypress="return isNumber(event)" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentMobileNumber" class="form-label">Student Whatsapp Number</label>
                                <input type="tel" class="form-control" id="StudentWhatsappNumber" name="whatsapp_number" placeholder="0123456789" onkeypress="return isNumber(event)" />
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="MobileNumberCheck">
                                    <label class="form-check-label" for="MobileNumberCheck">
                                    Same as Mobile Number
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentEmailId" class="form-label">Student Email ID</label>
                                <input type="text" class="form-control" id="StudentEmailId" name="email" placeholder="johndoe@example.com">
                            </div>
                        </div>
                    </div> 
                    <!--Education Information -->
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">                       
                        <b>Education Information</b>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentFirstName" class="form-label">Presently Pursuing</label>
                                <select class="form-select" id="pursuingGrade" name="pursing_grade" aria-label="Default Gender">
                                    <option value="">Please Select Grade</option>
                                    <option value="1">Kinder Garden</option>
                                    <option value="2">Classes 1 to 10</option>
                                    <option value="3">PUC/11th/12th</option>
                                    <option value="4">Degree(UG/PG)</option>
                                    <option value="5">Diploma</option>
                                    <option value="6">Graduated</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="studentsGroup" style="display: none">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Shool</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select School Name</option>                                
                                    <option value="1">Shantiniketana</option>
                                    <option value="2">Delhi Public School, Rourkela</option>
                                    <option value="3">DBM</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Student Grade</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select School Grade</option>                                
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="collegeGroup"  style="display: none">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">College</label>
                                <select class="form-select" aria-label="Select College Name">
                                    <option value="">Select College Name</option>                                
                                    <option value="6">Graduated</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Degree Semester</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select Degree Semester</option>                                
                                    <option value="1">First Semester</option>
                                    <option value="2">Second Semester</option>
                                    <option value="3">Third Semester</option>
                                    <option value="4">Fourth Semester</option>
                                    <option value="5">Fifth Semester</option>
                                    <option value="6">Sixth Semester</option>
                                    <option value="7">Seventh Semester</option>
                                    <option value="8">Eight Semester</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Degree Type</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select Degree Type</option>                                
                                    <option value="1">Arts</option>
                                    <option value="2">Science</option>
                                    <option value="3">Commerece</option>
                                    <option value="3">Vocational</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Degree Course</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select Degree Course</option>  
                                    <optgroup label="Engineering">
                                        <option value="1">BE</option>
                                        <option value="2">BTech</option>
                                        <option value="3">ME</option>
                                        <option value="4">MTech</option>
                                    </optgroup>     
                                    <optgroup label="Degree">                         
                                        <option value="5">BSc</option>
                                        <option value="6">BCA</option>
                                        <option value="7">BA</option>
                                        <option value="8">BCOM</option>
                                        <option value="9">BVoc</option>                                        
                                        <option value="10">MSc</option>
                                        <option value="11">MCA</option>
                                        <option value="12">MA</option>
                                        <option value="13">MCOM</option>
                                        <option value="14">MVoc</option>
                                    </optgroup>
                                    <option value="15">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentLastName" class="form-label">Degree Status</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Select Degree Status</option>                                
                                    <option value="1">Pursuing</option>
                                    <option value="2">Completed</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">                       
                        <b>Personal Information</b>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentMobileNumber" class="form-label">Student Gender</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Please Select Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                    <option value="3">Other</option>
                                    <option value="4">Rather Not Tell</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentDOB" class="form-label">Student Date of Birth</label>
                                <input type="date" class="form-control" id="StudentDOB" placeholder="0123456789"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" id="StudentAddress" placeholder="Enter Your Address">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentEmailId" class="form-label">City</label>
                                <select class="form-select" aria-label="Student City">
                                    <option value="">Please Select City</option>
                                    @foreach(DB::table('cities')->whereIn('state_id',[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25])->get() as $city)
                                        <option value="{{$city->id}}">{{$city->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentEmailId" class="form-label">State</label>
                                <select class="form-select" aria-label="Default Gender">
                                    <option value="">Please Select you State</option>
                                    @foreach(DB::table('states')->where('country_id',101)->get() as $state)
                                    <option value="{{$state->id}}">{{$state->state}}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <label for="StudentEmailId" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="StudentEmailId" placeholder="560026">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="mb-3">
                                <input type="submit" class="btn btn-dark" value="Submit">
                                <input type="submit" class="btn btn-outline-dark" value="Cancel">
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </form>
    </div>
@endsection
@section('dashboard_custom_javascript')
    <script>
        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        $("#MobileNumberCheck").change(function() {
            if($(this).prop('checked')) {   
                mobile_no=$("#StudentMobileNumber").val();
                $("#StudentWhatsappNumber").val(mobile_no);
                console.log(mobile_no)
            }else{
                $("#StudentWhatsappNumber").val('');
            }
        });

        $("#pursuingGrade").change(function() {
            if($(this).val()== 1 || $(this).val()== 2 ) {   
                $("#studentsGroup").show();
                $("#collegeGroup").hide();
            }else if($(this).val()== 3 || $(this).val()== 4 || $(this).val()== 5) {   
                $("#studentsGroup").hide();
                $("#collegeGroup").show();
            }else{
                $("#studentsGroup").hide();
                $("#collegeGroup").hide();
            }
        });
    </script>
@endsection