<!DOCTYPE html>
<html>
  <head>
    <title>E-Commerce Site</title>
    <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="shop.css"/>
    <script src="cart.js"></script>
  
  </head>
  <body>
    <!-- <button style="border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer; display:inline-flex; margin-right:10px;"><a style="text-decoration:none; color:white;"href="newAcc.php">Sign Up</a></button> -->
    <button onclick="session_destroy();" style="border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer; display:inline-flex; margin-right:10px;"><a style="text-decoration:none; color:white;" href="index.php">Log Out</a></button>
    <!-- <button type="button" onclick="signup()" style="display: inline-flex; border: 0; margin-right:10px; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer; ">Sign Up</button> -->
    <!-- <button type="button" class="btn btn-outline-primary" onclick="login()" style="display: inline-flex; margin-right:10px; border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer;">Login</button> -->


    <div id="products"><?php
      require "products.php";
      foreach ($products as $pid=>$p) { ?>
      <div class="pCell">
        <div class="pTxt">
          <div class="pName"><?=$p["name"]?></div>
          <div class="pPrice">$<?=$p["price"]?></div>
        </div>
        <img class="pImg" src="images/<?=$p["image"]?>"/>
        <button class="pAdd" onclick="cart.add(<?=$pid?>)">
          Add To Cart
        </button>
      </div>
    <?php } ?></div>

    <!-- (B) CART -->
    <div id="cart"></div>
  </body>
</html>
