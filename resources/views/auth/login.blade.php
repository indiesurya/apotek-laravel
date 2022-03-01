<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Account</title>
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
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            @if(session()->has('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('failed') }}
            </div>
            @endif
            <h4>Hai! Selamat Bekerja Pejuang</h4>
            <h6 class="font-weight-light">Masuk untuk Login</h6>
            <form action="/login" method="POST" class="pt-3">
            @csrf    
                <div class="form-group">
                    <input type="email" name="email" id="email" autofocus required class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" required class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mt-3">
                    <input type="submit" value="Login" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="mb-2">
                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="/register" class="text-primary">Register</a>
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