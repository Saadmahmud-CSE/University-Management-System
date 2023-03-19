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
            <h5 class="card-title">Departments</h5>
              <div class="row mt-4">
                <label class="col-sm-2 col-form-label">Department : </label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                    <option selected>Select Department</option>
                    <option value="1">CSE</option>
                    <option value="2">EEE</option>
                    <option value="2">LAW</option>
                    <option value="2">ENGLISH</option>
                    </select>
                </div>

              </div>
              <div class="text-center mt-4">
                <button type="button" class="btn btn-dark btn-sm">Create Department</button>
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