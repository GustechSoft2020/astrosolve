<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Form | Astrologer Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="astrologer registration" name="description" />
        <meta content="Astrologer" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico') }}">
        
        <!-- twitter-bootstrap-wizard css -->
        <link rel="stylesheet" href="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                    <div class="text-center mt-4">
                                        <div class="mb-3">
                                            <a href="index.html" class="auth-logo">
                                            <img src="{{ asset('backend/assets/images/logo-dark.png') }}" height="50" class="logo-dark mx-auto" alt="">
                                            <img src="{{ asset('backend/assets/images/logo-light.png') }}" height="50" class="logo-light mx-auto" alt="">
                                            </a>
                                        </div>
                                    </div>

                                        <div id="progrss-wizard" class="twitter-bs-wizard">
                                            <ul class="twitter-bs-wizard-nav nav-justified">
                                                <li class="nav-item">
                                                    <a href="#progress-seller-details" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">01</span>
                                                        <span class="step-title">Personal Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#progress-company-document" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">02</span>
                                                        <span class="step-title">Professional Details</span>
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#progress-bank-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">03</span>
                                                        <span class="step-title">Bank & Contact  Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#progress-confirm-detail" class="nav-link" data-toggle="tab">
                                                        <span class="step-number">04</span>
                                                        <span class="step-title">Confirm Detail</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div id="bar" class="progress mt-4">
                                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated"></div>
                                            </div>
                                            <form method="post" action="{{ route('store.astrologer') }}" enctype="multipart/form-data">
                                            @csrf

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                          
                                                <div class="tab-content twitter-bs-wizard-tab-content">
                                                    <div class="tab-pane" id="progress-seller-details">
                                                        
                                                            
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-firstname-input">Name*</label>
                                                                        <input type="text" name="name" class="form-control" id="progress-basicpill-firstname-input">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-lastname-input">Username*</label>
                                                                        <input type="text" name="username" class="form-control" id="progress-basicpill-lastname-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-lastname-input">Password*</label>
                                                                        <input type="text" name="password" class="form-control" id="progress-basicpill-lastname-input" >
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Mobile</label>
                                                                        <input type="text" name="mobile" class="form-control" id="progress-basicpill-phoneno-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-email-input">Email*</label>
                                                                        <input type="email" name="email" class="form-control" id="progress-basicpill-email-input" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-address-input">Address</label>
                                                                        <textarea id="progress-basicpill-address-input" name="address" class="form-control" rows="2"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
        
                                                    </div>
                                                    <div class="tab-pane" id="progress-company-document">
                                                    <div>
                                                    
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Date of Birth</label>
                                                                        <input type="date" name="dateofbirth" class="form-control" id="progress-basicpill-phoneno-input" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-email-input">Select Gender</label>
                                                                        <select class="form-select" name="gender" aria-label="Default select example">
                                                                            <option value="male">Male</option>
                                                                            <option value="female">Female</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Choose Language</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="English" id="formlangCheck1">
                                                                            <label class="form-check-label" for="formlangCheck1"> English </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Hindi" id="formlangCheck2">
                                                                            <label class="form-check-label" for="formlangCheck2"> Hindi </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Bengali" id="formlangCheck3">
                                                                            <label class="form-check-label" for="formlangCheck3"> Bengali </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Assamese" id="formlangCheck4">
                                                                            <label class="form-check-label" for="formlangCheck4"> Assamese </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Kashmiri" id="formlangCheck5">
                                                                            <label class="form-check-label" for="formlangCheck5"> Kashmiri </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Telugu" id="formlangCheck6">
                                                                            <label class="form-check-label" for="formlangCheck6"> Telugu </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Kannada"  id="formlangCheck7">
                                                                            <label class="form-check-label" for="formlangCheck7"> Kannada </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Tamil" id="formlangCheck8">
                                                                            <label class="form-check-label" for="formlangCheck8"> Tamil </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Malyalam"  id="formlangCheck9">
                                                                            <label class="form-check-label" for="formlangCheck9"> Malyalam </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Marathi" id="formlangCheck10">
                                                                            <label class="form-check-label" for="formlangCheck10"> Marathi </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Manipuri" id="formlangCheck11">
                                                                            <label class="form-check-label" for="formlangCheck11"> Manipuri </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]" value="Gujarati" id="formlangCheck12">
                                                                            <label class="form-check-label" for="formlangCheck12"> Gujarati </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="language[]"  value="Punjabi" id="formlangCheck13">
                                                                            <label class="form-check-label" for="formlangCheck13"> Punjabi </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-email-input">Choose Skills</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Love and Relationship" id="formskillsCheck1">
                                                                            <label class="form-check-label" for="formlangCheck1"> Love and Relationship </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Marriage Consultant" id="formskillsCheck2">
                                                                            <label class="form-check-label" for="formlangCheck2"> Marriage Consultant </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Career Consultant"  id="formskillsCheck3">
                                                                            <label class="form-check-label" for="formlangCheck3"> Career Consultant </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Finance Consulatant" id="formskillsCheck4">
                                                                            <label class="form-check-label" for="formlangCheck4"> Finance Consulatant </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]"  value="Gemstone Consultant" id="formskillsCheck5">
                                                                            <label class="form-check-label" for="formlangCheck5"> Gemstone Consultant</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Child Name Consultant" id="formskillsCheck6">
                                                                            <label class="form-check-label" for="formlangCheck6"> Child Name Consultant </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Birth Time Rectification" id="formskillsCheck7">
                                                                            <label class="form-check-label" for="formlangCheck7"> Birth Time Rectification </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Palmist" id="formskillsCheck8">
                                                                            <label class="form-check-label" for="formlangCheck8"> Palmist </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Wealth and Property"  id="formskillsCheck9">
                                                                            <label class="form-check-label" for="formlangCheck9"> Wealth and Property </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Match Making" id="formskillsCheck10">
                                                                            <label class="form-check-label" for="formlangCheck10"> Match Making </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="skills[]" value="Legal Matters" id="formskillsCheck11">
                                                                            <label class="form-check-label" for="formlangCheck11"> Legal Matters </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-phoneno-input">Expertise In</label>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="expertise[]" value="Legal Matters" id="formlangCheck1">
                                                                            <label class="form-check-label" for="formlangCheck1">  Legal Matters </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="expertise[]" value="Nadi Astrology"  id="formlangCheck2">
                                                                            <label class="form-check-label" for="formlangCheck2"> Nadi Astrology </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="expertise[]" value="Medical Astrology" id="formlangCheck3">
                                                                            <label class="form-check-label" for="formlangCheck3"> Medical Astrology </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="expertise[]" value="Tree Astrology" id="formlangCheck4">
                                                                            <label class="form-check-label" for="formlangCheck4"> Tree Astrology </label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" name="expertise[]"  value="Prashna Kundali" id="formlangCheck5">
                                                                            <label class="form-check-label" for="formlangCheck5"> Prashna Kundali </label>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    </div>
                                                    <div class="tab-pane" id="progress-bank-detail">
                                                        <div>
                                                            <div class="row">
                                                                    <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-namecard-input">Country</label>
                                                                        <select  id="country-dropdown" name="country" class="form-control">
                                                                            <option value="">-- Select Country --</option>
                                                                            @foreach ($countries as $data)
                                                                            <option value="{{$data->id}}">
                                                                                {{$data->name}}
                                                                            </option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-namecard-input">State</label>
                                                                        <select id="state-dropdown" name="state" class="form-control">
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-namecard-input">City</label>
                                                                        <select id="city-dropdown"  name="city" class="form-control">
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-lg-3">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-namecard-input">Pincode</label>
                                                                        <input type="text" class="form-control" name="pincode" id="progress-basicpill-namecard-input">
                                                                    </div>
                                                                    </div>
                                                            </div>

                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                            <label class="form-label" for="progress-basicpill-expiration-input">PAN Card Number</label>
                                                                            <input type="text" class="form-control" name="pancardnum" id="progress-basicpill-expiration-input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Bank Name</label>
                                                                        <input type="text" class="form-control" name="bankname" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Account Type</label>
                                                                        <input type="text" class="form-control" name="accounttype" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Account Number</label>
                                                                        <input type="text" class="form-control" name="accountnumber" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">IFSC Code</label>
                                                                        <input type="text" class="form-control" name="ifsccode" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Branch City</label>
                                                                        <input type="text" class="form-control" name="branchcity" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Branch Address</label>
                                                                        <input type="text" class="form-control" name="branchaddress" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">UPI Id</label>
                                                                        <input type="text" class="form-control" name="upiId" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">PayTm Number</label>
                                                                        <input type="text" class="form-control" name="paytmNumber" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Profile Pic</label>
                                                                        <input type="file" class="form-control" name="profilePic" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Upload ID Proof</label>
                                                                        <input type="file" class="form-control" name="uploadIdProof" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Alternate Email</label>
                                                                        <input type="text" class="form-control" name="altemail" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Whatsapp Mobile Number(*91)</label>
                                                                        <input type="text" class="form-control" name="whatsappnum"  id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Alt Mobile Number</label>
                                                                        <input type="text" class="form-control" name="altmobnum" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="mb-3">
                                                                        <label class="form-label" for="progress-basicpill-expiration-input">Suitable Time of Interview</label>
                                                                        <input type="text" name="suitabletimeofInterview" class="form-control" id="progress-basicpill-expiration-input">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="progress-confirm-detail">
                                                        <div class="row justify-content-center">
                                                            <div class="col-lg-6">
                                                                <div class="text-center">
                                                                    <div class="mb-4">
                                                                        <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                                                                    </div>
                                                                    <div>
                                                                        <h5>Are you want to confirm?</h5>
                                                                        <p class="text-muted">If you want to change any detail then go back to previous button.</p>
                                                                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Confirm">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                                                <li class="next"><a href="javascript: void(0);">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © astrosolve.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Astrosolve
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('backend/assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>

        <!-- twitter-bootstrap-wizard js -->
        <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/twitter-bootstrap-wizard/prettify.js') }}"></script>

        <!-- form wizard init -->
        <script src="{{ asset('backend/assets/js/pages/form-wizard.init.js') }}"></script>


    <script>
        $(document).ready(function () {
  
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#country-dropdown').on('change', function () {
                var idCountry = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-states')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state-dropdown').html('<option value="">-- Select State --</option>');
                        $.each(result.states, function (key, value) {
                            $("#state-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                    }
                });
            });
  
            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#state-dropdown').on('change', function () {
                var idState = this.value;
                console.log(idState);
                $("#city-dropdown").html('');
                $.ajax({
                    url: "{{url('api/fetch-cities')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                        $('#city-dropdown').html('<option value="">-- Select City --</option>');
                        $.each(res.cities, function (key, value) {
                            $("#city-dropdown").append('<option value="' + value
                                .id + '">' + value.city + '</option>');
                        });
                    }
                });
            });
  
        });
    </script>

    </body>
</html>
