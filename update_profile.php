
<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.com">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style.home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Home-user</title>

    <style>
        body {
            background: #e3f2fd;
            text-decoration: none;
            
        }
        .navbar-brand {
            color: #fff;
            font-size:x-large;
        }
        .navbar-link {
            position: relative;
            top: 5px;
            right: 300px;
            text-decoration: none;

        }
        .navbar-link a {
            color: #fff;
            cursor: pointer;
            transition: all .3s linear;
            text-decoration: none;
        }
        .navbar-link a:hover {
            color:black;
          border-bottom: .2rem solid black;
            /* padding-bottom: .5rem; */
            transform: translateY(-5px);
        }
        .navbar .btn{
    position: relative;
    top: 10px;   
}
        .main-page-text a{
    text-decoration: none;
    color: #fff;
}
.container {
    width: 600px;
    min-height: 400px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .3);
    padding: 40px 30px;
}
.container .update_profile .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .update_profile .input-group .username {
    position: relative;
    left: 150px; 
}
.container .update_profile .input-group .middlename {
    position: relative;
    left: 10px; 
}
.container .update_profile .input-group .email {
    position: relative;
    left: 10px;
}
.container .update_profile .input-group .address {
    position: relative;
    left: 10px; 
}
.container .update_profile .input-group .cpassword{
    position: relative;
    left: 10px;
}
.container .update_profile .input-group input{
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}
/* .container .schedule_appointment .input-group .control-label{
    position: relative;
    left: 200px;
}
.container .schedule_appointment .input-group .form-control{
    position: relative;
    left: 150px;
} */
.container .update_profile .input-group .btn-primary {
    position: relative;
    left: 125px;
    width: 100%;
    height: 35px;
    padding: 5px 5px;
    text-align: center;
    border: none;
    background: #3b95f5;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #fff;
    cursor: pointer;
    transition: .3s;
}

.container .update_profile .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
        .footer {
            position: relative;
            text-align:center;
            bottom: 10px;
            top: 50px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">ASSESSORS</a>
    <div class="btn">
    <p class="main-page-text"><a href="home_user.php">Go back</a></p>
    </div> 
  </div>
</nav>
<br>
<br>
<br>
<br>
<br>


<div class="container">
          <form action="" method="POST" class="update_profile">
              <p class="login-text" style="text-align: center; font-size: 1.5rem; font-weight:800;">Update Profile Information</p>
              <div class="input-group ">
                  <input class="username" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
              </div>
              <div class="input-group float-start">
                  <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>">
              </div>
              <div class="input-group">
                  <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
              </div>
              <div class="input-group float-start">
                  <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" >
              </div>
              <div class="input-group">
                  <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" >
              </div>
              <div class="input-group float-start">
                  <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" >
              </div>
              <div class="input-group">
                  <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" >
              </div>
              
  
<br>
            <br>
              <div class="input-group">
                  <button type="submit" name="update" class="btn-primary btn-sm">Submit</button>
              </div>
              
          </form>

      </div>
   
<!-- footer section starts here -->
  <section class="footer">
      <div class="credit">
      <p>Created by Team Capstone | all rights reserved.</p>
      </div>
  </section>
<!-- footer section ends here -->
</body>
</html>

<?php
$conn = mysqli_connect($server, $user, $pass, $database);
$db = mysqli_select_db($conn,'dcao');

if(isset($_POST['update'])){
    $username = $_POST['username'];

    $query = "UPDATE users SET 
    firstname='$_POST[firstname]', 
    middlename='$_POST[middlename]',
    lastname='$_POST[lastname]',
    email='$_POST[email]',
    contact='$_POST[contact]',
    address='$_POST[address]'
     WHERE username = '$_POST[username]' ";
    $query_run = mysqli_query($conn,$query);

    if($query_run){
        echo '<script type="text/javascript">alert("Updated Successfully.")</script>';
    } else {
        echo '<script type="text/javascript">alert("Profile not updated successfully.")</script>';
    }
}
?>