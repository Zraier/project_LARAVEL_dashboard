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
        <h4 class="h4 text-blue mb-30">All Active Trips</h4>
        <div class="card-deck mb-30">
            @foreach ($data as $trip)
            <div class="card">
                <img
                    class="card-img-top"
                    src="vendors/images/img2.jpg"
                    alt="Card image cap"
                />
                <div class="card-body">
                    <h4>{{ $trip->country->name }}</h4>
                    <h5>{{ $trip->date }}</h5>
                    <h5>{{ $trip->duree }} Days</h5>
                    <p class="card-text">
                        {{$trip->programme}}
                    </p>
                    
                </div>
            </div>
            @endforeach
            
    </div>
</div>				
@endsection