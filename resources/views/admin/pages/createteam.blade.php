@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

<div class="pagetitle">
        <h1>Create Group</h1>
</div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Create Group Form</h5>
              <form action="{{ url('add-team') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="col-sm-100">
                  <div class="form-group">
                  <select class="form-select" name="team_name">
                    <option selected>Select Group Member</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                  </div>
                </div>
                
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 1 ID" name="member_1_id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 1 Name" name="member_1_name">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 2 ID" name="member_2_id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 2 Name" name="member_2_name">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 3 ID" name="member_3_id">
                  </div>
                </div>
                <div class="col-sm-100 mt-4">
                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Member 3 Name" name="member_3_name">
                  </div>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-dark btn-sm">Create Group</button>
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