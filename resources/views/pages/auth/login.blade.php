@extends('layouts/non-authenticated')

@section('title', 'Title')

@section('content')
<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-6 p-5">
                                <div class="mx-auto mb-5">
                                    <a href="index.html">
                                        <img src="{{asset('html/dist')}}/assets/images/logo.png" alt="" height="24" />
                                        <h3 class="d-inline align-middle ml-1 text-logo">sadsasdasd</h3>
                                        <h5>The THhing</h5>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-4">Selamat Datang!</h6>
                                <p class="text-muted mt-1 mb-4">Masukan username dan password untuk masuk ke halaman utama.</p>

                                <form action="{{ route('auth.validate-login' )}}" class="authentication-form" method="post">
                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif

                                @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Username</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="mail"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username anda" value="{{ old('username') }}" required>
                                        </div>
                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        {{-- <a href="pages-recoverpw.html" class="float-right text-muted text-unline-dashed ml-1">Forgot your password?</a> --}}
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="icon-dual" data-feather="lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password anda" required>
                                        </div>
                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>

                                        <!-- <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="checkbox-signin" checked>
                                            </div>
                                            <label class="custom-control-label" for="checkbox-signin">Remember
                                                me</label> -->
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In
                                        </button>
                                    </div>
                                </form>
                                <!-- <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span></div> -->
                                <div class="row">
                                    <div class="col-6">
                                        <!-- <a href="" class="btn btn-white"><i class='uil uil-google icon-google mr-2'></i>With Google</a> -->
                                    </div>
                                    <div class="col-6 text-right">
                                        <!-- <a href="" class="btn btn-white"><i class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-none d-md-inline-block">
                                <img src="{{asset('img')}}/4826435.jpg" style="width: 100%;" alt="">
                                <!-- <div class="auth-page-sidebar">
                                    <div class="overlay"></div>
                                    <div class="auth-user-testimonial">
                                        <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                                        <p class="lead">"It's a elegent templete. I love it very much!"</p>
                                        <p>- Admin User</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-muted">Lupa Password? <a href="pages-register.html" class="text-primary font-weight-bold ml-1">Hubungi Tim IT </a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
@endsection
