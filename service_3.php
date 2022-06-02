<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: stafflogin.php");
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
    <title>Service_2_request</title>

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
         
            .wrapper {
            width: 1100px;
            margin: 0 auto;
        }
        
            .ctc_taxdeclaration-area,
            .c_total-landholding,
            .c_no-landholding,
            .c_no-improvement {
            height: 100vh;
        }
        
            .text-content h5{
            text-align: center;
            padding-top:10%;
            margin: 0;
        }
        
            .side-navbar {
            height:100%;
            width: 300px;
            position: fixed;
            z-index:1;
            top:0;
            left:0;
            background-color:#fff;
            overflow-x:hidden;
            padding-top:20px;   
        }
        
            .side-navbar a {
            padding: 5px 10px 10px 50px;
            text-decoration: none;
            display:block;
            cursor: pointer;
            transition: .3s;
        }
        
            .side-navbar a:hover {
            color: #fff;
            background-color: #03428a;
        }
        .side-navbar .btn {
            padding: 5px 133px 10px 50px;
            text-decoration: none;
            display:block;
            cursor: pointer;
            transition: .3s;
            text-align: center;
            color: #0d6efd;
        }
        
            .side-navbar .btn:hover {
            color: #fff;
            background-color: #03428a;
        }

            .side-navbar .dropdown-menu {
            padding: 5px 133px 10px 50px;
        }

            .side-navbar .dropdown-menu li a {
            color: #0d6efd;
        }
        
            .side-navbar .dropdown-menu li a:hover{
            color: #fff;
            background-color: #03428a;
        }
        
            .side-navbar h5{
            text-indent: 15px;
        }
        
            .content-area {
            margin-left:230px;
            padding: 10 10px;
        }
        
            .container {
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
            width: 850px;
        }
        
            .container-content {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 30px;
        }

        /* style for CERTIFIED TRUE COPY OF TAX DECLARATION here */

            .container .ctc_taxdeclaration .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .ctc_taxdeclaration .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .ctc_taxdeclaration .input-group .middlename {
            position: relative;
            left: 10px; 
        }

            .container .ctc_taxdeclaration .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .ctc_taxdeclaration .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .ctc_taxdeclaration .input-group input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: #fff;
            outline: none;
            transition: .3s;
        }

            .container .ctc_taxdeclaration .input-group .btn-primary {
            position: relative;
            left: 170px;
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

            .container .ctc_taxdeclaration .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 100px;
        }

            .ctc_taxdeclaration .form-check .authorization_letter{
            position: relative;
            left: 198px;
        }

            .ctc_taxdeclaration .form-check .pin{
            position: relative;
            left: 50px;
        }

 /* style for CERT FOR TOTAL LANDHOLDING here */
            .c_total-landholding-area .container {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 30px;
            position: relative;
            top:20px;
            height: 400px;
            left: 150px;
        }
            .c_total-landholding-area .text-content h5 {
            position: relative;
            top:10px;
          }
        
            .container .c_total-landholding .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .c_total-landholding .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .c_total-landholding .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .c_total-landholding .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .c_total-landholding .input-group input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: #fff;
            outline: none;
            transition: .3s;
        }

            .container .c_total-landholding .input-group .btn-primary {
            position: relative;
            left: 170px;
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

            .container .c_total-landholding .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .c_total-landholding .form-check .authorization_letter{
            position: relative;
            left: 222px;
        }

            .c_total-landholding .form-check .pin{
            position: relative;
            left: 74px;
        }

/* style for CERT FOR NO LANDHOLDING here */

            .c_no-landholding-area .container {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 20px;
            position: relative;
            top:10px;            
            left: 150px;
            height: 400px;
        }
        
            .c_no-landholding-area .text-content h5 {
            position: relative;
            top:10px;
        }

            .container .c_no-landholding .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .c_no-landholding .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .c_no-landholding .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .c_no-landholding .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .c_no-landholding .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .c_no-landholding .input-group input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: #fff;
            outline: none;
            transition: .3s;
        }

            .container .c_no-landholding .input-group .btn-primary {
            position: relative;
            left: 170px;
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

            .container .c_no-landholding .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .c_no-landholding .form-check .authorization_letter{
            position: relative;
            left: 222px;
        }

            .c_no-landholding .form-check .pin{
            position: relative;
            left: 74px;
        }

        /* style for CERT FOR NO IMPROVEMENT here */
            /* .c_no-improvement-area {
            margin-top: 10px;
        } */

            .c_no-improvement-area .container {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 30px;
            position: relative; 
            bottom: 10px;                     
            left: 150px;
            height: 400px;
        }

            .c_no-improvement-area .container .text-content h5 {
            position: relative;
            bottom:80px;
        }

            /* .c_no-improvement-area .container .container-content {
            margin-top: 5px;
        } */

            .container .c_no-improvement .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .c_no-improvement .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .c_no-improvement .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .c_no-improvement .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .c_no-improvement .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .c_no-improvement .input-group input{
            width: 100%;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: #fff;
            outline: none;
            transition: .3s;
        }

            .container .c_no-improvement .input-group .btn-primary {
            position: relative;
            left: 170px;
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

            .container .c_no-improvement .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .c_no-improvement .form-check .authorization_letter{
            position: relative;
            left: 222px;
        }

            .c_no-improvement .form-check .pin{
            position: relative;
            left: 74px;
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

            <div class="side-navbar">
                <br>
                <br>
                <br>
                            <a href="#ctc_taxdeclaration">Certified True Copy of Tax Declaration</a>
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" 
                                data-bs-toggle="dropdown" aria-expanded="false">Certification</button>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#c_total-landholding">Total Landholding</a></li>
                                                <li><a class="dropdown-item" href="#c_no-landholding">No landholding</a></li>
                                                <li><a class="dropdown-item" href="#c_no-improvement">No Improvement</a></li>
                                        </ul>
                            </div>
            </div>

            <div class="content-area">
                <div class="wrapper">

                    <div id="ctc_taxdeclaration" class="ctc_taxdeclaration-area">
                    <div class="text-content">
                            <h5>Certified True Copy – Tax Declaration</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                            <form action="ctc_taxdeclaration.php" method="POST" class="ctc_taxdeclaration">
                                    <h6>Name of Requestor</h6>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                                    </div>

                                    <div class="form-check-radios form-check-inline">
                                            <label for="">Requested by:</label>
                                            <input class="owner" type="radio" name="requestor" id="owner" value="Owner">Owner
                                            <input class="auth_rep" type="radio" name="requestor" id="auth_rep" value="Auth_rep">Authorized Representative
                                    </div>
                                    <br>

                                    <div class="form-check float-start">
                                            <input class="filled_request_form" name="filled_request_form" type="checkbox" value="<?php echo $filled_request_form; ?>" id="filled_request_form">
                                            <label class="filled_request_form" for="filled_request_form">Filled-up Request Form</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="pin" name="pin" type="checkbox" id="pin" value="<?php echo $pin; ?>">
                                            <label class="pin" for="pin">PIN</label>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div id="c_total-landholding" class="c_total-landholding-area">
                    <div class="text-content">
                            <h5>Certification (Total Landholding)</h5>
                    <div class="container">
                        <div class="container-content">
                            <form action="c_total-landholding.php" method="POST" class="c_total-landholding">
                                    <h6>Name of Requestor</h6>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                                    </div>

                                    <div class="form-check-radios form-check-inline">
                                            <label for="">Requested by:</label>
                                            <input class="owner" type="radio" name="requestor" id="owner" value="Owner">Owner
                                            <input class="auth_rep" type="radio" name="requestor" id="auth_rep" value="Auth_rep">Authorized Representative
                                    </div>
                                    <br>

                                    <div class="form-check float-start">
                                            <input class="filled_request_form" name="filled_request_form" type="checkbox" value="<?php echo $filled_request_form; ?>" id="filled_request_form">
                                            <label class="filled_request_form" for="filled_request_form">Filled-up Request Form</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="pin" name="pin" type="checkbox" id="pin" value="<?php echo $pin; ?>">
                                            <label class="pin" for="pin">PIN</label>
                                    </div>
                                    
                                    <br>

                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>

                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

        
                    <div id="c_no-landholding" class="c_no-landholding-area">
                    <div class="text-content">
                            <h5>Certification (No Landholding)</h5>
                    <div class="container">
                        <div class="container-content"> 
                            <form action="c_no-landholding.php" method="POST" class="c_no-landholding">
                                    <h6>Name of Requestor</h6>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                                    </div>

                                    <div class="form-check-radios form-check-inline">
                                            <label for="">Requested by:</label>
                                            <input class="owner" type="radio" name="requestor" id="owner" value="Owner">Owner
                                            <input class="auth_rep" type="radio" name="requestor" id="auth_rep" value="Auth_rep">Authorized Representative
                                    </div>
                                    <br>

                                    <div class="form-check float-start">
                                            <input class="filled_request_form" name="filled_request_form" type="checkbox" value="<?php echo $filled_request_form; ?>" id="filled_request_form">
                                            <label class="filled_request_form" for="filled_request_form">Filled-up Request Form</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="pin" name="pin" type="checkbox" id="pin" value="<?php echo $pin; ?>">
                                            <label class="pin" for="pin">PIN</label>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                                    

                            </form>
                        </div>
                    </div>
                    </div>
                    </div>


                    <div id="c_no-improvement" class="c_no-improvement-area">
                    <div class="text-content">
                            <h5>Certification (No Improvement)</h5>
                    <div class="container">
                        <div class="container-content">
                            <form action="c_no-improvement.php" method="POST" class="c_no-improvement">
                                    <h6>Name of Requestor</h6>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                                    </div>

                                    <div class="input-group float-start">
                                            <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
                                    </div>

                                    <div class="input-group">
                                            <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
                                    </div>

                                    <div class="form-check-radios form-check-inline">
                                            <label for="">Requested by:</label>
                                            <input class="owner" type="radio" name="requestor" id="owner" value="Owner">Owner
                                            <input class="auth_rep" type="radio" name="requestor" id="auth_rep" value="Auth_rep">Authorized Representative
                                    </div>
                                    <br>

                                    <div class="form-check float-start">
                                            <input class="filled_request_form" name="filled_request_form" type="checkbox" value="<?php echo $filled_request_form; ?>" id="filled_request_form">
                                            <label class="filled_request_form" for="filled_request_form">Filled-up Request Form</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="pin" name="pin" type="checkbox" id="pin" value="<?php echo $pin; ?>">
                                            <label class="pin" for="pin">PIN</label>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                                    

                            </form>
                        </div>
                    </div>
                    </div>
                    </div>





                </div>
            </div>

</body>

</html>