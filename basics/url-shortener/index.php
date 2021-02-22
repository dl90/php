<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>URL shortener</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <!-- Bootstrap JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="col-auto">
        <h2>Signup:</h2>
        <form id="signup-form" action="signup.php" method="post">
          <div class="form-group form-row">
            <label for="signup-username" class="col-form-label col-5">Username:</label>
            <input type="text" name="username" id="signup-username" class="form-control col-sm-6">
          </div>
          <div class="form-group form-row">
            <label for="signup-password" class="col-form-label col-5">Password:</label>
            <input type="password" name="password" id="signup-password" class="form-control col-sm-6">
          </div>
          <div class="form-group form-row">
            <label for="signup-verify-passwrd" class="col-form-label col-5">Verify Password:</label>
            <input type="password" name="verify_password" id="signup-verify-passwrd" class="form-control col-sm-6">
          </div>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
            Already a user?
          </button>

          <button class="btn btn-primary" form="signup-form">Submit</button>
        </form>
      </div>
    </div>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Welcome Back</h5>
        </div>

        <div class="modal-body">
          <div class="row justify-content-center">
            <div class="col-auto">
              <h3>Login:</h3>
              <form id="login-form" action="login.php" method="post">
                <div class="form-group form-row">
                  <label for="login-username" class="col-form-label col-sm-4">Username:</label>
                  <input type="text" name="username" id="login-username" class="form-control col-sm-7">
                </div>
                <div class="form-group form-row">
                  <label for="login-password" class="col-form-label col-sm-4">Password:</label>
                  <input type="password" name="password" id="login-password" class="form-control col-sm-7">
                </div>
                <!-- <button class="btn btn-primary">Submit</button> -->
              </form>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" form="login-form">Submit</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>