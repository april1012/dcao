<?php
    session_start();

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
            background: #bad8e6;
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
        .menu p {
            position: relative;
            top: 13px;
            left: 315px;
            font-size: 1.3rem;
            color: #fff;
        }
        .profile i {
            position: absolute;
            left: 45%;
            font-size: 5rem;
            bottom: 80px;
            text-decoration: none;
        }
        .profile .name {
            position: absolute;
            left: 45.5%;
            text-align: center;
            font-size: 20px;
            bottom: 75px;
            text-decoration: none;
        }
        .greetings .greet {
            position: relative;
            left: 280px;
            top: 15px;
            font-weight:bold;
            font-size: 1.5rem;
        }
        .greetings .username {
            position: relative;
            left: 410px;
            bottom: 28px;
            font-size: 1.1rem;
            font-weight:50;
            /* text-align: center; */
            font-family: 'Roboto', sans-serif;
        }
        .schedule .btn{
            position: relative;
            right: 590px;
            bottom: 150px;
            text-align: center;
            font-size: 1.3rem;
        }
        .navigation {
            position: relative;
            /* right: 600px; */
            bottom: 79px;
            background: #fff;
            /* height: 600px; */
            width: 260px;
          
            
        }
        .navigation h5 {
            position: relative;
            left:50px ;
            font-size: 1rem;
            text-decoration:none;
            text-align:left;
            text-indent:15px;
        }
        
        .navigation a {
            color: black;
            line-height: 15px;
            font-size: 1.3rem;
            font-family: 'Roboto', sans-serif;
            /* border: 1px  solid #041e3b; */
            cursor: pointer;
            transition: .3s;

        }
        .navigation a:hover{
            color:#03428a;
            /* border: 1px  solid #041e3b; */
            border-top: .1rem solid #03428a;
            border-bottom: .1rem solid #03428a;
            padding-bottom: .5rem;
            transform: translateY(-5px);
            
        }
        .navigation .timeavailable{
            position: relative;
            left:15px;
        }
        .navigation .timeavailable .timetype {
            /* font-family: 'Roboto', sans-serif; */
            font-size: 1.1rem;
            font-weight:500;
        }
        .navigation .timeavailable .time{
            position: relative;
            bottom: 10px;
            font-family: 'Roboto', sans-serif;
        }
        .footer {
            position: relative;
            text-align:center;
            bottom: 125px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">ASSESSORS</a>
    <div class="navbar-link"><a href="index.php#services">Services</a></div>
    
    <div class="menu" ><p class="fs-5">Menu</p></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Assessors</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="myprofile.php">Update Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">My Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">History</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Activity</a>
          </li> -->
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>

        <div class="profile" >
          <i class="bi bi-person-circle"></i>
          <div class="name"><?=$_SESSION['username']?></div>
          </div>
          <div class="logout">
          <ul>
            <li class="d-grid gap-2">
              <a href="logout.php" class="btn btn-primary" type="button">Sign Out</a>
            </li>
          </ul>
          <button onclick="signOut()">Sign out</button>
          <!-- function signOut() {
  gapi.auth2.getAuthInstance().signOut().then(function() {
    console.log('user signed out')
  })
} -->
          </div>
      </div>
    </div>
  </div>
</nav>
<br>
<br>
<div class="greetings">
  <p class="greet">Welcome!</p>
  <p class="username"><em><?=$_SESSION['username']?>...</em></p>
</div>
<div class="navigation" >
  <br> <br>
    <h5>OVERVIEW</h5>
    <a class="nav-link" href="scheduleform.php">Schedule Appointment</a>
    <a class="nav-link" href="appointments.php">Appoinments</a>
    <a class="nav-link" href="#">Privacy Policy</a>
<br><br>
<br><br>
<br><br>
    <div class="timeavailable">
        <p class="timetype">Office Hours :</p>
        <p class="time">Available from 8:00Am to 5:00PM</p>
    </div>
    <br><br>
    <br><br>
</div>

<!-- <footer class="footer">
<div class="credit">
      <p>Created by Team Capstone | all rights reserved.</p>
      </div>
</footer> -->

</body>
</html>

