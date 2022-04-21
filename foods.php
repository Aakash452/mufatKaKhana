<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
$username= $_SESSION["username"];
$_SESSION["price1"]= 20.00;
$_SESSION["price2"]= 19.00;
$_SESSION["price3"]= 18.00;
$_SESSION["price4"]= 16.00;
$_SESSION["food1"]= 'Marghetita';
$_SESSION["food2"]= 'Formaggio';
$_SESSION["food3"]= 'Meat Town';
$_SESSION["food4"]= 'Lasagna';
$showAlert=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // include 'db/dbconnect.php';
    // $query = "INSERT INTO `orders` (`username`, `price`, `food`) VALUES ('shifa', '106', 'pizza');";
    // $result = mysqli_query($conn, $query);
    $showAlert=true;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hii <?php echo $_SESSION["username"]?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
</head>

<body>
    <?php require('navbar.php'); ?>
    <?php require('chunks/carousal.php'); ?>
    <!-- desktop view -->
    <div class="container my-5">
        <!-- Menu -->
        <div id="menu" class="w3-container w3-black w3-xxlarge w3-padding-64">
            <h1 class="w3-center w3-jumbo w3-padding-32">THE MENU</h1>
            <div class="w3-row w3-center w3-border w3-border-dark-grey">
                <a href="#pizza">
                    <div class="w3-third w3-padding-large w3-red">Pizza</div>
                </a>
                <a href="#pasta">
                    <div class="w3-third w3-padding-large w3-hover-red">Pasta</div>
                </a>
                <a href="#starters">
                    <div class="w3-third w3-padding-large w3-hover-red">Starters</div>
                </a>
            </div>

            <div id="pizza" class="w3-container w3-white w3-padding-32">
                <h1><b><?php echo $_SESSION["food1"]?></b> <span class="w3-right w3-tag w3-dark-grey w3-round">$<?php echo $_SESSION["price1"]?></span></h1>
                <p class="w3-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                <form action="foods.php" onsubmit="addtocart()" method="post">
                <input  class="btn btn-success Margherita " value="Order Now" style="font-size: 28px; padding: 11px;" type="submit"/>
                </form>
                   
                </div> 
                    
                

                <hr>
                
                <h1><b><?php echo $_SESSION["food2"]?></b> <span class="w3-right w3-tag w3-dark-grey w3-round">$<?php echo $_SESSION["price2"]?></span></h1>
                <p class="w3-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                <form action="foods.php" method="post">
                <input class="btn btn-success Margherita " value="Order Now" style="font-size: 28px; padding: 11px;" type="button"/>
                </form>
                </div>
                <hr>

                <h1><b><?php echo $_SESSION["food3"]?></b> <span class="w3-tag w3-red w3-round">Hot!</span>
                    <span class="w3-right w3-tag w3-dark-grey w3-round">$<?php echo $_SESSION["price3"]?></span>
                </h1>
                <p class="w3-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button  onclick="addtocart()" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success ">Order Now
                    </button>
                </div>
            </div>

            <h1 id="pasta" class="w3-center w3-jumbo w3-padding-32">PASTA</h1>
            <div class="w3-container w3-white w3-padding-32">

                <h1><b><?php echo $_SESSION["food4"]?></b> <span class="w3-tag w3-grey w3-round">Popular</span>
                    <span class="w3-right w3-tag w3-dark-grey w3-round">$<?php echo $_SESSION["price4"]?></span>
                </h1>
                <p class="w3-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button onClick="generer(12.50)" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
                <hr>

                <h1><b>Ravioli</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$14.50</span></h1>
                <p class="w3-text-grey">Ravioli filled with cheese</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button onClick="generer(12.50)" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
                <hr>

                <h1><b>Spaghetti Classica</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$11.00</span></h1>
                <p class="w3-text-grey">Fresh tomatoes, onions, ground beef</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button id="btn1" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
            </div>

            <h1 id="starters" class="w3-center w3-jumbo w3-padding-32">STARTERS</h1>
            <div class="w3-container w3-white w3-padding-32">

                <h1><b>Today's Soup</b> <span class="w3-tag w3-grey w3-round">Seasonal</span>
                    <span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span>
                </h1>
                <p class="w3-text-grey">Ask the waiter</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button onClick="generer(12.50)" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
                <hr>

                <h1><b>Bruschetta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$8.50</span></h1>
                <p class="w3-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button onClick="generer(12.50)" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
                <hr>

                <h1><b>Garlic bread</b> <span class="w3-right w3-tag w3-dark-grey w3-round">34.00</span></h1>
                <p class="w3-text-grey">Grilled ciabatta, garlic butter, onions</p>
                <div class="button" style="display: flex; justify-content: flex-end;">
                    <button onClick="generer(12.50)" style="font-size: 28px; padding: 11px;" type="button"
                        class="btn btn-success Margherita ">Order Now
                    </button>
                </div>
            </div>
            
        </div>
        <!-- <h1 class="" style="text-align:center">Foods</h1>
        <hr>
        <section class="foods d-flex flex-wrap justify-content-center">
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="images/paneer/Matar-Paneer.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Paneer</h5>
                    <p class="card-text">Paneer tikka masala is a North Indian dish of grilled paneer (Indian cheese)
                        served in a spicy gravy known as Tikka masala.</p>
                    <a href="#" class="btn btn-primary">Add to Card</a>
                </div>
                
            </div>

        </section>
        <hr>

        -->


    </div>



    <?php require('footer.php'); ?>
    <script>
        const addtocart = (food)=>{
            
            '<?php include 'db/dbconnect.php';
            $username= "aakash";
    $query = "INSERT INTO `orders` (`username`, `price`, `food`) VALUES ('aakash', '106', 'pizza');";
    $result = mysqli_query($conn, $query);?>'
    alert('Order Placed!');
        }
    </script>
 
</body>

</html>

//    <!-- <div class="product">
//    <img src="<?php echo $row["image"]; ?>" class="img-responsive">
//                                 <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
//                                 <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
//                                 <input type="text" name="quantity" class="form-control" value="1">
//                                 <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
//                                 <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
//                                 <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
//                                        value="Add to Cart">
//                             </div> -->