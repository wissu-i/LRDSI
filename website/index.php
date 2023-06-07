<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label> quantity: </label>
    <br>
    <input type="text" name="quantity">
    <input type="submit" value="total">
  </form>
</body>
</html>





<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post"> action is where to send the data
      <label> username: </label> <br>
      <input type="text" name ="username"> <br>
      <label> password: </label> <br>
      <input type="text" name ="password"> <br>
      <input type="submit" value="log in">
  </form>
</body>
</html>-->

<?php
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];

    $total = null;
    $total = %quantity * $price;

    echo"you have ordered {$quantity} x {$items}/s <br>";
    eco"your total is: \${$total}";




    //echo $_POST["username"] . "<br>"; //or "{$_GET["username"]} <br>"; for the line break
    //echo $_POST["password"] . "<br>";
    //$_GET = Data is appended to the url
    //        NOT SECURE
    //       char limit
    //       Bookmark is possible w/ values
    //       GET requests can be cached
    //       Better for a search page

    //$_POST Data is packaged inside the body of the HTTP request
    //            MORE SECURE
    //            No data limit
    //             Cannot bookmark
    //             GET requests are not cached
    //             Better for submitting credentials




    /*echo"i DESPISE moi <br>";
    echo"iam pathetic";
    //this is a comment
    another comment 

    //variables
    $name = "wiss uu";
    $food = "pizza";
    $email = "sucks125@gmail.com";

    $age = 21;

    $gpa = 2.5;
    $price = 9.55;
    $tax_rate = 100;

    $total = null; //instead of c = 0;


    echo"ayee {$name} <br>";
    echo"{$name} you like {$food} <br>";
    echo"your email is {$email} <br>";

    echo"you are {$age} years old <br>";

    echo"your gpa is {$gpa} <br>";
    echo"your pizza is \$ {$price} <br>";
    echo"your tax rate is {$tax_rate}% <br>";*/

    // x^2 is x**2


  ?>

