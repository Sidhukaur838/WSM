
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="includes/style.css">
	  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  <style type="text/css">
	 
.middle img{
	width: 100%;
	margin-top: 0px;
	left: 0;
	right: 0;
}
.card{
	margin-top: 40px;
	align-items: center;
	margin-right: 40px;
	margin-left: 40px;
	border: 2px solid black;
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

footer {
  height: 13%; /* adjust the height as necessary */
  position: relative;
  bottom: 0;
  border-top: 1px solid #0278BA;
  padding: 10px 0;
  width: 100%;
  text-align: center;
  margin: 30px 0 0;
  background-color: #ddd;
}

</style>
	  
</head>
<body>
    <?php  
include 'includes/header.php';
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " src="b.jpg"  height="400px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="a.jpg" height="400px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 " src="c.jpg" height="400px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon"  aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<h1 style="text-align: center; margin-top: 20px;margin-bottom: 20px; font-style: italic;"><b>Water Supply Management System</b></h1>
<div class="content" style="margin: 20px; font-size: 20px; border: 2px solid black; padding: 15px;"><h3 style="text-align: center; font-style: italic;">About Us</h3>Our company <b>D Water Supply</b> get water from a variety of locations after appropriate treatment, including groundwater (aquifers), surface water (lakes and rivers), and the sea through desalination. The water treatment steps include, in most cases, purification, disinfection through chlorination and sometimes fluoridation. Treated water then either flows by gravity or is pumped to reservoirs, which can be elevated such as water towers or on the ground (for indicators related to the efficiency of drinking water distribution see non-revenue water). Once water is used, wastewater is typically discharged in a sewer system and treated in a sewage treatment plant before being discharged into a river, lake or the sea or reused for landscaping, irrigation or industrial use. Water supply service quality has many dimensions: continuity; water quality; pressure; and the degree of responsiveness of service providers to customer complaints. Many people in developing countries receive a poor or very poor quality of service.<br>
<b>Drinking water quality </b>has a micro-biological and a physico-chemical dimension. There are thousands of parameters of water quality. In public water supply systems water should, at a minimum, be disinfected—most commonly through the use of chlorination or the use of ultra violet light—or it may need to undergo treatment, especially in the case of surface water. For more details, please see the separate entries on water quality, water treatment and drinking water.</div>
<h2 style="text-align: center;"><u><b>Our Products</b></u></h2>
	<div class="row">
	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'water');


	$query = " SELECT `name`, `image`, `price` FROM `product` order by id ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
		<div class="col-lg-6 col-md-6 col-sm-12">
			<form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase" style="border: 2px solid black;"> <?php echo
					 $product['name'];  ?>   </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['image'];  ?>" alt="phone" class="img-fluid mb-2" >
                     <h4>&pound; <?php echo $product['price'];  ?>  /Litre</h4>

					</div>
					<div class="btn-group d-flex">
						<a href="login.php" class="btn btn-success flex-fill" style="border: 2px solid black;"> Add to cart </a>
					</div>
                    

				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>


</div>
<br><br>

<?php  
include 'includes/footer.php';
?>

</body>
</html>