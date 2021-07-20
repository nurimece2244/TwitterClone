<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Twitter'a Giriş Yap</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  
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
            <img  src="/images/logo.PNG" alt="Cover Image"   width="100" height="100">  
            <a class="navbar-brand brand-logo"width="25" height="50" alt="logo" > Twitter'a giriş yap</a>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="email" size="30" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>

                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="password" size="30"  type="password"class="form-control form-control-lg" name="password" placeholder="Şifre" required autocomplete="current-password">
                            </div>
                        </div>
                
                        <br>

                        <div class="form-group row mb-0">
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" >
                                    {{ __('Giriş Yap') }}
                                </button>
                             
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Şifreni mi unuttun?') }}
                                    </a>
                                @endif


                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>
</html>