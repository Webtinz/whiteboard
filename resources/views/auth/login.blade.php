<!doctype html>
<html lang="en">


<!-- Mirrored from preview.pichforest.com/probic/layouts/auth-singin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Oct 2024 11:26:08 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Sign in | Probic - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Pichforest" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyle.css') }}">

</head>

<body>

    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-5">
                            <div class="card-body">
                                <div class="p-3">
                                    <div class="mb-3 text-center mb-md-4">
                                        <a href="index-2.html" class="d-block auth-logo">
                                            <img src="assets/images/logo-dark.png" alt="" height="22"
                                                class="auth-logo-dark">
                                            <img src="assets/images/logo-light.png" alt="" height="22"
                                                class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="mb-4 text-center">
                                        <h5 class="mb-1">Welcome Back !</h5>
                                        <p class="text-muted">Sign in to continue to Probic.</p>
                                    </div>
                                    <x-auth-session-status class="mb-4" :status="session('status')" />

                                    <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Enter username">
                                        </div>

                                        <div class="form-password mb-3 auth-pass-inputgroup">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <div class="position-relative">
                                                <input type="password" name="password" class="form-control" id="password-input"
                                                    placeholder="Enter password">
                                                <button type="button"
                                                    class="btn btn-link position-absolute h-100 end-0 top-0 shadow-none"
                                                    id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-16 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <div class="form-checkbox">
                                                    <input type="checkbox" class="form-check-input me-1"
                                                        id="customControlInline">
                                                    <label class="form-label text-muted font-size-13 fw-medium"
                                                        for="customControlInline">Remember me</label>
                                                </div>
                                            </div><!-- end col -->
                                            <div class="col-sm-6 text-sm-end">
                                                <a href="auth-reset-password.html"
                                                    class="text-muted font-size-13 fw-medium"><i
                                                        class="mdi mdi-lock"></i> Forgot your password?</a>
                                            </div><!-- end col -->
                                        </div><!-- end row -->

                                        <div class="row justify-content-center">
                                            <div class="col-sm-4 text-center">
                                                <button class="btn btn-primary w-100 rounded-pill" type="submit">Log
                                                    In</button>
                                            </div>
                                        </div><!-- end row -->
                                    </form><!-- end form -->
                                    <div class="row position-relative mt-2">
                                        <div class="col-12">
                                            <div class="or-circle">
                                                <a href="javascript: void(0);"
                                                    class="social-list-item fw-bold font-size-12">
                                                    OR
                                                </a>
                                            </div>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                            </div><!-- end card-body -->
                            <div class="card-footer auth-footer text-center pt-4">
                                <h6 class="text-white mt-3 fw-normal">Sign up with social platforms</h6>
                                <ul class="list-inline mt-4">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item">
                                            <i class="bi bi-google"></i>
                                        </a>
                                    </li>
                                </ul><!-- end ul -->
                            </div><!-- end card footer -->
                        </div><!-- end card -->
                        <div class="mt-3 text-center text-muted">
                            <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                    class="fw-medium"> Signup
                                    now </a></p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="text-center text-muted p-4">
                            <p class="mb-0">©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Probic. Crafted with <i class="mdi mdi-heart text-danger"></i>
                                by Pichforest
                            </p>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->


    <!-- Bootstrap JS -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Metismenu Js -->
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>

    <!-- Simplebar Js -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>

    <!-- Feather Js -->
    <script src="assets/libs/feather-icons/feather.min.js"></script>


    <script src="assets/js/pages/pass-add.init.js"></script>

</body>

</html>
