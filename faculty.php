<?php
include_once 'test.php';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: crimson;
}

.box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
body{background-color:#f1f1f2}
.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}.box4{position:relative}
.box4:before{width:0;height:200%;background:rgba(0,0,0,.5);position:absolute;top:0;left:-250px;bottom:0;transform:skewX(-36deg);transition:all .5s ease 0s}
.box4:hover:before{width:200%}
.box4 img{width:100%;height:auto}
.box4 .box-content{width:100%;height:100%;padding-top:20%;position:absolute;top:0;left:0;transform:scale(0);transition:all .3s ease 0s}
.box4 .icon,.box5 .icon{list-style:none;padding:0}
.box4:hover .box-content{transform:scale(1)}
.box4 .title{font-size:22px;font-weight:700;color:#fff;margin:0 0 10px}
.box4 .post{display:block;font-size:15px;font-weight:600;color:#fff;margin-bottom:20px}
.box4 .icon{margin:0}
.box4 .icon li{display:inline-block}
.box4 .icon li a{display:block;width:35px;height:35px;line-height:35px;font-size:20px;background:#fff;color:#ee4266;margin-right:10px;transition:all .3s ease 0s}
.box5 .icon,.box5 .icon li{display:inline-block}
.box4{max-height:180px;}
@media only screen and (max-width:990px){.box4{margin-bottom:30px}
}
@media only screen and (max-width:767px){.box4:before{left:-400px}
.box4:hover:before{width:300%}
}



</style>
<body>
<?php $usn = $_GET['usn']; ?>

<div class="navbar" style="background-color:#001a66">
   <?php echo '<a href="home.php?usn='.$usn.'">HOME</a>'; ?>
   <?php echo '<a href="calofevents.php?usn='.$usn.'">CALENDAR OF EVENTS</a>'; ?>
   <?php echo '<a href="iamarks.php?usn='.$usn.'">IA MARKS</a>'; ?>
   <?php echo '<a href="faculty.php?usn='.$usn.'">FACULTY DETAILS</a>'; ?>
    <a href="https://dsatm.edu.in/index.php/about-dsatm">ABOUT</a>
    <a href="main.php" style="left: 30%;left:40%;position:relative"><i class="fa fa-sign-out" aria-hidden="true">SIGN-OUT</i></a>

</div>

<div class="container">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select dept
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="cse.php">CSE</a></li>
      <li><a href="ise.php">ISE</a></li>
      <li><a href="eee.php">EEE</a></li>
	  <li><a href="ece.php">ECE</a></li>
	  <li><a href="civ.php">CIV</a></li>
	  <li><a href="mec.php">ME</a></li>
    </ul>
  </div>
</div>

        <div class="container mt-40">
            <div class="row mt-30">
      <a href="cse.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4">
                       <img src="CS.jpeg">
                        <div class="box-content">
                            <h3 class="title">COMPUTER SCIENCE</h3>
                            <span class="post"></span>
                            
                        </div>
                    </div>
                </div></a>
                <a href="ise.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4">
                        <img src="IS.jpg">
                        <div class="box-content">
                            <h3 class="title">INFORMATION SCIENCE</h3>
                            <span class="post"></span>
                            
                        </div>
                    </div>
                </div>
                </a>
                <a href="eee.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4">
                        <img src="EEE.jpg">
                        <div class="box-content">
                            <h3 class="title">ELECTRICALS AND ELECTRONICS</h3>
                            <span class="post"></span>
                            
                        </div>
                    </div>
                </div>
                </a>
                <a href="ece.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4" style="margin-top:10%">
                        <img src="EC.jpg">
                        <div class="box-content">
                            <h3 class="title">ELECTRONICS AND COMMUNICATION</h3>
                            <span class="post"></span>
                         
                        </div>
                    </div>
                </div>
                </a>
                <a href="civ.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4" style="margin-top:10%">
                        <img src="CV.jpg">
                        <div class="box-content">
                            <h3 class="title">CIVIL</h3>
                            <span class="post"></span>
                            
                        </div>
                    </div>
                </div>
                </a>
                <a href="mec.php">
                <div class="col-md-4 col-sm-6">
                    <div class="box4" style="margin-top:10%">
                        <img src="ME.jpg">
                        <div class="box-content">
                            <h3 class="title">MECHANICAL</h3>
                            <span class="post"></span>
                         
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>

</body>
</html>
