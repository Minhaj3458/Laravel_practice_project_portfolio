@extends('layouts.backend.app')
@section('title')
 | Create User
@endsection
@push('css')
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/codemirror/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/backend/plugins/codemirror/theme/monokai.css') }}"> 
@endpush
@section('Content_header')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Create User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Create User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection

@section('content')
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <!-- left column -->
          <div class="col-md-2"></div>
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Basic Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form method="POST" action="{{ route('auth_register') }}">
                 @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name"  autofocus>
           @error('name')
            <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
            </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" placeholder="Password"
          class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password"
          name="password_confirmation" required autocomplete="new-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
            </div>
            <!-- /.card -->

            </div> 
        </div>
       </div>
    </section>
@endsection
@push('js')
<!-- bs-custom-file-input -->

<script src="{{ asset('assets/backend/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<!-- Summernote -->
<script src="{{ asset('assets/backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- CodeMirror -->
<script src="{{ asset('assets/backend/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('assets/backend/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});

$(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endpush