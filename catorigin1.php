<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    device-width , iitial-scale=1.0">
    <title>Cat Shop</title>
    
    <link rel="stylesheet" href="style1.css">  
</head>
<body dir="rtl">

<?php

$countries =[
    ["name" => "Bangal </br> بنگال" ,  "img" => "catpic/BANGAL.jpg"],
    ["name" => "Birman </br> بیرمن" , "img" => "catpic/Birman.jfif"],
    ["name" => "British Short Hair </br> بریتیش شورت هیر" , "img" => "catpic/britishshorthair.jfif"],
    ["name" => "Himalayan </br> هیمالیایی" , "img" => "catpic/himalayan.jfif"],
    ["name" => "Mainecoon </br> مینکون" , "img" => "catpic/mainecoon.jfif"],
    ["name" => "Persian </br> پرشین" , "img" => "catpic/persian.jpg"],
    ["name" => "Ragdoll </br> رگدال " , "img" => "catpic/ragdoll.jpg"],
    ["name" => "Scottish Fold </br> اسکاتیش فولد" , "img" => "catpic/scottishfold.jpg"],
    ["name" => "Siamese </br> سیامی" , "img" => "catpic/Siamese.jpg"],
    ["name" => "Siberian </br> سیبریایی" , "img" => "catpic/siberian.jfif"],
];   
?>

<header>
<h1 class="typing">Cat Shop</h1> 
</header>

<div class="nav-bar">
<nav>
    <a her="#">صفحه اصلی</a>
    <a her="#">خرید غذای گربه</a>
    <a her="#">خرید گربه</a>
    <a hre="#">ارتباط با ما</a>
</nav>
</div>

<div  class="tip"><h2>< آشنایی با نژاد مختلف گربه ها ></h2></div>

<div class="box">

<div class="container">
 
<?php
foreach ($countries as $country ){
    echo '<div class="card">';
    echo '<img src="' . $country['img'] . '"alt="' . $country['name'] . '">';
    echo "</br>";
    echo "<h3>" . $country['name'] ."</h3>";
    echo "</div>";
}
?>
</div>

</br>
</br>


</div>
</body>
</html>