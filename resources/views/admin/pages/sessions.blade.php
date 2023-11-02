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
              <form action="{{ url('add-session') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-sm-100">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter ID" name="id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Session" name="session">
                  </div>
                </div>
              <div class="col-sm-100 mt-4">
                    <select name="session_type" class="form-select">
                        <option selected>Session Type</option>
                        <option value="Running">Running</option>
                        <option value="Completed">Completed</option>
                    </select>
                </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark btn-sm">Create Session</button>
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