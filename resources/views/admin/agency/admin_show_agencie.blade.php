@extends('admin.admin_dashboard')
@section('admin')

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agencies</li>
        </ol>
    </nav>

    <div class="row">
    <div class="col-md-12 grid-margin stretch-card">
  <div class="card">
  <div class="card-body">
    <h6 class="card-title">Agencie Table</h6>
    <p class="text-muted mb-3">Here you can <a href="#" target="_blank">Update/Delete </a>Agencies.</p>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Photo</th>
            <th>Name</th>
            <th>UserName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Adresse</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($AgencieData as $key=>$agencie )
            <tr>
                <td><img class="wd-100 rounded-circle" src="{{ !empty($agencie->photo) ? url('upload/agencie_image/'.$agencie->photo) : url('upload/no_image.jpg')}}" alt="profile"></td>
                <td>{{ $agencie->name }}</td>
                <td>{{ $agencie->user->username }}</td>
                <td>{{ $agencie->email }}</td>
                <td>{{ $agencie->phone }}</td>
                <td>{{ $agencie->address }}</td>
                <td>{{ $agencie->status }}</td>
                <td>{{ $agencie->created_at->format('Y-m-d') }}</td>
                <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal{{$agencie->id_agence}}">
                  Update
                </button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>  
            <div class="modal fade" id="modal{{$agencie->id_agence}}" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Update Agency</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                  </div>
                  <div class="modal-body">
                    <form class="forms-sample" method="POST" action="{{ route('admin.AgencyUpdate') }}" enctype="multipart/form-data">
                      @csrf
                        <input type="hidden" name="id_agence" value="{{ $agencie->id_agence }}">
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$agencie->name}}" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" value="{{$agencie->user->username}}" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$agencie->email}}" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{$agencie->phone}}" autocomplete="off">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address" value="{{$agencie->address}}" autocomplete="off">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputUsername1" class="form-label">Status :</label>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" value="active" id="active" {{ $agencie->status === 'active' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioInline">Active</label>
                             
                          </div>
                          <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="status" value="inactive" id="inactive" {{ $agencie->status === 'inactive' ? 'checked' : '' }}>
                            <label class="form-check-label" for="radioInline1">Inactive</label>
                              
                          </div>
                          
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo" id="photo">
                        </div>
  
                        <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label"> </label>
                            <img id="imageShow" class="wd-80 rounded-circle" src="{{ !empty($agencie->photo) ? url('upload/agencie_image/'.$agencie->photo) : url('upload/no_image.jpg')}}" alt="profile">
                          
                        </div>
                        
                       
  
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
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