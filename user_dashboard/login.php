<?php
include('config.php');
if(isset($_SESSION['login_user'])){
header("location: user.php");
}
?>
<!DOCTYPE html >
<html>
<head>
<title>User login</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="includes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style type="text/css">

span {
color:red
}
h2
{
text-align:center;
border-radius:10px 10px 0 0;
margin:-10px -40px;
padding:15px
}
hr
{
border:0;
border-bottom:1px solid;
margin:10px -40px;
margin-bottom:30px
}
#login
{
margin-bottom: 20px;
margin: auto;
margin-top: 20px;
width:450px;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
background-color:white;
}
body{
    background-color: #b6e6ff;
}
input[type=text],input[type=password]
{
width:96.5%;
padding:10px;
margin-top:8px;
border:1px solid #ccc;
padding-left:5px;
font-size:20px;
}
input[type=submit]
{
width:100%;
background-color:#2f90ff;
color:#fff;
border:2px solid #white;
padding:10px;
font-size:20px;
cursor:pointer;
border-radius:5px;
}

#logout
{
float:right;
padding:5px;
border:dashed 1px gray
}
a
{
text-decoration:none;
color:#6495ed
}
i
{
color:#6495ed
}
 
footer{
        border-top: 1px solid #0278BA;
        padding: 10px 0;
        width: 100%;
        text-align: center;
        margin: 30px 0 0;
        background-color: #ddd;
}
.navbar li:hover{
        background-color: silver;
    }  
ul li ul.dropdown{
        background: #f2f2f2;
        color: black;
        display: none;
        padding: 0px;
        position: absolute;
        z-index: 999;
       
    }
ul li:hover ul.dropdown{
        display: block; 
}
ul li ul.dropdown li{
        display: block;
}
</style>
      
</head>
<body style="">
<?php  
include 'includes/header.php';
?>
<div id="login">
<h2>User Login</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
<a href="reg.php">If not register then register from here</a>
<span><?php echo $error; ?></span>
</form>
</div>
<?php  
include 'includes/footer.php';
?>
</body>
</html>