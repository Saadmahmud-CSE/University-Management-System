@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Course Table</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Short Name</th>
                    <th scope="col">Credit</th>
                    <th scope="col">Type</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Department</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($courses as $u)
                  <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->short_name }}</td>
                    <td>{{ $u->credit }}</td>
                    <td>{{ $u->type }}</td>
                    <td>{{ $u->semester }}</td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

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