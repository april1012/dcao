<?php 
include 'config.php';

error_reporting(0);

if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];

      $sql = "INSERT INTO comments (name,email,comment)
              VALUES ('$name','$email','$comment')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
          echo "<script>alert('Comment posted successfully.')</script>";
      } else {
          echo "<script>alert('Comment post was unsuccessful.')</script>";
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

    <title>Home</title>

    <style>
      .contact .content p{
    text-transform: none;
}
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ASSESSORS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-6 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#forum">Forum</a>
        </li>
      </ul>
      <div class="row col-5 justify-content-evenly">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      </div> 
      
      <div class="login-btn">
      <a href="login.php"><button type="button" class="btn btn-primary ">Login</button></a>
      </div>
    </div>
  </div>
</nav>

 <!-- home section starts here -->
 
 <section class="home" id="home">
   <br>
   <br>
   <br>
        <div class="row justify-content-between">
            <div class="content col-5">
                    <h3> Assessor's Office </h3>
                    <p>Aiming to provide better quality assesment and <br> appraisal of Real Property Units for Tax Relations</p>
                    <a href="login.php" class="btn btn-primary">Schedule Now</a>
            </div>
            <div class="col-6">
                <img src="citylogo.jpg" width="500px" height="400px">
            </div>
        </div>
        <br>
        <br>
        </section>


      <!-- home section ends here -->

<!-- about section starts here -->
   
    <section class="about" id="about">
        <br>
        <br>
        <h1 class="heading">About <span>Us</span></h1>

        <div class="row">
            <div class="col-md-6">
            <div class="image">
                <img src="gsobuilding.jpg" alt="">
            </div>
            </div>
        
        <div class="col-md-6">
        <div class="content">
            <h3>Dumaguete City Assessor's Office</h3>
            <p>An assessor is a local government official who determines the value of a property for local real estate taxation purposes.The figures assessors derive are used to calculate future property taxes. The assessor estimates the value of real property within a city or town’s boundaries. This value is converted into an assessment, which is one component in the computation of real property tax bills.</p>
                <a href="about.php" class="btn btn-primary">Learn More</a>
        </div>
        </div>
        </div>
<br>
<br>
    </section>
<!-- about section ends here -->

<!-- services section starts here -->

    <section class="services" id="services">
    <br>
<br>

        <h1 class="heading">Our <span>Services</span></h1>

        <div class="box-container">
            <div class="box">
                <h5>REQUEST FOR NEW ASSESSMENT, TRANSFER, SUBDIVISION AND CONSOLIDATION</h5>
                <a href="service1.php" class="btn btn-primary">Learn More</a>
            </div>

            <div class="box">
                <h5>REQUEST FOR VICINITY MAP, VERIFICATION OF MAP, AND PROPERTY INDEX NUMBER (PIN)</h5>
                <a href="service2.php" class="btn btn-primary">Learn More</a>
            </div>

            <div class="box">
                <h5>REQUEST FOR CERTIFIED TRUE COPIES OF TAX DECLARATION AND CERTIFICATION</h5>
                <a href="service3.php" class="btn btn-primary">Learn More</a>
            </div>

            <div class="box">
                <h5>REQUEST FOR CANCELLATION AND RE-ASSESSMENT: (RE-CLASSIFICATION, PHYSICAL CHANGE, PARTIAL DESTRUCTION, DEMOLITION, ERRONEOUS ASSESSMENT & DISPUTE)</h5>
                <a href="service4.php" class="btn btn-primary">Learn More</a>
            </div>

        </div>
        <br>
<br>
    </section>
<!-- services section ends here -->
<!-- contact section starts here -->

    <section class="contact" id="contact">
    <br>
<br>
        <h1 class="heading">Contact<span> Us</span></h1>

        <div class="row">

            <div class="col-md-6">
              <div class="content">
                  <div>
                    <p><h5 class="bi bi-geo-alt-fill"> Address:</h5>2nd Floor, GSO Building, City Hall Compound, Dumaguete City 6200</p>
                  </div>

                  <div>
                    <p><h5 class="bi bi-envelope-fill"> Email:</h5>cityassessors@gmail.com</p>
                  </div>

                  <div>
                    <p><h5 class="bi bi-telephone-fill"> Call:</h5>422-5214, 225-2854</p>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7874.737879483522!2d123.3015248715367!3d9.30054001116029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33ab6edde11a9757%3A0x71a1aecc65eedb92!2sGeneral%20Services%20Office%20-%20City%20Government%20of%20Dumaguete!5e0!3m2!1sen!2sph!4v1648530885820!5m2!1sen!2sph" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
        </div>
        <br>
<br>
<br>
<br>
    </section>
<!-- contact section ends here -->

<!-- forum section starts here -->

    <section  class="forum" id="forum">
    <br>
<br>
        <h1 class="heading">Forum</h1>
          <h5>You can post your comments here...</h5>
              <div class="container">
            <form action="" method="POST">
            <div class="mb-3">
    <label for="name" class="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name..." value="<?php echo $name; ?>" required>
  </div>
  <div class="mb-3">
    <label for="email" class="email">Email Address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter your email..." value="<?php echo $email; ?>" required>
  </div>
  <div class="form-floating">
  <textarea class="form-control" name="comment" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required><?php echo $comment; ?></textarea>
  <label for="floatingTextarea2">Comments</label>
</div>
  <br>
  <div class="d-grid gap-2">
  <button type="submit" name="submit" class="btn btn-primary">Post Comment</button>
  </div>
</form>
</div>
<br>
  <div class="prev-comments">
          <?php

          $sql = "SELECT * FROM comments";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0){
              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="single-item">
                  <h5><?php echo $row['name']; ?><i class="bi bi-chat-dots-fill"></i></h5>
                  <a href="mailto:<?php echo $row['name']; ?>"><?php echo $row['email']; ?></a>
                  <p><?php echo $row['comment']; ?></p>
            </div>
            <?php
              }
          } 
          ?>
  </div>
  <br>
<br>
    </section>
<!-- forum section ends here -->

<!-- footer section starts here -->
          <section class="footer">
              <div class="credit">
              <p>Created by Team Capstone | all rights reserved.</p>
              </div>
          </section>
<!-- footer section ends here -->

<script src="script.js"></script>
</body>
</html>