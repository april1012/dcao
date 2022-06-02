<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: admin_login.php");
    }

?>
<?php
    if(isset($_GET['id'])){
        $main_id = $_GET['id'];
        $sql_update = mysqli_query($conn,"UPDATE requests SET status=1 WHERE id='$main_id'");
    }
?>
<?php

if (isset($_POST['accept'])){ 
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $service_request = $_POST['service_request'];
    $date_sched = $_POST['date_sched'];

    
        $sql = "SELECT * FROM requests WHERE id = '$id' ";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0) {
            $sql = "INSERT INTO users (firstname,middlename,lastname, username,email,contact,  address, service_request,date_sched)
                    VALUES ('$firstname','$middlename','$lastname', '$username','$email','$contact','$address', '$service_request','$date_sched' )";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Request has been accepted.')</script>";
                $firstname = "";
                $middlename = "";
                $lastname = "";
                $username = "";
                $email = "";
                $contact = "";
                $address = "";
                $service_request = "";
                $date_sched = "";
            } else {
                echo "<script>alert('Woops! Something Went Wrong.')</script>";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.com">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="style.home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Requests</title>

    <style>
            body {
            background: #e3f2fd;
            text-decoration: none;
            
        }
        .navbar-brand {
            color: #fff;
            font-size:x-large;
        }
        .navbar-link {
            position: relative;
            top: 5px;
            right: 300px;
            text-decoration: none;

        }
        .navbar-link a {
            color: #fff;
            cursor: pointer;
            transition: all .3s linear;
            text-decoration: none;
        }
        .navbar-link a:hover {
            color:black;
          border-bottom: .2rem solid black;
            /* padding-bottom: .5rem; */
            transform: translateY(-5px);
        }
        .navbar .btn{
    position: relative;
    top: 10px;   
}
        .main-page-text a{
    text-decoration: none;
    color: #fff;
}
.header h3 {
    text-align: center; 
    position: relative;
    top: 100px;
    color:black;
}
.searchform{
    position: relative;
    top: 100px;
    text-align: center; 
}
.card-body{
    position: relative;
    text-align: center; 
}
/* .card-body thead{
    position: relative;
    left: 140px;
} */
    </style>

</head>
<body>
<nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">ASSESSORS</a>
    <div class="btn">
    <p class="main-page-text"><a href="admin.php">Go back</a></p>
    </div> 
  </div>
</nav>
<div class="header">
<h3>Requests List</h3>
</div>
<br>
    <div class="searchform">
        <form action="" method="GET">
        <input class="form-search" style="width: 550px;"name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" type="search" placeholder="Search appointments here...">
        <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
<br>
<br>
<br>
<br>
<div class="card-body">
    <div class="table-responsive">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Middlename</th>
      <th scope="col">Lastname</th>
      <th scope="col">Service Requested</th>
      <th scope="col">Date Scheduled</th>
      <th scope="col">Date Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  
  <tbody>
  <div>
            <?php
            require('config.php');

            if(isset($_GET['search'])){
                $filtervalues = $_GET['search'];
                $query = "SELECT * from requests where CONCAT(firstname,middlename,lastname,service_request,date_sched) LIKE '%$filtervalues%'";
                $query_run = mysqli_query($conn,$query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $items)
                    {
                        
                        ?>
                        <tr>
                            <td><?= $items['firstname']; ?></td>
                            <td><?= $items['middlename']; ?></td>
                            <td><?= $items['lastname']; ?></td>
                            <td><?= $items['service_request']; ?></td>
                            <td><?= $items['date_sched']; ?></td>
                            <td><?= $items['date_created']; ?></td>
                            
                        </tr>
                        <?php
                    }
                }
                else
                {
                    ?>
                    <tr>
                        <td colspan="6">No Record Found</td>
                    </tr>
                    <?php
                }
            }
            ?>
            </div>
            <?php
                require('config.php');
                $id = 1;
                $sql_get = mysqli_query($conn,"SELECT * FROM requests where status=1");
                while($main_result = mysqli_fetch_assoc($sql_get)) :?>
                    <tr>
                        <th scope="row"><?php echo $id++; ?></th>
                        <td><?php echo $main_result['firstname']?></td>
                        <td><?php echo $main_result['middlename']?></td>
                        <td><?php echo $main_result['lastname']?></td>
                        <td><?php echo $main_result['service_request']?></td>
                        <td><?php echo $main_result['date_sched']?></td>
                        <td><?php echo $main_result['date_created']?></td>
                        <td name="actions">
                            <button class="btn btn-success btn-sm text-light" type="accept" style="text-decoration:none;">Accept</button>
                            <button class="btn btn-danger btn-sm" type="delete" ><a class="text-light" style="text-decoration:none;" href="delete_request.php?id=<?php echo $main_result['id'];?>">Reject</a></button>
                        </td>
                    </tr>
            <?php endwhile ?>
  </tbody>
</table>
    </div>
</div>
</body>
</html>