@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Section Table</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Session</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Course</th>
                    <th scope="col">Section</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sections as $s)
                  <tr>
                  <td>{{ $s->semester }}</td>
                    <td>{{ $s->section }}</td>
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