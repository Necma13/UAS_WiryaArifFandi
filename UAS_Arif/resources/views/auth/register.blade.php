<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <title>Register - Your Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your Application Description" />
    <meta name="keywords" content="Application, Bootstrap, HTML, Clean, Modern" />
    <meta name="author" content="Your Name" />
    <meta name="email" content="your.email@example.com" />
    <meta name="website" content="https://yourwebsite.com" />
    <meta name="Version" content="v1.0.0" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" />
    <!-- Css -->
    <link href="assets/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="assets/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Custom Css -->
    <style>
        .form-signin {
            padding: 20px;
            border-radius: 15px;
            max-height: 90vh;
            overflow-y: auto;
        }
        .avatar-small {
            max-width: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Hero Start -->
    <section class="bg-home bg-circle-gradiant d-flex align-items-center" style="min-height: 100vh;">
        <div class="bg-overlay bg-overlay-white"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10"> <!-- Ubah dari col-md-8 ke col-md-10 -->
                    <div class="card form-signin rounded shadow">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mb-4">
                                <img src="assets/images/logo-icon.png" class="avatar avatar-small" alt="">
                            </div>
                            <h5 class="mb-3 text-center">Register your account</h5>

                            <div class="row mb-3">
                                <label for="nisn" class="col-md-4 col-form-label text-md-end">{{ __('NISN') }}</label>
                                <div class="col-md-6">
                                    <input id="nisn" type="text" class="form-control @error('nisn') is-invalid @enderror" name="nisn" value="{{ old('nisn') }}" required autocomplete="nisn" autofocus>
                                    @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>
                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama">
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tgl" class="col-md-4 col-form-label text-md-end">{{ __('Tanggal Lahir') }}</label>
                                <div class="col-md-6">
                                    <input id="tgl" type="date" class="form-control @error('tgl') is-invalid @enderror" name="tgl" value="{{ old('tgl') }}" required autocomplete="tgl">
                                    @error('tgl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat">
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jjg" class="col-md-4 col-form-label text-md-end">{{ __('Jenjang Pendidikan') }}</label>
                                <div class="col-md-6">
                                    <input id="jjg" type="text" class="form-control @error('jjg') is-invalid @enderror" name="jjg" value="{{ old('jjg') }}" required autocomplete="jjg">
                                    @error('jjg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="hp" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Telepon') }}</label>
                                <div class="col-md-6">
                                    <input id="hp" type="text" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp') }}" required autocomplete="hp">
                                    @error('hp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="foto" class="col-md-4 col-form-label text-md-end">{{ __('Foto') }}</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" accept="image/*" class="form-control @error('foto') is-invalid @enderror" name="foto" required>
                                    @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>
