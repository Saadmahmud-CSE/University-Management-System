@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
        <h1>All sessions</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Session</h5>

              <div class="row mb-3">
                <div class="col-sm-100">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Select Session</option>
                    <option value="1">Spring 2021</option>
                    <option value="2">Fall 2021</option>
                    <option value="2">Spring 2022</option>
                    <option value="2">Fall 2022</option>
                    </select>
                </div>
              
              </div>
              <label class="col-sm-2 col-form-label">Session Type : </label>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value=""> Running
                </label>
              </div>
              <div class="form-check-inline">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" value=""> Completed
                </label>
              </div>
              <div class="text-center mt-4">
                <button type="button" class="btn btn-dark btn-sm">Create Session</button>
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