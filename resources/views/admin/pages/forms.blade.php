@extends('admin.layouts.default')
@section('main_content')
<main id="main" class="main">

    <div class="pagetitle">
    <h1>Form Elements</h1>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form>
                <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control">
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control">
                </div>
                </div>
                
                <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                </div>
                </div>
                
                <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Textarea</label>
                <div class="col-sm-10">
                    <textarea class="form-control" style="height: 100px"></textarea>
                </div>
                </div>
            
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Button</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>

            </form><!-- End General Form Elements -->

            </div>
        </div>

        </div>

    </div>
    </section>

</main><!-- End #main -->
@endsection
@section('scripts')
<script src="{{ asset('admin/assets/js/forms.js') }}"></script>
@endsection