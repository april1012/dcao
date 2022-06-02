
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
        $o_r_machineries = $_POST['o_r_machineries'];
        $t_d_building = $_POST['t_d_building'];
        $l_cd_agreement = $_POST['l_cd_agreement'];
      
        

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
        if (isset($_POST['o_r_machineries'])){
            $o_r_machineries = "YES";
        } else {
            $o_r_machineries = "NO";
        }
        if (isset($_POST['t_d_building'])){
            $t_d_building = "YES";
        } else {
            $t_d_building = "NO";
        }
        if (isset($_POST['l_cd_agreement'])){
            $l_cd_agreement = "YES";
        } else {
            $l_cd_agreement = "NO";
        }
        
        
                $query = "INSERT INTO n_a_machineries (firstname,middlename,lastname,email,contact, address, requestor,filled_request_form,sworn_statement,authorization_letter,valid_id,o_r_machineries,t_d_building,l_cd_agreement)
                        VALUES ('$firstname','$middlename','$lastname','$email','$contact', '$address', '$requestor','$filled_request_form','$sworn_statement','$authorization_letter','$valid_id','$o_r_machineries','$t_d_building','$l_cd_agreement')";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    header('location:service_1.php');
                    
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>