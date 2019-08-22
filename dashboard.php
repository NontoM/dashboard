<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="display.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="dashboard.js"></script>
    <title>Dashboard</title>
</head>
<body class="bg">

<div class="main-container">

  <nav class="navbar navbar-expand-lg navbar-light ">
  <img src="images/kodicon.png" alt="kodecolor-icon" class="img1">
  <a class="navbar-brand" href="#">Kodecolor</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li>
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="search">
    </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Find people <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="#">Messages <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="#">My Contacts <span class="sr-only">(current)</span></a>
      </li>

       <li class="nav-item active">
        <a class="nav-link" href="#">Find people <span class="sr-only">(current)</span></a>
      </li>



    </ul>
    
  </div>
</nav> 


<form method="post" action="logout.php" name="gymform" class="gymform">

<div class="container">
<div class="row">
<div class="col-med-5">
 <img src="images/dash.png" alt=""/>

<div class="experience">
<h1>WORK</h1>
<hr>
<div>
<p class="current-employer"><?php echo "" . $_SESSION['current-employer']; ?></p>
<p> <?php echo "" . $_SESSION['work-address']; ?></p>
</div>
<div>
<p class="previous-employer"><?php echo "" . $_SESSION['previous-employer']; ?></p>
<p> <?php echo "" . $_SESSION['pwork-address']; ?></p>
</div>
</div>

<div class="skills">
<h2>SKILLS</h2>
<hr>
<p class="skills"><?php echo "" . $_SESSION['skills']; ?></p>
</div>
</div>


<div class="container-1">
<h3><?php echo "" . $_SESSION['name']; ?> <span id="location"><i class="fas fa-map-marker-alt"></i> <?php echo "" . $_SESSION['location']; ?> </span><span id="bookmark"><i class="fas fa-bookmark"></i> <a href="" >Bookmark</a><span></span></h3>

<p class="designation"><?php echo "" . $_SESSION['designation']; ?></p>

<p class="proile-rating">RANKINGS <br> 
<span id="span-rank">8,6 <i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></span></p>

<button id="message"><i class="fas fa-comment-alt"></i> <a href="">Send Message</a> </button>
<button><i class="fas fa-check"></i> <a href="">Contacts</a></button>
<button class="report"><a href="">Report user</a></button>


<div>
<button id="timeline"><i class="fas fa-eye"></i> Timeline</button>
<button> <i class="fas fa-user-alt"></i> About</button>
</div>
<hr>


<div class="wrapper">
                            <h4>CONTACT INFORMATION</h4>
                                    <div>
                                        <label>Phone:</label><?php echo "" . $_SESSION['phone']; ?>
                                    </div>
                                        
                        
                                        <div>
                    
                                                <label>Address:</label>
                                            
                                            <?php echo "" . $_SESSION['home-address']; ?> 
                                            </div>
                                        

                                        <div>
                                            
                                                <label>E-mail:</label>
                                           
                                                 <?php echo "" . $_SESSION['email']; ?>
                                            </div>
                                       


                                         <div>
                        
                                                <label>Site:</label>
                                        

                                                <?php echo "" . $_SESSION['site']; ?>
                                            </div>
                                        </div>

                                        <div class="wrapper-2">
                                       <h5>BASIC INFORMATION</h5>
                                       </div>
                                        
                                            <div>
                                                <label>Birthday:</label>

                                                <?php echo "" . $_SESSION['dob']; ?>
                                            </div>
                                        
                                       <div>
                                            <label>Gender:</label>
                                            <?php echo "" . $_SESSION['gender']; ?> 
                                        </div>
                                        </div>
                                
</div>

</div>

<button class="logout"><a href="logout.php">Logout</a></button>

</form>

</div>



</body>

</html>