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

    if (isset($_GET['delete'])){ 
        $id = $_POST['id'];
        $firstname = $_GET['firstname'];
        $middlename = $_GET['middlename'];
        $lastname = $_GET['lastname'];
        $email = $_GET['email'];
        $contact = $_GET['contact'];
        
       
            
                $query = "DELETE  FROM `staff`  WHERE username = '".$_SESSION['username']."'";
    
                $run = mysqli_query($conn,$query) or die(mysqli_error());
                
                if($run){
                    echo "<script>alert('Deleted Successfully.')</script>";
                }
                else {
                    echo "<script>alert('Woops! Something Went Wrong.')</script>";
                }

        }
    

?>