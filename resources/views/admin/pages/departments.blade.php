@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
        <h1>All Departments</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
            <h5 class="card-title">Create Departments</h5>
            <form action="{{url('add-dept')}}" enctype="multipart/form-data" method="post">
                @csrf
  
                <div class="col-sm-100">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter ID" name="id">
                  </div>
                </div>
              

              
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Departments" name="dept_name">
                  </div>
                </div>
              
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark btn-sm">Create Department</button>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
@section('scripts')
<script src="{{ asset('admin/assets/js/tables.js') }}"></script>
@endsection