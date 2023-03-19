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
              <div class="col-sm-100">
                <select class="form-select" aria-label="Default select example">
                <option selected>Select Department</option>
                <option value="1">CSE</option>
                <option value="2">EEE</option>
                <option value="2">LAW</option>
                <option value="2">ECONOMICS</option>
                </select>
              </div>
              <div class="col-sm-100 mt-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Semester</option>
                <option value="1">1st</option>
                <option value="2">2nd</option>
                <option value="3">3rd</option>
                <option value="4">4th</option>
                <option value="5">5th</option>
                <option value="6">6th</option>
                <option value="7">7th</option>
                <option value="8">8th</option>
                </select>
              </div>
              <div class="col-sm-100 mt-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Select Course</option>
                <option value="1">DBMS</option>
                <option value="2">SD</option>
                <option value="2">OS</option>
                <option value="2">CN</option>
                </select>
              </div>
              <div class="col-sm-100 mt-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Course Type</option>
                <option value="1">Laboratory</option>
                <option value="2">Theory</option>
                </select>
              </div>
              <div class="col-sm-100 mt-4">
                <select class="form-select" aria-label="Default select example">
                <option selected>Course Credit</option>
                <option value="1">1</option>
                <option value="2">1.5</option>
                <option value="3">2</option>
                <option value="4">3</option>
                <option value="5">4</option>

                </select>
              </div>
              <div class="text-center mt-4">
                <button type="button" class="btn btn-dark btn-sm">Create Course</button>
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