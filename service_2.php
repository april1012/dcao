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
        
            .vicinity_map-area,
            .map_verification-area,
            .verification_of_pin-area, {
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
        
            .side-navbar h5{
            text-indent: 15px;
        }
        
            .content-area {
            margin-left:230px;
            padding: 0 10px;
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

        /* style for VICINITY_MAP here */

            .container .vicinity_map .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .vicinity_map .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .vicinity_map .input-group .middlename {
            position: relative;
            left: 10px; 
        }

            .container .vicinity_map .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .vicinity_map .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .vicinity_map .input-group input{
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

            .container .vicinity_map .input-group .btn-primary {
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

            .container .vicinity_map .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 100px;
        }

            .vicinity_map .form-check .authorization_letter{
            position: relative;
            left: 198px;
        }

            .vicinity_map .form-check .tax_declaration{
            position: relative;
            left: 50px;
        }

 /* style for MAP_VERIFICATION here */

            .container .map_verification .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .map_verification .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .map_verification .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .map_verification .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .map_verification .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .map_verification .input-group input{
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

            .container .map_verification .input-group .btn-primary {
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

            .container .map_verification .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .map_verification .form-check .authorization_letter{
            position: relative;
            left: 222px;
        }

            .map_verification .form-check .letter_request{
            position: relative;
            left: 74px;
        }

/* style for VERIFICATION_OF_PIN here */

.container .verification_of_pin .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .verification_of_pin .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .verification_of_pin .input-group .middlename {
            position: relative;
            left: 10px; 
        }

            .container .verification_of_pin .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .verification_of_pin .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .verification_of_pin .input-group input{
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

            .container .verification_of_pin .input-group .btn-primary {
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

            .container .verification_of_pin .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 100px;
        }

            .verification_of_pin .form-check .authorization_letter{
            position: relative;
            left: 198px;
        }

            .verification_of_pin .form-check .title_property{
            position: relative;
            left:50px;
        }
        .verification_of_pin-area{
            position: relative;
            bottom:45px;
        }
        .verification_of_pin-area .text-content h5{
            position: relative;
            top:20px;
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
                            <a href="#vicinity_map">Vicinity Map</a>
                            <a href="#map_verification">Map Verification</a>
                            <a href="#verification_of_pin">Verification of Pin</a>
            </div>

            <div class="content-area">
                <div class="wrapper">

                    <div id="vicinity_map" class="vicinity_map-area">
                    <div class="text-content">
                            <h5>Vicinity Map</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                            <form action="vicinity_map.php" method="POST" class="vicinity_map">
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
                                            <input class="tax_declaration" name="tax_declaration" type="checkbox" id="tax_declaration" value="<?php echo $tax_declaration; ?>">
                                            <label class="tax_declaration" for="tax_declaration">Tax Declaration</label>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                                    <br>

                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div id="map_verification" class="map_verification-area">
                    <div class="text-content">
                            <h5>Map Verification</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                            <form action="map_verification.php" method="POST" class="map_verification">
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
                                            <input class="letter_request" name="letter_request" type="checkbox" id="letter_request" value="<?php echo $letter_request; ?>">
                                            <label class="letter_request" for="letter_request">Letter Request (original 2 copies)</label>
                                    </div>
                            
                                    <div class="form-check float-start">
                                            <input class="title_property" name="title_property" type="checkbox" id="title_property" value="<?php echo $title_property; ?>">
                                            <label class="title_property" for="title_property">Title (photocopy)</label>
                                    </div>
                                    <br>
            
                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                                    <br>
                        
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

                    <div id="verification_of_pin" class="verification_of_pin-area">
                    <div class="text-content">
                            <h5>Verification of Pin</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                            <form action="verification_of_pin.php" method="POST" class="verification_of_pin">
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
                            
                                    <div class="form-check ">
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                            
                                    <div class="form-check float-start">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                            
                                    <div class="form-check">
                                            <input class="title_property" name="title_property" type="checkbox" id="title_property" value="<?php echo $title_property; ?>">
                                            <label class="title_property" for="title_property">Title (photocopy)</label>
                                    </div>
                            
                                    <div class="form-check">
                                            <input class="tax_declaration" name="tax_declaration" type="checkbox" id="tax_declaration" value="<?php echo $tax_declaration; ?>">
                                            <label class="tax_declaration" for="tax_declaration">Tax Declaration</label>
                                    </div>
                                    <br>
                            
                                    <div class="input-group">
                                            <button name="submit" class="btn-primary">Submit</button>
                                    </div>
                                    <br>
                        
                            </form>
                        </div>
                    </div>
                    </div>
                    </div>

        
                </div>
            </div>

</body>

</html>