@extends('agency.agency_dashboard')
@section('agency')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>Planing</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Plan a Trip
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Default Basic Forms Start -->
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Yalla Tripi</h4>
                    <p class="mb-30">Create your own travel plan</p>
                </div>
            </div>
            <div class="wizard-content">
                <form class="tab-wizard wizard-circle wizard">
                    <h5>Personal Info</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name :</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name :</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address :</label>
                                    <input type="email" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number :</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select City :</label>
                                    <select class="custom-select form-control">
                                        <option value="">Select City</option>
                                        <option value="Amsterdam">India</option>
                                        <option value="Berlin">UK</option>
                                        <option value="Frankfurt">US</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date of Birth :</label>
                                    <input
                                        type="text"
                                        class="form-control date-picker"
                                        placeholder="Select Date"
                                    />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h5>Job Status</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job Title :</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Name :</label>
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Job Description :</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h5>Interview</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Interview For :</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Interview Type :</label>
                                    <select class="form-control">
                                        <option>Normal</option>
                                        <option>Difficult</option>
                                        <option>Hard</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Interview Date :</label>
                                    <input
                                        type="text"
                                        class="form-control date-picker"
                                        placeholder="Select Date"
                                    />
                                </div>
                                <div class="form-group">
                                    <label>Interview Time :</label>
                                    <input
                                        class="form-control time-picker"
                                        placeholder="Select time"
                                        type="text"
                                    />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 4 -->
                    <h5>Remark</h5>
                    <section>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Behaviour :</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Confidance</label>
                                    <input type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Result</label>
                                    <select class="form-control">
                                        <option>Select Result</option>
                                        <option>Selected</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comments</label>
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>				
@endsection