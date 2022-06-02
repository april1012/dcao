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

        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $requestor = $_POST['requestor'];
        $filled_request_form = $_POST['filled_request_form'];
        $sworn_statement = $_POST['sworn_statement'];
        $authorization_letter = $_POST['authorization_letter'];
        $valid_id = $_POST['valid_id'];
        $building_permit_cert = $_POST['building_permit_cert'];
        $pictures = $_POST['pictures'];
        $sketch_plan = $_POST['sketch_plan'];
        $tax_dec_land = $_POST['tax_dec_land'];
       

        if (isset($_POST['filled_request_form'])){
            $filled_request_form = "YES";
        } else {
            $filled_request_form = "NO";
        }

        if (isset($_POST['sworn_statement'])){
            $sworn_statement = "YES";
        } else {
            $sworn_statement = "NO";
        }
        if (isset($_POST['authorization_letter'])){
            $authorization_letter = "YES";
        } else {
            $authorization_letter = "NO";
        }
        if (isset($_POST['valid_id'])){
            $valid_id = "YES";
        } else {
            $valid_id = "NO";
        }
        if (isset($_POST['building_permit_cert'])){
            $building_permit_cert = "YES";
        } else {
            $building_permit_cert = "NO";
        }
        if (isset($_POST['pictures'])){
            $pictures = "YES";
        } else {
            $pictures = "NO";
        }
        if (isset($_POST['sketch_plan'])){
            $sketch_plan = "YES";
        } else {
            $sketch_plan = "NO";
        }

        if (isset($_POST['tax_dec_land'])){
            $tax_dec_land = "YES";
        } else {
            $tax_dec_land = "NO";
        }
        
        
                $query = "INSERT INTO n_a_buildings (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,sworn_statement,authorization_letter,valid_id,building_permit_cert,pictures,sketch_plan,tax_dec_land)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$sworn_statement','$authorization_letter','$valid_id','$building_permit_cert','$pictures','$sketch_plan','$tax_dec_land')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_1.php');
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }
        }
    

?>