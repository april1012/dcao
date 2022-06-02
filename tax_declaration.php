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

            #custom-button{
            padding:10px;
            border-radius:15px;
            cursor:pointer;
            font-weight:bold;
        }

            #custom-button:hover {
            background-color: #fff;
            color: blue;
        }

            #custom-text{
            margin-left:10px;
            font-family:sans-serif;
            color:#aaa;
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
    <p class="main-page-text"><a href="home_staff.php">Go back</a></p>
    </div> 
  </div>
</nav>
<br>
<br>
<br>
<br>

<input type="file" id="real-file" hidden="hidden">
<button class="btn btn-primary btn-sm" type="button" id="custom-button">UPLOAD FILE</button>
<span id="custom-text">No file chosen yet.</span>

<script type="text/javascript">
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function(){
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function(){
        if(realFileBtn.value){
            customTxt.innerHTML = realFileBtn.value;
        }else{
            customTxt.innerHTML = "No file chosen yet.";
        }
    });
</script>

<!-- footer section starts here -->
  <section class="footer">
      <div class="credit">
      <p>Created by Team Capstone | all rights reserved.</p>
      </div>
  </section>
<!-- footer section ends here -->
</body>
</html>