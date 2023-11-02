@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
        <h1>Project Proposal</h1>
</div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Project Idea Form</h5>
              <form action="{{ url('add-idea') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-sm-100">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter ID" name="id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Department Name" name="department">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                    <select name="section" class="form-select">
                      <option selected>Select Section</option>
                      <option value="A1">A1</option>
                      <option value="A2">A2</option>
                      <option value="B1">B1</option>
                      <option value="B2">B2</option>
                      <option value="C">C</option>
                    </select>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Project Name" name="project_name">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input class="form-control" type="file" id="formFile" placeholder="Upload Project Idea" name="project_idea">
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