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

    <div class="container my-5">
        <h1 class="centre" style="text-align:center;" > Categories</h1>
        <hr>

        <div class="d-flex">
            <div class="col">
                <div class="card">
                    <img src="https://5.imimg.com/data5/CH/IV/EP/SELLER-42933644/food-tiffin-services-near-me-500x500.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 10px;">
                        <h5 class="card-title">North Indian</h5>
                        <p class="card-text">This is a popular category of India. Explore the Foods of this category!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://www.thespruceeats.com/thmb/X6mg_2VBCQQ2X8VrLcPTf8_4ce0=/2733x2050/smart/filters:no_upscale()/chinese-take-out-472927590-57d31fff3df78c5833464e7b.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 10px;">
                        <h5 class="card-title">Chinese</h5>
                        <p class="card-text">This is a popular category of India. Explore the Foods of this category!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="data:image/jpeg;base64,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"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">South Indian</h5>
                        <p class="card-text">This is a popular category of India. Explore the Foods of this category!</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://i0.wp.com/www.live-less-ordinary.com/wp-content/uploads/2013/09/eating-himalayan-food-himalayas-cuisine-3.jpg?resize=380%2C274&ssl=1"
                        class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 0.85rem!important;">
                        <h5 class="card-title">Himalayan Food</h5>
                        <p class="card-text">This is a popular category of India. Explore the Foods of this category! </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F44%2F2020%2F07%2F07%2FGettyImages-1149135424.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body" style="margin-top: 0.85rem!important;">
                        <h5 class="card-title">Snacks</h5>
                        <p class="card-text">This is a popular category of India. Explore the Foods of this category!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require('footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>