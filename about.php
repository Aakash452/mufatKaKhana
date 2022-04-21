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
    <style>
        html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
</head>
<body>
<?php require('navbar.php'); ?>
    <?php require('chunks/carousal.php'); ?>

    <div style=" padding: 50px;
    text-align: center;">
  <h1>About Us</h1>
  <hr>
  <div class="para">
      <p style="font-size: 20px;
    margin: 48px;">
      Swiggy is India’s leading on-demand delivery platform with a tech-first approach to logistics and a solution-first approach to consumer demands. With a presence in 500 cities across India, partnerships with hundreds of thousands of restaurants, an employee base of over 5000, a 2 lakh+ strong independent fleet of Delivery Executives, we deliver unparalleled convenience driven by continuous innovation.

Built on the back of robust ML technology and fuelled by terabytes of data processed every day, Swiggy offers a fast, seamless and reliable delivery experience for millions of customers across India.

From starting out as a hyperlocal food delivery service in 2014, to becoming a logistics hub of excellence today, our capabilities result not only in lightning-fast delivery for customers, but also in a productive and fulfilling experience for our employees.

With Swiggy’s New Supply and the recent launches of Swiggy Instamart, Swiggy Genie, and Health Hub, we are consistently making waves in the market, while continually growing the opportunities we offer our people.


*We are an equal opportunity employer and all qualified applicants will receive consideration for employment without regard to race, colour, religion, sex, disability status, or any other characteristic protected by the law.
      </p>
  </div>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://cdn.britannica.com/68/178268-050-5B4E7FB6/Tom-Cruise-2013.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Tom Cruise</h2>
        <p class="title">CEO & Founder</p>
        <p>homas Cruise Mapother IV (born July 3, 1962), better known by his stage name Tom Cruise, is an American actor and producer.</p>
        <p>tomcruise@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img style="height: 41.3em;" src="https://ssl.pstatic.net/mimgnews/image/016/2021/09/19/20210914000829_0_20210919141303914.jpg?type=w540" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Lisa</h2>
        <p class="title">Thai rapper</p>
        <p>Lalisa Manobal, known mononymously as Lisa, is a Thai rapper, singer and dancer based in South Korea.</p>
        <p>lalisablackpink@gmail.com</p>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img style="height: 41.3em;"  src="https://www.pinkvilla.com/imageresize/chris_future_thor.jpg?width=752&format=webp&t=pvorg" alt="John" style="width:100%">
      <div class="container">
        <h2>Chris Hemsworth</h2>
        <p class="title">Designer</p>
        <p>Chris Hemsworth AM is an Australian actor rose to prominence playing Kim Hyde in the Australian television series Home </p>
        <p>chrishemsworth@gmail.com</p>
        
      </div>
    </div>
  </div>
</div>


<?php require('footer.php'); ?>
</body>
</html>