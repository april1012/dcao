<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
    }

?>
<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "dcao";

$conn = mysqli_connect($server, $user, $pass, $database);


if (!$conn) {
    echo "<script>alert('Connection Failed.')</script>";
}

    error_reporting(0);

    session_start();

    if (isset($_POST['submit'])){ 
        $id = $_POST['id'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $service_request = $_POST['service_request'];
        $message = "$firstname $lastname scheduled a new request";
        $date_sched = $_POST['date_sched'];
       
            
                $query = "INSERT INTO requests (username,firstname,middlename,lastname,email,contact, address, service_request,message, date_sched)
                        VALUES ('$username','$firstname','$middlename','$lastname','$email','$contact', '$address', '$service_request', '$message', '$date_sched' )";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    echo "<script>alert('Your Request is now pending. Please wait for confirmation. Thank you')</script>";
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

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
    width: 400px;
    min-height: 400px;
    background: #fff;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, .3);
    padding: 40px 30px;
}
.container .schedule_appointment .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .schedule_appointment .input-group input {
    position: relative;
    left: 80px;
}
.container .schedule_appointment .input-group input{
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
.container .schedule_appointment .input-group .control-label{
    position: relative;
    left: 85px;
}.container .schedule_appointment .form-select{
    width:300px;
    position: relative;
    left: 24px;
}
.container .schedule_appointment .input-group .form-control{
    position: relative;
    left: 80px;
}
.container .schedule_appointment .input-group .btn-primary {
    position: relative;
    left: 80px;
    width: 100%;
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

.container .schedule_appointment .input-group .btn-primary:hover {
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

<div class="container">
          <form action="" method="POST" class="schedule_appointment">
              <p class="login-text" style="text-align: center; font-size: 2rem; font-weight:800;">Schedule Now</p>
              <div class="input-group">
                  <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
              </div>
              <div class="input-group">
                  <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
              </div>
              <div class="input-group">
                  <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
              </div>
              <div class="input-group">
                  <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
              </div>
              <div class="input-group">
                  <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
              </div>
              <div class="input-group">
                  <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
              </div>
              <div class="input-group">
                  <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
              </div>
              <select class="form-select" aria-label="Default select example" name="service_request" value="<?php echo $service_request; ?>" required>
  <option selected>Service Requested
  </option>
  <option value="New Assessment">New Assessment</option>
  <option value="Transfer Assessment">Transfer Assessment</option>
  <option value="Vicinity Map Request">Vicinity Map Request</option>
  <option value="Map Verification">Map Verification</option>
  <option value="Pin Request">Pin Request</option>
  <option value="CTC of Tax Declaration and Certification">CTC of Tax Declaration and Certification</option>
  <option value="Cancellation of Assessment">Cancellation of Assessment</option>
  <option value="Re-assessment Request">Re-assessment Request</option>
</select>
<br>
<div class="input-group">
                <label for="date_sched" class="control-label">Appointment Date</label>
                <input type="datetime-local" class="form-control" name="date_sched" value="<?php echo $date_sched; ?>" required>
            </div>
            <br>
              <div class="input-group">
                  <button name="submit" class="btn-primary">Submit</button>
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