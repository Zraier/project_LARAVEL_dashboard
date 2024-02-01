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
      <div class="col-md-12 stretch-card">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Add Entreprise to DataBase</h6>
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" placeholder="Enter first name">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="row">
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Telephone</label>
                      <input type="text" class="form-control" placeholder="Enter city">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" placeholder="Enter state">
                    </div>
                  </div><!-- Col -->
                  <div class="col-sm-4">
                    <div class="mb-3">
                      <label class="form-label">Domaine Activity</label>
                      <input type="text" class="form-control" placeholder="Enter zip code">
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
                <div class="row">
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label class="form-label">UserName</label>
                      <input type="text" class="form-control" placeholder="UserName">
                    </div>
                  </div>
                </div>
                <div class="row"><!-- Col -->
                  <div class="col-sm-3">
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input type="password" class="form-control" autocomplete="off" placeholder="Password">
                    </div>
                  </div><!-- Col -->
                </div><!-- Row -->
              </form>
              <button type="button" class="btn btn-primary submit">Submit form</button>
          </div>
        </div>
      </div>
    </div>

  
</div>

@endsection