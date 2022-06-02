
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
        $authorization_letter = $_POST['authorization_letter'];
        $valid_id = $_POST['valid_id'];
        $letter_request = $_POST['letter_request'];
        $title_property = $_POST['title_property'];
        
        
        
        if (isset($_POST['filled_request_form'])){
            $filled_request_form = "YES";
        } else {
            $filled_request_form = "NO";
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
        if (isset($_POST['letter_request'])){
            $letter_request = "YES";
        } else {
            $letter_request = "NO";
        }
        if (isset($_POST['title_property'])){
            $title_property = "YES";
        } else {
            $title_property = "NO";
        }
        
        
        
                $query = "INSERT INTO map_verification (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,authorization_letter,valid_id,letter_request,title_property)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$authorization_letter','$valid_id','$letter_request','$title_property')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_2.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>