<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: stafflogin.php");
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
    <title>Appointments</title>

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
    left: 10px;
}.modal-body .completed_request .input-group {
    width: 50%;
    height: 20px;
    margin-bottom: 25px;
    text-align: center;
    indent:10px; 
}
.modal-body .completed_request .input-group .username {
    position: relative;
    left: 100px;
}
.modal-body .completed_request .input-group input{
    width: 100%;
    height: 100%;
    border: 2px solid #e7e7e7;
    padding: 15px 20px;
    font-size: 1rem;
    border-radius: 30px;
    background: transparent;
    outline: none;
    transition: .3s;
}
.modal-body .completed_request .input-group .control-label{
    position: relative;
    left: 150px;
}.modal-body .completed_request .form-select{
    width:300px;
    position: relative;
    left: 80px;
}
.modal-body .completed_request .input-group .form-control{
    position: relative;
    left: 100px;
}
.modal-body .completed_request .input-group .btn-primary {
    position: relative;
    left: 100px;
    width: 100%;
    padding: 5px 5px;
    text-align: center;
    border: none;
    background: #3b95f5;
    outline: none;
    border-radius: 30px;
    font-size: 1.2rem;
    color: #fff;
    cursor: pointer;
    transition: .3s;
}

.modal-body .completed_request .input-group .btn-primary:hover {
    transform: translateY(-5px);
    background: #3b95f5;
}
    </style>

</head>
<body>
<nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">ASSESSORS</a>
    <div class="btn">
    <p class="main-page-text"><a href="home_staff.php">Go back</a></p>
    </div> 
  </div>
</nav>
<div class="header">
<h3>Appointments</h3>
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
                $query = "SELECT * from appointments where CONCAT(firstname,middlename,lastname,service_request,date_sched) LIKE '%$filtervalues%'";
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
                            <td>
                                <button class="btn btn-danger btn-sm" type="delete" ><a class="text-light" style="text-decoration:none;" href="">Completed</a></button>
                            </td>
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
                $username = $_POST['username'];
                $query1=mysqli_query($conn,"select * from appointments ");
                while($row=mysqli_fetch_array($query1)){
                    ?>
                    <tr>
                        
                        <td><?php echo $row['firstname']?></td>
                        <td><?php echo $row['middlename']?></td>
                        <td><?php echo $row['lastname']?></td>
                        <td><?php echo $row['service_request']?></td>
                        <td><?php echo $row['date_sched']?></td>
                        <td><?php echo $row['date_created']?></td>                        
                        <td><button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#request_released">Complete</button>
                        
<div class="modal fade" id="request_released" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="text-align: center;"id="staticBackdropLabel">Completed-Released Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" class="completed_request">
              <div class="input-group">
                  <input class="username" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
              </div> 
              <div class="input-group float-start">
                  <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
              </div>
              <div class="input-group ">
                  <input class="middlename" type="text" placeholder="Middlename" name="middlename" value="<?php echo $middlename; ?>">
              </div>
              <div class="input-group float-start">
                  <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
              </div>
              <div class="input-group ">
                  <input class="email"type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
              </div>
              <div class="input-group float-start">
                  <input type="int" placeholder="Contact No." name="contact" value="<?php echo $contact; ?>" required>
              </div>
              <div class="input-group">
                  <input class="address" type="text" placeholder="Address" name="address" value="<?php echo $address; ?>" required>
              </div>
              <select class="form-select" aria-label="Default select example" name="service_request" value="<?php echo $service_request; ?>" required>
                    <option selected>Service Requested
                    </option>
                    <option value="New Assessment">New Assessment</option>
                    <option value="Transfer Assessment">Transfer Assessment</option>
                    <option value="Vicinity Map Request">Vicinity Map Request</option>
                    <option value="Map Verification">Map Verification</option>
                    <option value="Pin Request">Pin Request</option>
                    <option value="CTC of Tax Declaration and Certification">CTC of Tax Declaration and Certification</option>
                    <option value="Cancellation of Assessment">Cancellation of Assessment</option>
                    <option value="Re-assessment Request">Re-assessment Request</option>
              </select>
<br>
<div class="input-group">
                <label for="date_sched" class="control-label">Date Released</label>
                <input type="datetime-local" class="form-control" name="date_sched" value="<?php echo $date_sched; ?>" required>
            </div>
            <br>
              
              
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Changes</button>
      </div>
    </div>
  </div>
</div>
</td>
                    </tr>
                    <?php
                }
            ?>
  </tbody>
</table>
    </div>
</div>

</body>
</html>