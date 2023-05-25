<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Register | Rehan's Personal site</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesdesign" name="author" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{asset('Backend/assets/images/favicon.ico')}}" />

  <!-- Bootstrap Css -->
  <link href="{{asset('Backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="{{asset('Backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{asset('Backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="auth-body-bg">
  <div class="bg-overlay"></div>
  <div class="wrapper-page">
    <div class="container-fluid p-0">
      <div class="card">
        <div class="card-body">
          <div class="text-center mt-4">
            <div class="mb-3">
              <a href="index.html" class="auth-logo">
                <img src="{{asset('Backend/assets/images/logo-dark.png')}}" height="30" class="logo-dark mx-auto" alt="" />
                <img src="{{asset('Backend/assets/images/logo-light.png')}}" height="30" class="logo-light mx-auto" alt="" />
              </a>
            </div>
          </div>

          <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

          <div class="p-3">
          <form class="form-horizontal mt-3" method="POST" action="{{ route('register') }}">
           @csrf
    

              <div class="form-group mb-3 row">
                <div class="col-12">
                  <input class="form-control" id="name" type="text" name="name" required="" placeholder="Name" />
                </div>
              </div>




             <div class="form-group mb-3 row">
                <div class="col-12">
                  <input class="form-control" id="username" type="text" name="username" required="" placeholder="Username" />
                </div>
              </div>


              <div class="form-group mb-3 row">
                <div class="col-12">
                  <input class="form-control" id="email" type="text" name="email" required="" placeholder="Email" />
                </div>
              </div>
              
              <div class="form-group mb-3 row">
                <div class="col-12">
                  <input class="form-control" id="password" type="password" required="" placeholder="Password" />
                </div>
              </div>
              <div class="form-group mb-3 row">
                <div class="col-12">
                  <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required="" placeholder="Confirm Password" />
                </div>
              </div>


              <div class="form-group text-center row mt-3 pt-1">
                <div class="col-12">
                  <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                  {{ __('Register') }}
                  </button>
                </div>
              </div>

              <div class="form-group mt-2 mb-0 row">
                <div class="col-12 mt-3 text-center">
                  <a href="{{route('login')}}" class="text-muted">  {{ __('already have an account ?') }}</a>
                </div>
              </div>
            </form>
            <!-- end form -->
          </div>
        </div>
        <!-- end cardbody -->
      </div>
      <!-- end card -->
    </div>
    <!-- end container -->
  </div>
  <!-- end -->

  <!-- JAVASCRIPT -->
  <script src="{{asset('Backend/assets/libs/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
  <script src="{{asset('Backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
  <script src="{{asset('Backend/assets/libs/node-waves/waves.min.js')}}"></script>

  <script src="{{asset('Backend/assets')}}"></script>
</body>

</html>