<?php
    include_once 'config.php';
    $id = $_GET['id'];
    $query = "DELETE FROM requests WHERE requests.id='$id'";
            if(performQuery($query)){
                echo "Request has been rejected.";
            } else {
                echo "Something went wrong! Please try again."
            }
?>