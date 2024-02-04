@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Employees</li>
        </ol>
    </nav>

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
    <h6 class="card-title">employees Table</h6>
    <p class="text-muted mb-3">Here you can <a href="#" target="_blank">Update/Delete </a>employees.</p>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Entreprise</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adresse</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($EmployeeData as $key=>$employee )
            <tr>
                <td><img class="wd-100 rounded-circle" src="{{ !empty($employee->photo) ? url('upload/employee_image/'.$employee->photo) : url('upload/no_image.jpg')}}" alt="profile"></td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->user->username }}</td>
                <td>{{ $employee->entreprise->name}}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->status }}</td>
                <td>{{ $employee->created_at->format('Y-m-d') }}</td>
                <td><button type="button" class="btn btn-warning">Update</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>  
            @endforeach
          
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

@endsection