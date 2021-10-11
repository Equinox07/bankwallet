@extends('layouts.vertical')


@section('css')
<!-- Plugins css -->
<link href="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/multiselect/multiselect.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
    type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Open</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Open Account</h4>
    </div>
</div>
@endsection

@section('content')
<form class="needs-validation" method="POST" action="{{route('open.account')}}" novalidate>
    @csrf
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Open New Account</h4>
                <p class="sub-header">Provide account details</p>

                    <div class="form-group mb-3">
                        <label>Account Option</label>
                        <select data-plugin="customselect" class="form-control" name="account_option_id">
                            @foreach ($accountOptions as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Account Type</label>
                        <select data-plugin="customselect" class="form-control" name="account_type_id">
                            @foreach ($accountTypes as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Client full name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Client full name"
                        required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Gender</label>
                        <select data-plugin="customselect" class="form-control" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Marital Status</label>
                        <select data-plugin="customselect" class="form-control" name="marital_status">
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="validationCustom02" placeholder="Date of Birth"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom02" placeholder="Address"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Cell Phone</label>
                        <input type="text" name="phone" class="form-control" id="validationCustom02" placeholder="Cell Phone"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Email Address</label>
                        <input type="text" name="email" class="form-control" id="validationCustom02" placeholder="Email"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Nationality</label>
                        <select data-plugin="customselect" class="form-control" name="country_id">
                            @foreach ($countries as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">ID Type</label>
                        <select data-plugin="customselect" class="form-control" name="id_type_id">
                            @foreach ($idTypes as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">ID Number</label>
                        <input type="text" name="id_number" class="form-control" id="validationCustom02" placeholder="ID Number"
                        required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Client Tenant or Owner?</label> 
                        <select data-plugin="customselect" class="form-control" name="occupany_type">
                            <option value="tenant">Tenant</option>
                            <option value="owner">Owner</option>
                        </select>
                    </div> 

                    <h4 class="header-title mt-0 mb-1">Branch Information</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Registering Branch</label>
                        <select data-plugin="customselect" class="form-control" name="branch_id">
                            @foreach ($branches as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>


                    <h4 class="header-title mt-0 mb-1">Client Relationship Officer</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Registering Branch</label>
                        <select data-plugin="customselect" class="form-control" name="client_relation_officer_id">
                            
                            @foreach ($users as $item)
                            @if ($item->id > 2)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <h4 class="header-title mt-0 mb-1">Currency</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Currency</label>
                        <select data-plugin="customselect" class="form-control" name="currency_id">
                            @foreach ($currencies as $item)
                                <option value="{{$item->id}}">{{$item->short_code}}</option>
                            @endforeach
                        </select>
                    </div>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">Employment Details</h4>
                <p class="sub-header">Provide employment details</p>
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Employer Name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Employer name"
                        >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Occupation</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Occupation"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Income</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Income"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    

                    <h4 class="header-title mt-0 mb-1">Next of Kin Information</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Name of Next of Kin</label>
                        <input type="text" name="next_of_kin_name" class="form-control" id="validationCustom02" placeholder="Name of Next of Kin"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">Relationship with Next of Kin</label>
                        <input type="text" name="next_of_kin_relationship" class="form-control" id="validationCustom02" placeholder="Relationship with Next of Kin"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">Contact of Next of Kin</label>
                        <input type="text" name="next_of_kin_contact" class="form-control" id="validationCustom02" placeholder="Contact of Next of Kin"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">Address of Next of Kin</label>
                        <input type="text" name="next_of_kin_address" class="form-control" id="validationCustom02" placeholder="Address of Next of Kin"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-1">Daily Susu Contribution</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Daily Contribution Amount(optional)</label>
                        <input type="text" name="daily_contribution_amount" class="form-control" id="validationCustom02" placeholder="Enter Customer Dail Contribution"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-1">Identity Documents</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">National ID Card [Passport, Voter, NHIS, Ghana Card, Driving License]</label>
                        <input type="file" name="national_id" class="form-control" id="validationCustom02" placeholder="National ID Card"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>


                    <div class="form-group mb-3">
                        <label for="validationCustom02">Passport Picure</label>
                        <input type="file" name="passport" class="form-control" id="validationCustom02" placeholder="Passport Picure"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">Utility Bill [Water, Telephone or Electricity]</label>
                        <input type="file" name="utility" class="form-control" id="validationCustom02" placeholder="Utility Bill"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">Signature/Thumbprint[add the sign or thumbprint of client]</label>
                        <input type="file" name="signature" class="form-control" id="validationCustom02" placeholder="Signature or Thumbprint of Client"
                            >
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <h4 class="header-title mt-0 mb-1">SMS / Email Subscription</h4>
                    <div class="form-group mb-3">
                        <label for="validationCustom02">Email Subscription</label>
                        <select data-plugin="customselect" class="form-control" name="email_subscription">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom02">SMS Subscription</label>
                        <select data-plugin="customselect" class="form-control" name="sms_subscription">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox form-check">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Open Personal Account for Approval</button>
                    
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</form>


@endsection

@section('script')
<!-- Plugins Js -->
<script src="{{ URL::asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/multiselect/multiselect.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
@endsection

@section('script-bottom')
<script src="{{ URL::asset('assets/js/pages/form-advanced.init.js') }}"></script>
@endsection