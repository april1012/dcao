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
        
            
            .cancellation-area,
            .re_classification-area,
            .dispute-area{
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

        /* style for CANCELLATION here */

            .container .cancellation .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .cancellation .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .cancellation .input-group .middlename {
            position: relative;
            left: 10px; 
        }

            .container .cancellation .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .cancellation .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .cancellation .input-group input{
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

            .container .cancellation .input-group .btn-primary {
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

            .container .cancellation .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 100px;
        }

            .cancellation .form-check .valid_id{
            position: relative;
            left: 198px;
        }

            .cancellation .form-check .tax_declaration {
            position: relative;
            left: 242px;
        }
        .cancellation .form-check .brgy_certificate {
            position: relative;
            left: 104px;
        }
        .cancellation .form-check .c_pictures {
            position: relative;
            left: 149px;
        }

 /* style for RE-CLASSIFICATION here */
            .re_classification-area .container {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 30px;
            position: relative;
            top:20px;
            height: 400px;
            left: 150px;            
        }

            .re_classification-area .text-content h5 {
            position: relative;
            top:10px;
          }
            
            .container .re_classification .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .re_classification .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .re_classification .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .re_classification .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .re_classification .input-group input{
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

            .container .re_classification .input-group .btn-primary {
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

            .container .re_classification .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .re_classification .form-check .valid_id{
            position: relative;
            left: 222px;
        }

            .re_classification .form-check .tax_declaration {
            position: relative;
            left: 266px;
        }

/* style for DISPUTE here */

            .dispute-area .container {
            margin-left:10px;
            padding: 10px 10px;
            margin-top: 20px;
            position: relative;
            top:10px;            
            left: 150px;
            height: 430px;
        }

            .dispute-area .container .container-content {
            margin-top:10px;
        }
        
            .dispute-area .text-content h5 {
            position: relative;
            top:10px;
        }

            .container .dispute .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }
        
            .container .dispute .input-group {
            width: 50%;
            height: 20px;
            margin-bottom: 25px;
            text-align: center;
            indent:10px;
        }

            .container .dispute .input-group .middlename {
            position: relative;
            left: 10px; 
    
        }

            .container .dispute .input-group .email {
            position: relative;
            left: 10px;
        }

            .container .dispute .input-group .address {
            position: relative;
            left: 10px; 
        }

            .container .dispute .input-group input{
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

            .container .dispute .input-group .btn-primary {
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

            .container .dispute .input-group .btn-primary:hover {
            transform: translateY(-5px);
            background: #3b95f5;
        }

            .form-check-radios{
            position: relative;
            left: 225px;
        }

            .dispute .form-check .valid_id{
            position: relative;
            left: 222px;
        }

            .dispute .form-check .tax_declaration {
            position: relative;
            left: 266px;
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
                            <a href="#cancellation">Cancellation</a>
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" 
                                data-bs-toggle="dropdown" aria-expanded="false">Re-Assessment</button>
                                        <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#re_classification">Re-Classification</a></li>
                                                <li><a class="dropdown-item" href="#dispute">Dispute</a></li>                                            
                                        </ul>
                            </div>
            </div>

            <div class="content-area">
                <div class="wrapper">

                    <div id="cancellation" class="cancellation-area">
                    <div class="text-content">
                            <h5>Cancellation</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                            <form action="cancellation.php" method="POST" class="cancellation">
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
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="letter_request" name="letter_request" type="checkbox" id="letter_request" value="<?php echo $letter_request; ?>">
                                            <label class="letter_request" for="letter_request">Letter Request</label>
                                    </div>
                                    <div class="form-check ">
                                            <input class="tax_declaration" name="tax_declaration" type="checkbox" id="tax_declaration" value="<?php echo $tax_declaration; ?>">
                                            <label class="tax_declaration" for="tax_declaration">Tax Declaration</label>
                                    </div>
                                    <div class="form-check float-start">
                                            <input class="demolition_permit" name="demolition_permit" type="checkbox" id="demolition_permit" value="<?php echo $demolition_permit; ?>">
                                            <label class="demolition_permit" for="demolition_permit">Demolition Permit (photocopy)</label>
                                    </div>
                                    <div class="form-check">
                                            <input class="brgy_certificate" name="brgy_certificate" type="checkbox" id="brgy_certificate" value="<?php echo $brgy_certificate; ?>">
                                            <label class="brgy_certificate" for="brgy_certificate">Barangay Certificate (if building)</label>
                                    </div>
                                    <div class="form-check ">
                                            <input class="c_pictures" name="c_pictures" type="checkbox" id="c_pictures" value="<?php echo $c_pictures; ?>">
                                            <label class="c_pictures" for="c_pictures">2 pcs. colored pictures (front view & 1 side for bldg)</label>
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

                    <div id="re_classification" class="re_classification">
                    <div class="text-content">
                            <h5>Re-Classification</h5>
                    <div class="container">
                        <div class="container-content">
                            <form action="re_classification.php" method="POST" class="re_classification">
                                    <br>
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
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>
                                    
                                    <div class="form-check float-start">
                                            <input class="letter_request" name="letter_request" type="checkbox" id="letter_request" value="<?php echo $letter_request; ?>">
                                            <label class="letter_request" for="letter_request">Letter Request</label>
                                    </div>
                                    <div class="form-check">
                                            <input class="tax_declaration" name="tax_declaration" type="checkbox" id="tax_declaration" value="<?php echo $tax_declaration; ?>">
                                            <label class="tax_declaration" for="tax_declaration">Tax Declaration</label>
                                    </div>
                                    <div class="form-check float-start">
                                            <input class="zoning_cert" name="zoning_cert" type="checkbox" id="zoning_cert" value="<?php echo $zoning_cert; ?>">
                                            <label class="zoning_cert" for="zoning_cert">Zoning (CPDO) Certification</label>
                                    </div>
                                    <div class="form-check">
                                            <input class="tax_clearance" name="tax_clearance" type="checkbox" id="tax_clearance" value="<?php echo $tax_clearance; ?>">
                                            <label class="tax_clearance" for="tax_clearance">Tax Clearance (photocopy)</label>
                                    </div>
                                    <div class="form-check">
                                            <input class="c_pictures" name="c_pictures" type="checkbox" id="c_pictures" value="<?php echo $c_pictures; ?>">
                                            <label class="c_pictures" for="c_pictures">2 pcs. colored pictures (front view & 1 side for bldg)</label>
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

        
                    <div id="dispute" class="dispute-area">
                    <div class="text-content">
                            <h5>Dispute (Actual Use, erosion traversed by road, etc.)</h5>
                    <div class="container">
                        <div class="container-content"> 
                            <form action="dispute.php" method="POST" class="dispute">
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
                                            <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                            <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                                    </div>
                                    
                                    <div class="form-check">
                                            <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                            <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                                    </div>

                                    <div class="form-check float-start">
                                            <input class="letter_request" name="letter_request" type="checkbox" id="letter_request" value="<?php echo $letter_request; ?>">
                                            <label class="letter_request" for="letter_request">Letter Request</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="tax_declaration" name="tax_declaration" type="checkbox" id="tax_declaration" value="<?php echo $tax_declaration; ?>">
                                            <label class="tax_declaration" for="tax_declaration">Tax Declaration</label>
                                    </div>

                                    <div class="form-check">
                                            <input class="survey_plan" name="survey_plan" type="checkbox" id="survey_plan" value="<?php echo $survey_plan; ?>">
                                            <label class="survey_plan" for="survey_plan">Survey Plan signed by Geodetic Engineer</label>
                                    </div>          

                                    <div class="form-check">
                                            <input class="c_pictures" name="c_pictures" type="checkbox" id="c_pictures" value="<?php echo $c_pictures; ?>">
                                            <label class="c_pictures" for="c_pictures">2 pcs. colored pictures (front view & 1 side for bldg)</label>
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