<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CENG 388 Project</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Feedback System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="#feedback">Feedback</a>
        </li>
        </ul>
        <a href="index.php?logout='1'"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log out</button></a>
    </div>
    </nav>

    
     
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="335233.jpg" alt="welcome">
        <div class="carousel-caption d-none d-md-block">
            <h3>Welcome to CENG 388 Project Work</h3>
        </div>
        </div>
    </div>
    </div>



    <a id="feedback">
    <section class="my-4">

        <div class="py-4">
            <h2 class="text-center">Feedback Form</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="feedback.php" method="$_POST">
                <div class="form-group">
                    <label>Name :</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Surname :</label>
                    <input type="text" name="surname" class="form-control">
                </div>
                <div class="form-group">
                    <label>Student ID :</label>
                    <input type="number" name="student_id" class="form-control">
                </div>
                <div class="form-group">
                    <label>Your Feedback :</label>
                    <input style="height:200px; width:700px" type="text" name="message" class="form-control">
                </div>
                <br>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>

    </section>
    </a>

    
    <a id="about">
    <section class="my-4">
        <div class="py-4">
            <h2 class="text-center">About</h2>
            <h6 class="text-center">This website purpose is giving feedback about lesson during the education. Student should be first
                 registered to the system. Then, after logining to the page,student can give feedback about lesson.</h6>
        </div>
    </section>
    </a>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></script>
</body>
</html>