
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require('navbar.php'); ?>
    <?php require('chunks/carousal.php'); ?>
    <!-- desktop view -->
    <div class="container my-5">
       <section>
           <div class="heading">
               <h1 style="text-align:center">Contact Us</h1>
           </div>
           <hr>
           <div class="head2">
               <h3>Are You a Customer who needs help? That's what team Phoenix is for</h3>
               <p>If you’re wondering about an order, our products, or our website, shoot them an email at dheerajpanchal96@gmail.com or check out the Help & FAQs section—the answer might be there already!

You can also contact us via LiveChat. You'll find us in the bottom right hand corner of the screen when we're available to chat!</p>
                <h3>For everything else...</h3>     
                <p>Business + Partnerships: dheerajpanchal96@gmail.com</p>      
                <p>Press: press@glossier.com</p>      
                <p>Careers: Current openings here</p>      
                <p>HQ Address: 07 Priyanka bunglows, opp. lyf fitness gym, vastral, Ahmedabad 380316</p>      
</div>

       </section>


    </div>



    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>