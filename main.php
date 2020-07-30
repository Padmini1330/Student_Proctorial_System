<!DOCTYPE html>
<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #d0d0d0;
  color: black;
}

.topnav a.active {
  background-color: green;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: green;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  .topnav input[type=password] {
    border: 1px solid #ccc;  
  }
}
html { 
  background: url(img12.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.round2{
color:white;
text-shadow: 1px 1px wheat;
font-size: 4.3em;
padding-top: 65px;
font-weight: normal;
}

.round2:hover{
color:black;
}

#login{
margin-left: 10px;
height: 35px;

    background: green;
    color: white;
    margin-right: 20px;
    padding: 10px !important;
    border: 0px;
}
</style>
</head>
<body >


<div class="topnav">
  <a class="active" href="#home"><i class="fa fa-home" aria-hidden="true"></i>Main</a>
  <a href="https://dsatm.edu.in/index.php/about-dsatm">About</a>
  <div class="login-container">
    <form action="action.php" method="POST" class="login">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="psw">
		<input type="submit" id="login">
    </form>
  </div>
</div>

<div style="width: 50%;
padding: 20px;">
<h1 class="round2">STUDENT PROCTORIAL SYSTEM</h1>
</div>

</body>
</html>
