<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1159B7;">
    <img src="logo.jfif" height="80px" width="120px" alt="Logo not found" style="border-radius: 20px; margin-left: 20px;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand"style="font-size:32px; color: white; href="#">Water Supply</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ml-5">
                <li class="nav-item ">
                    <a class="nav-link ml-2 active"style="font-size:22px; color: white;" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li>
                    <a class="nav-link ml-2"style="font-size:22px; color: white;" href="#">Login</a>
                    <ul class="dropdown" style="list-style-type: none; background-color: #1159B7;">
                        <li class="nav-item">
                            <a class="nav-link ml-2"style="font-size:22px; color: white;" href="login.php">As User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-2"style="font-size:22px; color: white; " href="admin.php">As Admin</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2"style="font-size:22px; color: white;" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ml-2"style="font-size:22px; color: white;" href="contactus.php">Contact Us</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="login-panel">
            <li>
                 <div class="use" style="color: white;">
<li class='active' style='float:right;'>
  <?php 
  if(isset($_SESSION['login_user'])){
  if($_SESSION['logged']==true)
    { 
      echo $_SESSION['login_user'];
      echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
  elseif($_SESSION['logged']==false)
    {
      echo '<a href="reg.html"><span>Login/Register</span></a></li>';
    }
}
  ?>
</li>
</div>
</ul>
        </div>
    </li>
</ul>
</div>
</div>
</nav>
