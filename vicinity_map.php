
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
        $tax_declaration = $_POST['tax_declaration'];
        
        
        
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
        if (isset($_POST['tax_declaration'])){
            $tax_declaration = "YES";
        } else {
            $tax_declaration = "NO";
        }
        
        
        
                $query = "INSERT INTO vicinity_map (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,authorization_letter,valid_id,tax_declaration)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$authorization_letter','$valid_id','$tax_declaration')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_2.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>