<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


 <script src="home.js"></script>

<style>

/*********************** Demo - 1 *******************/
.box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s;}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
body{background-color:#f1f1f2}
.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}
.box1 .icon,.box1 .title{margin:0;position:absolute}
.box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative;margin-bottom:35px;max-height:261px;}
.box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
.box1:after{top:auto;bottom:0;transform-origin:0 100%}
.box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
.box1 img{height:auto;transform:scale(1) rotate(0)}
.box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
.box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
.box1:hover .title{opacity:1;transform:scale(1)}
.box1 .icon{padding:7px 5px;list-style:none;background:#004cbf;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
.box1:hover .icon{top:0}
.box1 .icon li{display:block;margin:10px 0}
.box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
.box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
@media only screen and (max-width:990px){.box1{margin-bottom:30px}
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: crimson;
  background-color:grey;
}
.navbar {
    width: 100% !important;
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
top:50px;
}

.navbar{
  padding: 0rem 25rem;
}

.navbar a {
 position: relative;
    left: -30%;

  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.carousel-inner{
margin-top: 10% !important;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 800px;
  position: relative;
  margin: auto;
  top:20%;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 6px;
  width: 30px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 0px;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
img{max-height:400px}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.carousel-indicators li{
width: 30px;
height: 6px;
margin: 2px;
border-radius: 0px;}

.carousel-indicators .active{
width: 30px;
height: 6px;
margin: 2px;
border-radius: 0px;}

img {
  float: left;
}

a {
color:white !important;
}


</style>
</head>
<body>

<?php $usn = $_GET['usn']; ?>
<img src="logo.jpg" alt="Trulli" width="100" height="100" style="margin-left: 60px">
<h2 style= " padding-top: 30px;float: inline-end;color: darkblue;">DAYANANDA SAGAR ACADEMY OF TECHNOLOGY AND MANAGEMENT</h2>
<?php $usn = $_GET['usn']; ?>

<div class="navbar" style="background-color:#001a66">
   <?php echo '<a href="home.php?usn='.$usn.'">HOME</a>'; ?>
   <?php echo '<a href="calofevents.php?usn='.$usn.'">CALENDAR OF EVENTS</a>'; ?>
   <?php echo '<a href="iamarks.php?usn='.$usn.'">IA MARKS</a>'; ?>
   <?php echo '<a href="faculty.php?usn='.$usn.'">FACULTY DETAILS</a>'; ?>
    <a href="https://dsatm.edu.in/index.php/about-dsatm">ABOUT</a>
    <a href="main.php" style="left: 30%;"><i class="fa fa-sign-out" aria-hidden="true">SIGN-OUT</i></a>

</div>

<div class="container" >

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
     <li data-target="#myCarousel" data-slide-to="3"></li>
     
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="margin-top:50px">
      <div class="item active">
        <img src="i1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="i2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="i3.jpg" alt="New york" style="width:100%;">
      </div>
    <div class="item">
        <img src="i4.jpg" alt="New york" style="width:100%;">
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<br>
<br>
<br>

       
        <div class="container">
            <div class="row mt-40">
                <div class="col-md-4 col-sm-6">
                    <div class="box1">
                       <a href="calofevents.php?usn=<?php echo $usn ?>"> <img src="clip1.jpg" alt=""></a>
                        <h3 class="title"><a href="calofevents.php?usn=<?php echo $usn ?>">CALENDAR OF EVENTS</a></h3>
                        <ul class="icon">
                        
                            <li><a href="calofevents.php?usn=<?php echo $usn ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box1">
                        <a href="iamarks.php?usn=<?php echo $usn ?>"><img src="clipp2.png" alt="" class="img-thumbn"></a>
                        <h3 class="title"><a href="iamarks.php?usn=<?php echo $usn ?>">IA MARKS</a></h3>
                        <ul class="icon">
                            
                            <li><a href="iamarks.php?usn=<?php echo $usn ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box1">
                        <a href="faculty.php?usn=<?php echo $usn ?>"><img src="clip33.jpg" alt=""></a>
                        <h3 class="title"><a href="faculty.php?usn=<?php echo $usn ?>">FACULTY INFORMATION</a></h3>
                        <ul class="icon">
                           
                            <li><a href="faculty.php?usn=<?php echo $usn ?>"><i class="fa fa-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>




</body>
</html>
