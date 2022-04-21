<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
  }
  else{
    $loggedin = false;
  }





echo '<nav style="background-color: #030303;" class="navbar sticky-top navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PhoenixHub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/RESTAURANTMANAGEMENT">Home</a>
                </li>';
            if($loggedin){
                echo'
                <li class="nav-item">
                    <a class="nav-link" href="/RESTAURANTMANAGEMENT/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/RESTAURANTMANAGEMENT/categories.php">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/RESTAURANTMANAGEMENT/Cart.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/RESTAURANTMANAGEMENT/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/RESTAURANTMANAGEMENT/logout.php">Log Out</a>
            </li>
           

                ';
            }
                if(!$loggedin){
                    echo '
                    <li class="nav-item">
                    <a class="nav-link" href="/restaurantManagement/signup.php">Signup</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/RESTAURANTMANAGEMENT/login.php">Login</a>
                </li>';
                }
               
               

          echo '  </ul>

        </div>
    </div>
</nav>';
