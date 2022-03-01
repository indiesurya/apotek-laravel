<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left p-5">
                        <div class="brand-logo">
                            <img src="../../images/logo-dark.svg">
                        </div>
                        <h4>Hai, Pejuang Rupiah!</h4>
                        <h6 class="font-weight-light">Daftarkan diri, jadi bagian dari Kami.</h6>
                        <form action="/register" method="POST" class="pt-3">
                        @csrf
                            <div class="form-group">
                                <input type="text" name='name' class="form-control form-control-lg  @error('name') is-invalid @enderror" placeholder="Username" value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"  placeholder="Email" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name='password' class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                    <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                                </div>
                            </div>
                            <div class="mt-3">
                                <input type="submit" name="register" value="Register" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Already have an account? 
                                <a href="/login" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<script src="../../vendors/js/vendor.bundle.base.js"></script>
<script src="../../js/off-canvas.js"></script>
<script src="../../js/hoverable-collapse.js"></script>
<script src="../../js/misc.js"></script>
</body>
</html>