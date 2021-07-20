<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                </div>
                <img  src="/images/logo.PNG" alt="Cover Image"   width="100" height="100">  

            <a class="navbar-brand brand-logo"width="25" height="50" alt="logo" > Hesabını Oluştur</a>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" size="30" placeholder="Kullanıcı Adı" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <br>

                            
                            <div class="col-md-6">
                                <input id="email" size="30"  placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
            
                            <div class="col-md-6">
                                <input id="password" size="30"  placeholder="Şifre" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <br>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">

                            <div class="col-md-6">
                                <input id="password-confirm"   placeholder="Şifre Tekrar" size="30" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary"  style="background-color: #1DA1F2; border-radius: 12px; height: 40px; width: 200px; color:white">
                                    {{ __('Kayıt Ol') }}
                                </button>
                            </div>
                        </div>

                        <div class="text-center mt-4 font-weight-light"><a href="/login" class="text-primary">Login</a>
                  </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
</div>
    </div>
</div>
</body>
</html>

