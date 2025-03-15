<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/sb-new.css">
</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <b><div class="card-header">Register</div></b>
      <div class="card-body">
        <?php 
        session_start();
        if (isset($_GET['error'])) {
          if ($_GET["error"]=="emptyfields") {
            echo '<p class="signuperror">Fill in all fields</p>';
          }
          elseif ($_GET["error"]=="invalidmail") {
             echo '<p class="signuperror">Invalid Email</p>';
          }
          elseif ($_GET["error"]=="invaliduid") {
             echo '<p class="signuperror">Invalid Username</p>';
          }
          elseif ($_GET["error"]=="passwordcheck") {
             echo '<p class="signuperror">Your password do not match</p>';
          }
          elseif ($_GET["error"]=="usertaken") {
             echo '<p class="signuperror">Username is already taken</p>';
          }
          elseif ($_GET["error"]=="emailtaken") {
             echo '<p class="signuperror">Email/Username is already taken</p>';
          }
          } 
           if (isset($_GET['register'])) {
            if ($_GET["register"]=="success") {
             echo '<p class="signupsuccess">Register successful</p>';
           }
       }
       
         ?>
        <form id="registrationForm" action="includes/signup.php" method="post">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" name="C_FNAME" class="form-control" placeholder="First name" autofocus="autofocus" pattern="[A-Za-z]+" title="Only alphabets allowed" required>
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="C_LNAME" class="form-control" placeholder="Last name" pattern="[A-Za-z]+" title="Only alphabets allowed" required>
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="number" id="inputage" name="C_AGE" class="form-control" placeholder="Age" min="10" max="100" required>
              <label for="inputage"> Age</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
               <input type="text"  id="inputAddress" name="C_ADDRESS" class="form-control" placeholder="address" required>
              <label for="inputAddress">Address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="tel" pattern="[0-9]{10}" id="inputpnumber" name="C_PNUMBER" class="form-control input-sm" placeholder="Phone Number" required>
              <label for="inputpnumber">Phone Number</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <select id="inputGender" name="C_GENDER" class="form-control" placeholder="Gender" required>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="C_EMAILADD" class="form-control" placeholder="Email Address" required>
              <label for="inputEmail">Email Address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputZipcode" name="ZIPCODE" class="form-control" placeholder=" Zipcode" pattern="[4][0-4][0-9]{4}" title="Should start with 40 to 44 and have 6 digits" required>
              <label for="inputZipcode">Pincode</label>
            </div>
          </div>
           <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputuser" name="username" class="form-control" placeholder="Username" required>
              <label for="inputuser">User Name</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="pwdcon" class="form-control" placeholder="Confirm password" required>
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block" name="signups-submit">Save</button>
        </form>
        <div class="text-center">
        <!--   <a class="d-block small mt-3" href="login.php">Login</a> -->
          <a class="d-block small mt-3" href="login.php">Back</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js
