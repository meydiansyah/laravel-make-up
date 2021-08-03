@extends('admin.layouts.index')

@section('title', 'Client')

{{-- @section('btn')
<a href="{{ route('client.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i> Add Data
</a>
@endsection --}}

@section('judul')
Client
@endsection

@section('content')

@if (auth()->user()->role == "admin")
@endif

<!-- Start Content Row -->
<div class="row">
  <!-- Start Content Column -->
  <div class="col-lg-12 mb-4">
    <!-- Start DataTables Biodata Freelancer-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Data Clients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                {{-- <th>Photo Profile</th> --}}
                                <th>City</th>
                                <th>Address</th>
                                <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $user)
                        <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                {{-- <td>
                                    <img style="width: 50px" src="{{ asset('admin') }}{{$user->image}}" alt="photo profile">
                                </td> --}}
                                <td>{{$user->city}}</td>
                                <td>{{$user->address}}</td>
                                <td>
                                    <form action="{{ route('client.destroy', $user->id) }}" method="POST">
                                        <a href="{{ route('client.show', $user->id) }}" class="btn btn-sm btn-info mr-1"><i class="fas fa-search"></i></a>
                                        {{-- <a href="{{ route('client.edit', $user->id) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-pencil-alt"></i></a> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- End DataTables Biodata Freelancer-->
  </div>
  <!-- End Content Column -->
</div>
<!-- End Content Row -->

@endsection