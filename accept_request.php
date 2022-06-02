<?php
    include_once 'config.php';
    

    if (isset($_POST['id'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $service_request = $_POST['service_request'];
        $date_sched = $_POST['date_sched'];

        
        $sql= mysqli_query($conn,"INSERT INTO appointments (username,firstname,middlename,lastname,email,contact, address, service_request, date_sched)
        VALUES ('$username','$firstname','$middlename','$lastname','$email','$contact', '$address', '$service_request', '$date_sched' ) WHERE id='$id'");
        if($sql){
                header('location:appointments_staff.php');
        }
        $query = "DELETE FROM requests WHERE id='$id';";
            if(performQuery($query)){
                echo "<script>alert('Request has been accepted.')</script>";
            } else {
                echo "<script>alert('Woops! Something Went Wrong.')</script>";
            }
         } else {
        echo "Error Occured";
    }
?>