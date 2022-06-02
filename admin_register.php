
<?php

include 'config.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])) {
    header("Location: admin_login.php");
}

if (isset($_POST['submit'])){ 
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (firstname,middlename,lastname, username,email,contact, password)
                    VALUES ('$firstname','$middlename','$lastname', '$username','$email','$contact', '$password' )";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Successfully Registered.')</script>";
                $firstname = "";
                $middlename = "";
                $lastname = "";
                $username = "";
                $email = "";
                $contact = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Something Went Wrong.')</script>";
            }
        } else {
             echo  "<script>alert('Woops! Username Already Exist.')</script>";
        }
        
    } else {
        echo "<script>alert('Password Not Matched.')</script>";
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

<title>Register Form</title>

<style>
   
</style>
</head>
<body>
  <div class="container">
      <form action="" method="POST" class="login-username">
          <p class="login-text" style="text-align: center; font-size: 2rem; font-weight:800;">Register</p>
          <div class="input-group">
              <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
          </div>
          <div class="input-group ">
              <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
          </div>
          <div class="input-group">
              <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
          </div>
          <div class="input-group ">
              <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
          </div>
          <div class="input-group">
              <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
          </div>
          <div class="input-group ">
              <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
          </div>
          <div class="input-group">
              <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
          </div>
          <div class="input-group">
              <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
          </div>
          <div class="input-group">
              <button name="submit" class="btn">Create</button>
          </div>
          <p class="login-register-text">Have an account? <a href="admin_login.php">Login Here</a>.</p>

      </form>

  </div>
</body>
</html>