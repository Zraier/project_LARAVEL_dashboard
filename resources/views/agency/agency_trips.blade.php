@extends('agency.agency_dashboard')
@section('agency')
<div class="pd-ltr-20 xs-pd-20-10">
    <div class="min-height-200px">
        <div class="page-header">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="title">
                        <h4>My Trips</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                My Trips
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
            @php
                $username= Auth::user()->username;
                $profileData = App\Models\agencie::findByUsername($username);
                
          
                @endphp
            <div class="wizard-content">
                <form method="POST" action="{{ route('store.plan') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id_agence" value="{{ $profileData->id_agence }}">
                    <h5>Country Selection</h5>
                    <br>
                    
                        <div class="row">
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Departure Date  :</label>
                                    <input
                                    class="form-control"
                                    placeholder="Select Date"
                                    type="date"
                                    name="date"
                                    id="startDate"
                                />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Arrival Date :</label>
                                    <input
											class="form-control"
											placeholder="Select Date"
											type="date"
                                            id="endDate"
										/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Trip Days :</label>
                                    <input
											class="form-control"
											placeholder="Select Date"
											type="text"
                                            name="duree"
                                            id="dateDifference"
										/>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <br>
                                    <br>
                                    <label>Select Country :</label>
                                    <select class="selectpicker countrypicker" name="country" data-flag="true" data-live-search="true"></select>
                                </div>
                            </div>
                          
                        </div>

                    <!-- Step 2 -->
                    <h5>Programme</h5>
                    <br>
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Trip Programme :</label>
                                    <textarea class="form-control" name="programme"></textarea>
                                </div>
                            </div>
                        </div>
                  
                    <!-- Step 3 -->
                    <h5>Images</h5>
                    <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="fv-row">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="some-dropzone">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                
                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                    <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                </div>
                            </div>
						</div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    
                    <!-- Step 4 -->
                    
                </form>
            </div>
        </div>
    </div>
</div>				
@endsection