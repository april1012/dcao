
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
        $authorization_letter = $_POST['authorization_letter'];
        $valid_id = $_POST['valid_id'];
        $letter_request = $_POST['letter_request'];
        $tax_declaration = $_POST['tax_declaration'];
        $survey_plan = $_POST['survey_plan'];        
        $c_pictures = $_POST['c_pictures'];
        
        
        
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
        if (isset($_POST['letter_request'])){
            $letter_request = "YES";
        } else {
            $letter_request = "NO";
        }
        if (isset($_POST['tax_declaration'])){
            $tax_declaration = "YES";
        } else {
            $tax_declaration = "NO";
        }
        if (isset($_POST['survey_plan'])){
            $survey_plan = "YES";
        } else {
            $survey_plan = "NO";
        }        
        if (isset($_POST['c_pictures'])){
            $c_pictures = "YES";
        } else {
            $c_pictures = "NO";
        }
    
        
        
        
                $query = "INSERT INTO dispute (firstname,middlename,lastname,email,contact, address, requestor,authorization_letter,valid_id,letter_request,tax_declaration,survey_plan,c_pictures)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$authorization_letter','$valid_id','$letter_request','$tax_declaration','$survey_plan','$c_pictures')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_4.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>