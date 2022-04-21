<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
$totalPrice= 0;

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
  
    <style>

    </style>
</head>

<body>
    <?php require('navbar.php'); ?>
    <!-- desktop view -->
    <div class="container my-5">
        <!-- Menu -->
        <div id="menu" class="w3-container w3-black w3-xxlarge w3-padding-64">
            <h1 class="w3-center w3-jumbo w3-padding-32">Food Cart</h1>
            <div id="pizza" class="w3-container w3-white w3-padding-32">
                <h1><b>Margherita</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$20.00</span></h1>
                <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Remove
                    </button>
                </div>

                <hr>
                <section class="order d-flex flex-row justify-content-between" style="margin: 34px;">
                <div class="total">
                    <h1>Total</h1>
                </div>
                <div style="font-weight: bold; color: red;font-size: 48px;" class="price">
                    <span>$</span><?php echo $totalPrice?>

                </div>



            </section>
            <div class="d-flex justify-content-center">
                <form action="foods.php" method="post">
                    <input type="submit" value="Order Now" name="price" class="btn btn-outline-success" />
                </form>

            </div>
               

                
        </div>



       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        
        </script>
          
</body>

</html>