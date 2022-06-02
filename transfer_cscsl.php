
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
        $t_c_title_condominium = $_POST['t_c_title_condominium'];
        $a_sc_plan = $_POST['a_sc_plan'];
        
      
        

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
        if (isset($_POST['t_c_title_condominium'])){
            $t_c_title_condominium = "YES";
        } else {
            $t_c_title_condominium = "NO";
        }
        if (isset($_POST['a_sc_plan'])){
            $a_sc_plan = "YES";
        } else {
            $a_sc_plan = "NO";
        }
        
        
        
                $query = "INSERT INTO t_a_cscsl (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,sworn_statement,authorization_letter,valid_id,t_c_title_condominium,a_sc_plan)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$sworn_statement','$authorization_letter','$valid_id','$t_c_title_condominium','$a_sc_plan')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_1.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>