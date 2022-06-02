<?php
    session_start();
    error_reporting(0);
    include 'config.php';

    if (!isset($_SESSION['username'])) {
        header("Location: stafflogin.php");
    }

?>
<?php 
            if (isset($_POST["update"])){
                move_uploaded_file($_FILES ["file"]["tmp_name"], "pictures/" . $_FILES ["file"]["name"]);
                $conn = mysqli_connect($localhost, $user, $pass, $database);
                $q = mysqli_query($conn,"UPDATE staff SET image = '".$_FILES ["file"]["name"]."' WHERE username = '".$_SESSION['username']."'");
            }
            ?>


<?php
date_default_timezone_set('Asia/Tokyo');
if (isset($_GET['ym'])){
    $ym = $_GET['ym'];
}else {
    $ym = date('Y-m');
}
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}
$today = date('Y-m-j');
$title = date('F,Y', $timestamp);

$prev = date('Y-m', strtotime('-1 month', $timestamp));
$next = date('Y-m', strtotime('+1 month', $timestamp));

$day_count = date('t', $timestamp);
$str = date('N', $timestamp);
    
$weeks = [];
$week = '';

$week = str_repeat('<td></td>', $str - 1);
for ($day = 1; $day <= $day_count; $day++, $str++){
    $date = $ym . '-' . $day;
    if ($today == $date) {
        $week .= '<td class="today">';
    }else {
        $week .= '<td>';
    }
    $week .= $day . '</td>';

    if ($str % 7 == 0 || $day == $day_count){
        if ($day == $day_count && $str % 7 != 0){
            $week .= str_repeat ('<td></td>', 7 - $str % 7);
        }
        $weeks[] = '<tr>' . $week . '</tr>';
        $week = '';
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
    <link rel="stylesheet" type="text/css" href="style.main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    
    <title>Home-staff</title>

    <style>
        body {
            background: #bad8e6;
            text-decoration: none;
        }
        .navbar-brand {
            color: #fff;
            font-size:x-large;
        }
        .navbar-link {
            position: relative;
            top:2px;
            right: 190px;
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
            .greetings .greet {
            position: relative;
            left: 300px;
            top:10px;
            /* font-weight:bold; */
            font-size: 1rem;
            color: #fff;
        }
            .navbar .notif_bell {
            position: relative;
            left: 100px;            
        }

            .navbar .notif_bell button{
            border-radius: 50px;
        }
            .navbar .btn .dropdown{
            position: relative;
            right: 120px; 
        }   
            .navbar .btn .dropdown button {
            border-radius: 50px;
        }

            .main-page-text a{
            text-decoration: none;
            color: #fff;
        }
            .navigation {
            /* position: relative; */
            /* right: 600px; */
            /* bottom: 79px; */
            background: #fff;
            height: 575px;
            width: 265px;
            
        }
        .navigation h5 {
            position: relative;
            left:50px ;
            font-size: 1rem;
            text-decoration:none;
            text-align:left;
            text-indent:15px;
        }
        
        .navigation a {
            color: black;
            line-height: 15px;
            font-size: 1.3rem;
            font-family: 'Roboto', sans-serif;
            /* border: 1px  solid #041e3b; */
            cursor: pointer;
            transition: .3s;
            font-size: 16px;
            text-indent:10px;

        }
        .navigation a:hover{
            color:#03428a;
            /* border: 1px  solid #041e3b; */
            border-top: .1rem solid #03428a;
            border-bottom: .1rem solid #03428a;
            padding-bottom: .5rem;
            transform: translateY(-5px);
            
        }
        .navigation .timeavailable{
            position: relative;
            left:15px;
        }
        .navigation .timeavailable .timetype {
            /* font-family: 'Roboto', sans-serif; */
            font-size: 1.1rem;
            font-weight:500;
        }
        .navigation .timeavailable .time{
            position: relative;
            bottom: 10px;
            font-family: 'Roboto', sans-serif;
        }
        .whitebox {
            position: relative;
            text-align:left;
          
            background: #fff;
            width: 265px;
            /* height: 30px; */
        }
        .dropdown-menu li a{
            font-size:1rem;
        }
        
        .username {
            text-align:center;
        }
        .image{
            position: relative;
            left: 75px;
        }
        label{
            /* padding:7px;
            display: table;
            color: #fff; */
            
            position: relative;
            left: 75px;
            
        }
        input [type="file"]{
            display:none;
            
        }
        .img-circle{
            position: relative;
            left: 75px;
        }
        #update_profile {
            position: relative;
            left: 250px;
            cursor: pointer;
            border-radius: 4px;
            background-color: rgba(0,0,0,0.1);
            transform: translate(-50%, -50%);
            
        }
        #button_profile {
            position: relative;
            left: 120px;
            top: 5px;
            cursor: pointer;
            transform: translate(-50%, -50%);
        }
        .container {
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            
            width:950px;
            padding: 10px;  
            justify-content: center;
            position: relative;
            left: 350px;
            bottom: 500px;
            background-color: #f0f3f7;
            
        
        }
        .list-inline {
            text-align:center;
            position: relative;
           left:0rem;
           font-size: 1.5rem;
        }
        .list-inline li a {
            text-decoration: none;
            color: black;
            
        }
        .list-inline li a:hover{
            color: blue;
        }
        .table{
            width:900px;
            text-align:center;
            position: relative;
           left: 1rem;
           outline-width: 5rem;

        }
        .text-right {
            position: relative;
            text-align:right;
            right: 5rem;
            
        }
        .text-right a {
            text-decoration: none;
            color: #0d0980;
        }
        .text-right a:hover{
            color: blue;
        }
        th:nth-of-type(6), td:nth-of-type(6){
            color:blue;
        }
        th:nth-of-type(7), td:nth-of-type(7){
            color:red;
        }
        tr .today {
            background-color: #e6e4d3;
        }
    
    </style>
</head>
<body style="height: 50px;">

<nav class="navbar navbar-light bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="color: #fff;">ASSESSORS</a>
    <div class="navbar-link"><a href="index.php#services">Services</a></div>
    <div class="greetings">
  <p class="greet"><em>Welcome!</em></p>
</div>

                    <?php

                        $sql_get = mysqli_query($conn,"SELECT * FROM requests where status=0");
                        $count = mysqli_num_rows($sql_get);
                    ?>
                                <div class="notif_bell">
                                <button class="btn btn-light btn-sm  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-bell-fill"></i> <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="count">
                                    <?php echo $count; ?>                                 
                                </span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <?php

                                        $sql_get1 = mysqli_query($conn,"SELECT * FROM requests where status=0");
                                        if(mysqli_num_rows($sql_get1)>0)
                                            {
                                                while($result = mysqli_fetch_assoc($sql_get1))
                                                {
                                                    echo '<a class="dropdown-item text-primary" href="request.php?id='.$result['id'].'" style="font-size:12px;text-transform:initial;">'.$result['message'].'</a>';
                                                    echo '<div class="dropdown-divider"></div>';
                                                }                                                
                                            }
                                            else
                                            {
                                                echo '<a class="dropdown-item text-danger" href="#">No New Requests</a>';
                                            }
                                    
                                        ?>
                                                                               
                                </ul>
                                </div>
    <div class="btn">
    <div class="dropdown">
  <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="tooltip" data-bs-placement="left" title="You can now update your profile information on update profile tab.">
  <i class="bi bi-person-circle"></i> <span><?=$_SESSION['username']?></span>
  </button>
  
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="font: size 1rem;">
    <li><a class="dropdown-item" href="staff_logout.php"><i class="bi bi-power"></i> Sign Out</a></li>
  </ul>
</div>

    </div> 
  </div>
</nav>
<br>
<br>
<div class="navigation float-left" >
        
  <br> 
  <div class="username"><?=$_SESSION['username']?></div>
  <div class=image>
    <?php
            $conn = mysqli_connect($localhost, $user, $pass, $database);
            $q = mysqli_query($conn,"SELECT image FROM staff WHERE username = '".$_SESSION['username']."'");
            while($row = mysqli_fetch_assoc($q))
            {   
               
                if($row['image'] == "") {
                    echo "<img width='120' height='120' src='pictures/default.png' alt='Default Profile Pic'>";
                    
                } else {
                    echo "<img width='120' height='120' src='pictures/".$row['image']."' alt='Profile Pic'>";
                }
            }
    ?>   </div>
    <div id="profile-img">
            <form action="home_staff.php" method="post" enctype="multipart/form-data" >
                <label for="image"><i class="bi bi-camera" style="font-size: 30px;"></i></label>
                <input type="file" name="file" id="image" style="display:none;visibility:none;">
                <button id="button_profile" name="update" class="btn btn-outline-primary btn-sm" style="font-size: 10px;">Update Image</button>
            </form>
    </div>
    <h5>OVERVIEW</h5>
    <a class="nav-link" href="request.php">Requests</a>
    <a class="nav-link" href="appointments_staff.php">Appointments List</a>
    <a class="nav-link" href="service_1.php">Request for NATSC</a>
    <a class="nav-link" href="service_2.php">Request for VMVMPIN</a>
    <a class="nav-link" href="service_3.php">Request for CTCOTDAC</a>
    <a class="nav-link" href="service_4.php">Request for CARRD</a>
    <a class="nav-link" href="tax_declaration.php">Tax Declarations</a>
    

<br><br>
    <div class="timeavailable">
        <p class="timetype">Office Hours :</p>
        <p class="time">Available from 8:00Am to 5:00PM</p>
    </div>

    <div class="container float-right">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="?ym=<?= $prev;?>" class="btn btn-link">&lt;prev</a></li>
                    <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
                    <li class="list-inline-item"><a href="?ym=<?= $next;?>" class="btn btn-link">next &gt;</a></li>
                </ul>
                <p class="text-right"><a href="home_staff.php">Today</a></p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mon</th>
                            <th>Tue</th>
                            <th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Sun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($weeks as $week) {
                                echo $week;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
</div>

</body>
</html>
 