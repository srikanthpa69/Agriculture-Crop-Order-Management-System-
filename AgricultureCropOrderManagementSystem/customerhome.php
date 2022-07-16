<?php
session_start();
if(!(isset($_SESSION['userid'])))
{
  header('location:login&register.php');
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Customer Home</title>
    <link rel="stylesheet" href="st1.css">
    <link rel="stylesheet" href="CSS/farmerhome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background: url('images/img1.jpg');
background-repeat: no-repeat;
background-size: 100%;
background-attachment: fixed;">
    <nav class="navbar navcustom navbar-expand-lg navbar-dark bg-success ">
        <div class="container-fluid">
          <a class="navbar-brand custom" href="#" style="text-transform:uppercase;">Agriculture crop order Management System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active custom1" aria-current="page" href="index.php"><i class="fa fa-home" style="font-size:26px"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link custom1" href="login&register.php">Login/Signup</a>
              </li>
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> -->
              
              <li class="nav-item">
                  <a class="nav-link custom1" href="logout.php"><i class="fa fa-sign-out" style="font-size:22px"></i></a>
                </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- <--<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://images.unsplash.com/photo-1559884743-74a57598c6c7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGFncmljdWx0dXJlfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="img1">
            </div>
            <div class="carousel-item">
              <img src="https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8bWFya2V0fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item">
              <img src="..." class="d-block w-100" alt="img3">
            </div>
          </div>
        </div>-->
        <div class="div1">
          <div class="printusername">
            <h4 style="color: rgb(21, 139, 27);text-align:center;text-transform:uppercase;">Hello User&nbsp;<?php
            
            if(isset($_SESSION['userid']))
            {
              echo $_SESSION['userid'];
            }?></h4>

          </div>
        <div class="buttons">
        <!-- <button class="button" 
          onclick="window.location.href = 'MyInfo.html'">
              My Information
          </button> -->
          <button class="button" 
          onclick="window.location.href = 'customercropview.php'">
              Order Crops
          </button> <br>
          <button class="button" 
          onclick="window.location.href = 'customercroporders.php'">
              My orders
          </button> <br>
          
        </div>
      
      
      
        </div>
       
</body>
</html>