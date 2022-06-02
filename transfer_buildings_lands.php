
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
        $t_c_title = $_POST['t_c_title'];
        $e_c_sale = $_POST['e_c_sale'];
        $d_sepejs_estate = $_POST['d_sepejs_estate'];
      
        

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
        if (isset($_POST['t_c_title'])){
            $t_c_title = "YES";
        } else {
            $t_c_title = "NO";
        }
        if (isset($_POST['e_c_sale'])){
            $e_c_sale = "YES";
        } else {
            $e_c_sale = "NO";
        }
        if (isset($_POST['d_sepejs_estate'])){
            $d_sepejs_estate = "YES";
        } else {
            $d_sepejs_estate = "NO";
        }
        
        
                $query = "INSERT INTO t_a_buildings_lands (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,sworn_statement,authorization_letter,valid_id,t_c_title,e_c_sale,d_sepejs_estate)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$sworn_statement','$authorization_letter','$valid_id','$t_c_title','$e_c_sale','$d_sepejs_estate')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_1.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>