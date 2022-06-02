<?php

    include 'config.php';

    session_start ();

    error_reporting(0);

    if(isset($_SESSION['username'])) {
        header("Location: home_user.php");
    }

    if (isset ($_POST['submit'])){

            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location: home_user.php");
            } else {
                echo  "<script>alert('Woops! Username or Password is Incorrect.')</script>";
            }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.com">
    
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Login Form</title>


    <meta name="google-signin-client_id" content="1098205296380-2prrqb8ahouiimdp1lkseqnrjgrquv5n.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    

    <style>
        .divider_or {
            color: #818182;
            text-align: center;
                    }
        .login-username .google_btn{
            cursor: pointer;
            transition: .3s;
            border-radius: 15px;
        }
        .g-signin2 {
            position: relative;
            left: 100px;
            text-align: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    
      <div class="container">
          <form action="" method="POST" class="login-username">
              <p class="login-text" style="text-align: center;font-size: 2rem; font-weight:800;">User Login</p>
              <div class="input-group">
                  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
              </div>
              <div class="input-group">
                  <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
              </div>
              <div class="input-group">
                  <button name="submit" class="btn">Login</button>
              </div>
              <p class="divider_or">or</p>

              <div class="google_btn">
              <div class="g-signin2" data-onsuccess="onSignIn"></div>
              </div>
              <script>
    function onSignIn(googleUser) {
      // get user profile information
      console.log(googleUser.getBasicProfile())
    }
  </script>
              <!-- <script>
                  function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
      }
              </script>
              <a href="#" onclick="signOut();">Sign out</a>
            <script>
                function signOut() {
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function () {
                console.log('User signed out.');
                });
                }
            </script> -->
            <br>
              <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>. <br> <a href="index.php">Go to Main Page</a></p>
              
          </form>
      </div>


</body>
</html>
