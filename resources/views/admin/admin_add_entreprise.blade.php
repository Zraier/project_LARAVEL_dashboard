@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Entrerise</li>
        </ol>
    </nav>
    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">User Table</h6>
    <p class="text-muted mb-3">Here you can <a href="#" target="_blank">Update/Delete/Add </a>Users.</p>
    
  </div>
</div>
        </div>
    </div>

</div>

@endsection