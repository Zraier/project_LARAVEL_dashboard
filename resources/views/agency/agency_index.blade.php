@extends('agency.agency_dashboard')
@section('agency')
<div class="xs-pd-20-10 pd-ltr-20">
    <div class="title pb-20">
        <h2 class="h3 mb-0">Hospital Overview</h2>
    </div>

    <div class="row pb-10">
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">75</div>
                        <div class="font-14 text-secondary weight-500">
                            Appointment
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#00eccf">
                            <i class="icon-copy dw dw-calendar1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">124,551</div>
                        <div class="font-14 text-secondary weight-500">
                            Total Patient
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#ff5b5b">
                            <span class="icon-copy ti-heart"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">400+</div>
                        <div class="font-14 text-secondary weight-500">
                            Total Doctor
                        </div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon">
                            <i
                                class="icon-copy fa fa-stethoscope"
                                aria-hidden="true"
                            ></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
            <div class="card-box height-100-p widget-style3">
                <div class="d-flex flex-wrap">
                    <div class="widget-data">
                        <div class="weight-700 font-24 text-dark">$50,000</div>
                        <div class="font-14 text-secondary weight-500">Earning</div>
                    </div>
                    <div class="widget-icon">
                        <div class="icon" data-color="#09cc06">
                            <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pb-10">
        <div class="col-md-8 mb-20">
            <div class="card-box height-100-p pd-20">
                <div
                    class="d-flex flex-wrap justify-content-between align-items-center pb-0 pb-md-3"
                >
                    <div class="h5 mb-md-0">Hospital Activities</div>
                    <div class="form-group mb-md-0">
                        <select class="form-control form-control-sm selectpicker">
                            <option value="">Last Week</option>
                            <option value="">Last Month</option>
                            <option value="">Last 6 Month</option>
                            <option value="">Last 1 year</option>
                        </select>
                    </div>
                </div>
                <div id="activities-chart"></div>
            </div>
        </div>
        <div class="col-md-4 mb-20">
            <div
                class="card-box min-height-200px pd-20 mb-20"
                data-bgcolor="#455a64"
            >
                <div class="d-flex justify-content-between pb-20 text-white">
                    <div class="icon h1 text-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                    </div>
                    <div class="font-14 text-right">
                        <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                        <div class="font-12">Since last month</div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div class="text-white">
                        <div class="font-14">Appointment</div>
                        <div class="font-24 weight-500">1865</div>
                    </div>
                    <div class="max-width-150">
                        <div id="appointment-chart"></div>
                    </div>
                </div>
            </div>
            <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
                <div class="d-flex justify-content-between pb-20 text-white">
                    <div class="icon h1 text-white">
                        <i class="fa fa-stethoscope" aria-hidden="true"></i>
                    </div>
                    <div class="font-14 text-right">
                        <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                        <div class="font-12">Since last month</div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-end">
                    <div class="text-white">
                        <div class="font-14">Surgery</div>
                        <div class="font-24 weight-500">250</div>
                    </div>
                    <div class="max-width-150">
                        <div id="surgery-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
     
        <div class="col-lg-4 col-md-6 mb-20">
            <div class="card-box height-100-p pd-20 min-height-200px">
                <div class="d-flex justify-content-between">
                    <div class="h5 mb-0">Diseases Report</div>
                    <div class="dropdown">
                        <a
                            class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                            data-color="#1b3133"
                            href="#"
                            role="button"
                            data-toggle="dropdown"
                        >
                            <i class="dw dw-more"></i>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
                        >
                            <a class="dropdown-item" href="#"
                                ><i class="dw dw-eye"></i> View</a
                            >
                            <a class="dropdown-item" href="#"
                                ><i class="dw dw-edit2"></i> Edit</a
                            >
                            <a class="dropdown-item" href="#"
                                ><i class="dw dw-delete-3"></i> Delete</a
                            >
                        </div>
                    </div>
                </div>

                <div id="diseases-chart"></div>
            </div>
        </div>
       
    </div>

    

    <div class="title pb-20 pt-20">
        <h2 class="h3 mb-0">Quick Start</h2>
    </div>

    <div class="row">
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="vendors/images/medicine-bro.svg" alt="" />
                </div>
                <div class="content">
                    <h3 class="h4">Services</h3>
                    <p class="max-width-200">
                        We provide superior health care in a compassionate maner
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="vendors/images/remedy-amico.svg" alt="" />
                </div>
                <div class="content">
                    <h3 class="h4">Medications</h3>
                    <p class="max-width-200">
                        Look for prescription and over-the-counter drug information.
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-20">
            <a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
                <div class="img pb-30">
                    <img src="vendors/images/paper-map-cuate.svg" alt="" />
                </div>
                <div class="content">
                    <h3 class="h4">Locations</h3>
                    <p class="max-width-200">
                        Convenient locations when and where you need them.
                    </p>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection