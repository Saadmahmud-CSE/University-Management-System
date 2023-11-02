@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Courses</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Courses</h5>
              <form action="{{ url('add-course') }}" enctype="multipart/form-data" method="post">
                @csrf
              <div class="col-sm-100">
                <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter ID" name="id">
                </div>
              </div>
              <div class="col-sm-100 mt-4">
                  <select name="semester" class="form-select">
                  <option selected>Select Semester</option>
                  <option value="1st">1st</option>
                  <option value="2nd">2nd</option>
                  <option value="3rd">3rd</option>
                  <option value="4th">4th</option>
                  <option value="5th">5th</option>
                  <option value="6th">6th</option>
                  <option value="7th">7th</option>
                  <option value="8th">8th</option>
                  </select>
              </div>
              <div class="col-sm-100 mt-4">
                <div class="form-group">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Course Name" name="course_name">
                </div>
              </div>
              <div class="col-sm-100 mt-4">
                <select name="course_type" class="form-select">
                <option selected>Course Type</option>
                <option value="Laboratory">Laboratory</option>
                <option value="Theory">Theory</option>
                </select>
              </div>
              <div class="col-sm-100 mt-4">
                <select name="course_credit" class="form-select">
                <option selected>Course Credit</option>
                <option value="1">1</option>
                <option value="1.5">1.5</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                </select>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark btn-sm">Create Course</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection
@section('scripts')
<script src="{{ asset('admin/assets/js/courses.js') }}"></script>
@endsection