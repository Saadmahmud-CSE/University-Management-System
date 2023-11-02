@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
        <h1>Student Information</h1>
</div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Student Information Form</h5>
              <form action="{{ url('add-student') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-sm-100">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter ID" name="id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Session" name="name">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Email" name="email">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Department Name" name="department">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Batch" name="batch">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <textarea name="address" class="form-control" cols="30" rows="3" placeholder="Enter Address Here"></textarea>
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Contact Number" name="contact_number">
                  </div>
                </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark btn-sm">Submit</button>
              </div>
              </form>
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