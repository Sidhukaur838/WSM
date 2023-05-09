<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style type="text/css">
        .navbar li:hover{
        background-color: silver
    }    
    .use{
  font-size: 20px;
  color: white;
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
<body>
    <?php  
include 'includes/header.php';
?>
<div class="w3-card-4" align="center" style="margin-top: 10px;">
  <img src="admin.jpg" alt="Alps" height="250px">
  <div class="w3-container w3-center">
    <h4>Company Background</h4>
  </div>
</div>
<div class="w3-card-4">

<header class="w3-container w3-blue">
  <h1 style="text-align: center;">Water Supply</h1>
</header>

<div class="w3-container" style="margin: 10px;">
  <p>We are a water supply company dedicated to providing safe, reliable, and sustainable water services to our customers. Our company has been operating for several years, and during this time, we have gained a reputation for delivering high-quality water to households, businesses, and communities.

Our team of skilled professionals works tirelessly to maintain and upgrade our water infrastructure, ensuring that our customers receive clean and safe drinking water. We are committed to using the latest technologies and techniques to ensure the efficiency and effectiveness of our operations.

Our company's mission is to provide affordable, accessible, and dependable water services to our customers while promoting sustainable water use and conservation. We strive to be a responsible corporate citizen and an active participant in the communities we serve.

We take great pride in our commitment to customer service, and we always aim to exceed our customers' expectations. Our company is dedicated to providing reliable, high-quality water services, and we are continuously working to improve and enhance our operations to meet the evolving needs of our customers.</p>
</div>

</div>
<?php  
include 'includes/footer.php';
?>
</body>
</html>
