<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="/assets/css/demo.css" />
  <link rel="stylesheet" href="../assets/css/login_murid.css" />
  <title>Login Student</title>
</head>
<body>

  <!----------------------- Main Container -------------------------->

  <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

    <div class="row border rounded-5 p-3 bg-white shadow box-area">

      <!--------------------------- Left Box ----------------------------->

      <div id="leftbox"
        class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
      </div>

      <!-------------------- ------ Right Box ---------------------------->

      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2>Selamat Datang !</h2>
            <p>Silahkan login dengan akun anda</p>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group mb-3">
              <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email or Username"
                name="email">
            </div>
            <div class="input-group mb-1">
              <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"
                name="password">
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck">
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
              </div>
              <div class="forgot">
                <small><a href="#">Forgot Password?</a></small>
              </div>
            </div>
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
            </div>
          </form>

          <div class="input-group mb-3">
            <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px"
                class="me-2"><small>Sign In with Google</small></button>
          </div>
          <div class="row">
            <small>Don't have account? <a href="#">Sign Up</a></small>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>