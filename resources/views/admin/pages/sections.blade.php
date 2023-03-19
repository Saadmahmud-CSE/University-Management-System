@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
    <h1>All Sections</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Section</h5>

              <div class="">
                <div class="row mb-3">
                  <div class="col-sm-100">
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
                    <option selected>Select Session</option>
                    <option value="1">Spring 2021</option>
                    <option value="2">Fall 2021</option>
                    <option value="2">Spring 2022</option>
                    <option value="2">Fall 2022</option>
                    </select>
                  </div>
                  <div class="col-sm-100 mt-4">
                      <select class="form-select" aria-label="Default select example">
                      <option selected>Select Semester</option>
                      <option value="1">1st</option>
                      <option value="2">2nd</option>
                      <option value="2">3rd</option>
                      <option value="2">4th</option>
                      <option value="2">5th</option>
                      <option value="2">6th</option>
                      <option value="2">7th</option>
                      <option value="2">8th</option>
                      </select>
                  </div>
                
                </div>
                <label class="col-sm-2 col-form-labe">Select Section : </label>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value=""> A
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value=""> B
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value=""> C
                  </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value=""> A1
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" value=""> A2
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label ">
                      <input type="checkbox" class="form-check-input " value=""> B1
                    </label>
                  </div>
                  <div class="form-check-inline">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input " value=""> B2
                    </label>
                  </div>
              </div>
              <div class="text-center mt-4">
                <button type="button" class="btn btn-dark btn-sm">Create Section</button>
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