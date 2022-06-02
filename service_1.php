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
    <title>Service_1_request</title>

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
        .na_buildings-area,
        .na_lands-area,
        .na_machineries-area,
        .na_public_land-area,
        .ta_buildings-area,
        .ta_cscsol-area {
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

        /* style for NEW_BUILDINGS here */

        .container .new_buildings .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .new_buildings .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .new_buildings .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .new_buildings .input-group .email {
    position: relative;
    left: 10px;
}
.container .new_buildings .input-group .address {
    position: relative;
    left: 10px; 
}
.container .new_buildings .input-group input{
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
.container .new_buildings .input-group .btn-primary {
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

.container .new_buildings .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 100px;
}
.new_buildings .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.new_buildings .form-check .valid_id{
    position: relative;
    left: 175px;
}
.new_buildings .form-check .pictures{
    position: relative;
    left: 50px;
}
.new_buildings .form-check .tax_dec_land{
    position: relative;
    left: 74px;
}

 /* style for NEW_LANDS here */

.container .new_lands .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .new_lands .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .new_lands .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .new_lands .input-group .email {
    position: relative;
    left: 10px;
}
.container .new_lands .input-group .address {
    position: relative;
    left: 10px; 
}
.container .new_lands .input-group input{
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
.container .new_lands .input-group .btn-primary {
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

.container .new_lands .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 225px;
}
.new_lands .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.new_lands .form-check .valid_id{
    position: relative;
    left: 175px;
}
.new_lands .form-check .t_o_cert_title{
    position: relative;
    left: 74px;
}

/* style for NEW_MACHINERIES here */

.container .new_machineries .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .new_machineries .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .new_machineries .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .new_machineries .input-group .email {
    position: relative;
    left: 10px;
}
.container .new_machineries .input-group .address {
    position: relative;
    left: 10px; 
}
.container .new_machineries .input-group input{
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
.container .new_machineries .input-group .btn-primary {
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

.container .new_machineries .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 225px;
}
.new_machineries .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.new_machineries .form-check .valid_id{
    position: relative;
    left: 175px;
}
.new_machineries .form-check .t_d_building{
    position: relative;
    left: 81px;
}
.new_machineries .form-check .l_cd_agreement{
    position: relative;
    left: 150px;
}

/* style for NEW_PUBLIC_LAND here */

.container .new_public_land .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .new_public_land .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .new_public_land .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .new_public_land .input-group .email {
    position: relative;
    left: 10px;
}
.container .new_public_land .input-group .address {
    position: relative;
    left: 10px; 
}
.container .new_public_land .input-group input{
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
.container .new_public_land .input-group .btn-primary {
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

.container .new_public_land .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 225px;
}
.new_public_land .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.new_public_land .form-check .valid_id{
    position: relative;
    left: 175px;
}
.new_public_land .form-check .o_ai_patent{
    position: relative;
    left: 150px;
}

/* style for TRANSFER_BUILDINGS_LANDS here */

.container .transfer_buildings_lands .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .transfer_buildings_lands .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .transfer_buildings_lands .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .transfer_buildings_lands .input-group .email {
    position: relative;
    left: 10px;
}
.container .transfer_buildings_lands .input-group .address {
    position: relative;
    left: 10px; 
}
.container .transfer_buildings_lands .input-group input{
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
.container .transfer_buildings_lands .input-group .btn-primary {
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

.container .transfer_buildings_lands .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 225px;
}
.transfer_buildings_lands .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.transfer_buildings_lands .form-check .valid_id{
    position: relative;
    left: 175px;
}
.transfer_buildings_lands .form-check .e_c_sale{
    position: relative;
    left: 120px;
}
.transfer_buildings_lands .form-check .d_sepejs_estate{
    position: relative;
    left: 150px;
}

/* style for TRANSFER_cscsl here */

.container .transfer_cscsl .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
        .container .transfer_cscsl .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px;
}
.container .transfer_cscsl .input-group .middlename {
    position: relative;
    left: 10px; 
    
}
.container .transfer_cscsl .input-group .email {
    position: relative;
    left: 10px;
}
.container .transfer_cscsl .input-group .address {
    position: relative;
    left: 10px; 
}
.container .transfer_cscsl .input-group input{
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
.container .transfer_cscsl .input-group .btn-primary {
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

.container .transfer_cscsl .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
.form-check-radios{
    position: relative;
    left: 225px;
}
.transfer_cscsl .form-check .sworn_statement{
    position: relative;
    left: 146px;
}
.transfer_cscsl .form-check .valid_id{
    position: relative;
    left: 175px;
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

    <h5>New Assessment</h5>
    <a href="#NA_Buildings"> Buildings</a>
    <a href="#NA_Lands">Land</a>
    <a href="#NA_Machineries">Machineries</a>
    <a href="#NA_Public_land">Public Land</a>
<br>
    <h5>Transfer Assessment</h5>
    <a href="#TA_Buildings_or_Lands">Buildings/Land</a>
    <a href="#TA_CSCSOL">Condominium,Subdivision, <br>Consolidation/Segregation of Land</a>
</div>

<div class="content-area">
    <div class="wrapper">
        <div id="NA_Buildings" class="na_buildings-area">
                <div class="text-content">
                    <h5>New Assessment for Buildings</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="new_buildings.php" method="POST" class="new_buildings">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="building_permit_cert" name="building_permit_cert" type="checkbox" id="building_permit_cert" value="<?php echo $building_permit_cert; ?>">
                                    <label class="building_permit_cert" for="building_permit_cert">Building Permit/Cert of Completion</label>
                            </div>
                            <div class="form-check ">
                                    <input class="pictures" name="pictures" type="checkbox" value="<?php echo $pictures; ?>" id="pictures">
                                    <label class="pictures" for="pictures">3 pcs. Colored Pictures (front view and 2 sides)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="sketch_plan" name="sketch_plan" type="checkbox" id="sketch_plan" value="<?php echo $sketch_plan; ?>">
                                    <label class="sketch_plan" for="sketch_plan">Location / Sketch Plan (original)</label>
                            </div>
                            <div class="form-check">
                                    <input class="tax_dec_land" name="tax_dec_land" type="checkbox" id="tax_dec_land" value="<?php echo $tax_dec_land; ?>">
                                    <label class="tax_dec_land" for="tax_dec_land">Tax Declaration of Land (photocopy)</label>
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
        <div id="NA_Lands" class="na_lands-area">
                <div class="text-content">
                    <h5>New Assessment for Land</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="new_lands.php" method="POST" class="new_lands">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check">
                                    <input class="t_o_cert_title" name="t_o_cert_title" type="checkbox" id="t_o_cert_title" value="<?php echo $t_o_cert_title; ?>">
                                    <label class="t_o_cert_title" for="t_o_cert_title">Transfer or Original Certificate of Title (photocopy)</label>
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
        <div id="NA_Machineries" class="na_machineries-area">
                <div class="text-content">
                    <h5>New Assessment for Machineries</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="new_machineries.php" method="POST" class="new_machineries">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="o_r_machineries" name="o_r_machineries" type="checkbox" id="o_r_machineries" value="<?php echo $o_r_machineries; ?>">
                                    <label class="o_r_machineries" for="o_r_machineries">Official Receipts of Machineries</label>
                            </div>
                            <div class="form-check">
                                    <input class="t_d_building" name="t_d_building" type="checkbox" id="t_d_building" value="<?php echo $t_d_building; ?>">
                                    <label class="t_d_building" for="t_d_building">Tax Declaration-Building (photocopy)</label>
                            </div>
                            <div class="form-check">
                                    <input class="l_cd_agreement" name="l_cd_agreement" type="checkbox" id="l_cd_agreement" value="<?php echo $l_cd_agreement; ?>">
                                    <label class="l_cd_agreement" for="l_cd_agreement">Lease Contract / Deed of Agreement if under lease</label>
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
        <div id="NA_Public_land" class="na_public_land-area">
                <div class="text-content">
                    <h5>New Assessment for Public Land</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="new_public_land.php" method="POST" class="new_public_land">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="o_ai_patent" name="o_ai_patent" type="checkbox" id="o_ai_patent" value="<?php echo $o_ai_patent; ?>">
                                    <label class="o_ai_patent" for="o_ai_patent">Order of Award and Issuance of Patent (photocopy)</label>
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
        <div id="TA_Buildings_or_Lands" class="ta_buildings-area">
                <div class="text-content">
                    <h5>Transfer Assessment for Buildings/Land</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="transfer_buildings_lands.php" method="POST" class="transfer_buildings_lands">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="t_c_title" name="t_c_title" type="checkbox" id="t_c_title" value="<?php echo $t_c_title; ?>">
                                    <label class="t_c_title" for="t_c_title">Transfer Certificate of Title</label>
                            </div>
                            <div class="form-check">
                                    <input class="e_c_sale" name="e_c_sale" type="checkbox" id="e_c_sale" value="<?php echo $e_c_sale; ?>">
                                    <label class="e_c_sale" for="e_c_sale">Estate/Certificate of Sale</label>
                            </div>
                            <div class="form-check">
                                    <input class="d_sepejs_estate" name="d_sepejs_estate" type="checkbox" id="d_sepejs_estate" value="<?php echo $d_sepejs_estate; ?>">
                                    <label class="d_sepejs_estate" for="valid_id">Deed of Sale/Exchange/Partition/Extra Judicial Settlement of Estate</label>
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
        <div id="TA_CSCSOL" class="ta_cscsol-area">
                <div class="text-content">
                    <h5>Transfer Assessment for Condominium,Subdivision,Consolidation/Segregation of Land</h5>
                    <div class="container">
                        <div class="container-content"> <br>
                        <form action="transfer_cscsl.php" method="POST" class="transfer_cscsl">
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
                                    <input class="sworn_statement" name="sworn_statement" type="checkbox" id="sworn_statement" value="<?php echo $sworn_statement; ?>">
                                    <label class="sworn_statement" for="sworn_statement">Sworn Statement (original)</label>
                            </div>
                            <div class="form-check float-start">
                                    <input class="authorization_letter" name="authorization_letter" type="checkbox" id="authorization_letter" value="<?php echo $authorization_letter; ?>">
                                    <label class="authorization_letter" for="authorization_letter">Authorization Letter</label>
                            </div>
                            <div class="form-check">
                                    <input class="valid_id" name="valid_id" type="checkbox" id="valid_id" value="<?php echo $valid_id; ?>">
                                    <label class="valid_id" for="valid_id">Valid I.D of property owner, and requestor</label>
                            </div>
                            <div class="form-check">
                                    <input class="t_c_title_condominium" name="t_c_title_condominium" type="checkbox" id="t_c_title_condominium" value="<?php echo $t_c_title_condominium; ?>">
                                    <label class="t_c_title_condominium" for="t_c_title_condominium">Transfer Certificate of Title or Condominium Certificate of Title</label>
                            </div> 
                            <div class="form-check">
                                    <input class="a_sc_plan" name="a_sc_plan" type="checkbox" id="a_sc_plan" value="<?php echo $a_sc_plan; ?>">
                                    <label class="a_sc_plan" for="a_sc_plan">Approved Subdivision / Consolidation Plan</label>
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