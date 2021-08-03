@extends('admin.layouts.index')

@section('title', 'Show Category')

@section('judul')
Category
@endsection

@section('content')

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}
    
        <!-- DataTables Category Post-->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Show Category</h6>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{ $category->name }}" disabled>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Slug</label>
                <input type="text" class="form-control" id="name" value="{{ $category->slug }}" disabled>
              </div>
              <a href="{{ route('category.edit', $category->id) }}" type="submit" class="btn btn-primary">Edit</a>
              <a href="{{ route('category.index') }}" type="cancel" class="btn btn-danger">Cancel</a>
              {{-- <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div> --}}
            </div>
        </div>
    </div>
</div>

@endsection