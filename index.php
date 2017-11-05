<?php
$servername = "db4free.net:3307";
$db_user = "curio";
$db_password = "curio1";
$username = "";
$password = "";
$email = "";
$conn = new mysqli($servername, $db_user, $db_password);
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    echo "<title>OFFLINE</title>";
} 
echo "<title>Curio</title>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // this is where we will recieve data from the sign up page
  echo "<p>Request via __POST recieved</p>";
}
?>
<html> 
<head>  
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{insert tagline here}">
    <meta name="author" content="Curio Team">
<!-- gotta import sum libraries -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style>
body {
  padding-top: 5rem;
}
.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}
a {
    color: #f8f9fa!important;
    }

/* visited link */
a:visited {
color: #f8f9fa!important;
    background-color: #17a2b8!important;
}

/* mouse over link */
a:hover {
color: #f8f9fa!important;
    background-color: #17a2b8!important;
}

/* selected link */
a:active {
color: #f8f9fa!important;
    background-color: #17a2b8!important;
}
.dropdown-menu {
    
        background-color: #17a2b8!important;
    }
.btn-outline-success {
    
    background-color: #f8f9fa!important;
    }

.btn-outline-success:hover {
    color: #28a745!important;
    
    }
  </style>
</head>
<body> 
<nav class="navbar navbar-expand-md navbar-info bg-info fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link align-middle" href="#"><h3>Curio</h3> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Notifications</a>
          </li>
          <li class="nav-item">
              <a class="nav-link align-middle" href="#">Profile</a>
          </li>
         
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Curio</h1>
        <p class="lead">Rise and shine! Here's your daily feed!</p>
      </div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Is math related to science?</h4>
          <p class="card-text"><b>Asked by:</b> Armaan Christ</p>
        <p class="card-text">Can you answer this question?</p>
        <a href="#" class="btn btn-primary">Answer</a>
      </div>
    </div>
  </div>
<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Henlo friends</h4>
          <p class="card-text"><b>Blog by:</b> Armaan Christ</p>
        <p class="card-text">party rock is in the hou- se tonight</p>
        <a href="#" class="btn btn-primary">View</a>
      </div>
    </div>
  </div>
</div>
    </main><!-- /.container -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
