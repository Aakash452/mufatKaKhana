<?php

    session_start();
    include 'db/dbconnect.php';
    $username=$_SESSION['username'];
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $showAlert=TRUE;
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="Cart.php"</script>';
                echo '<script>alert("Product is already Added to Cart")</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Cart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Cart.php"</script>';
                }
            }
        }
    }
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PhoeixHub-Menu</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>

    <style>
    .product {
        border: 1px solid #eaeaec;
        margin: -1px 19px 3px -1px;
        padding: 10px;
        text-align: center;
        background-color: #efefef;
    }

    table,
    th,
    tr {
        text-align: center;
    }

    .title2 {
        text-align: center;
        color: #66afe9;
        background-color: #efefef;
        padding: 2%;
    }

    h2 {
        text-align: center;
        color: #66afe9;
        background-color: #efefef;
        padding: 2%;
    }

    table th {
        background-color: #efefef;
    }
    </style>
</head>

<body>
    <?php require('navbar.php');?>
    <div class="container">
    <h1 class="w3-center w3-jumbo w3-padding-32 w3-black">THE MENU</h1>
    </div>
   
    <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>
    <div class="container">
        <form method="post" action="Cart.php?action=add&id=<?php echo $row["id"]; ?>">

            

            <div id="pizza" class="w3-container w3-black w3-padding-32">
                <div class="image-container d-flex justify-content-center align-items-center">
                <img style="height:20em; width:20em;" src="<?php echo $row["image"]; ?>" class="img-responsive">
                </div>
            
                <h1><b><?php echo $row["pname"]; ?></b> <span
                        class="w3-right w3-tag w3-dark-grey w3-round">$<?php echo $row["price"]; ?></span></h1>
               
                <input style="width:3%;" type="text"  name="quantity" class="form-control" value="1">
                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                <input  type="submit" name="add" style="margin-top: 15px; font-size: 25px;" class="btn btn-success" value="Order Now">
            </div>
            <hr>
        </form>
    </div>



    <!-- Menu -->









    <?php
                }
            }
        ?>
 

    <div style="clear: both"></div>
    <div class="container">
    <h1 class="w3-center w3-jumbo w3-padding-32 w3-black">Order Details</h1>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
            <tr>
                <td><?php echo $value["item_name"]; ?></td>
                <td><?php echo $value["item_quantity"]; ?></td>
                <td>$ <?php echo $value["product_price"]; ?></td>
                <td>
                    $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                            class="text-danger">Remove Item</span></a></td>

            </tr>
            <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
            <tr>
                <td colspan="3" align="right">Total</td>
                <th align="right">$ <?php echo number_format($total, 2); ?></th>
                <td></td>
            </tr>
            <?php
                    }
                ?>
        </table>
    </div>
    </div>
    




</body>

</html>