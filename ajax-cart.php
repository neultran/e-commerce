<?php
// start session for cart
session_start();
if (!isset($_SESSION["cart"])) { $_SESSION["cart"] = []; }

function respond ($status=1, $msg="") {
  exit(json_encode(["status"=>$status, "msg"=>$msg]));
}

if (isset($_POST["req"])) { switch ($_POST["req"]) {
  default: respond(0, "Invalid Request");

  // add to cart
  case "add":
    $qty = &$_SESSION["cart"][$_POST["pid"]];
    if (isset($qty)) { $qty++; } else { $qty = 1; }
    if ($qty > 99) { $qty = 99; }
    respond();

  //change quandity
  case "set":
    $qty = &$_SESSION["cart"][$_POST["pid"]];
    $qty = $_POST["qty"];
    if ($qty > 99) { $qty = 99; }
    if ($qty <= 0) { unset($_SESSION["cart"][$_POST["pid"]]); }
    respond();

  // remove single item
  case "del":
    unset($_SESSION["cart"][$_POST["pid"]]);
    respond();

  // remove whole cart
  case "nuke":
    $_SESSION["cart"] = [];
    respond();

  // get all items in cart
  case "get":
    // empty cart
    if (count($_SESSION["cart"])==0) { respond(1, null); }

    // filter products
    require "products.php";
    $items = [];
    foreach ($_SESSION["cart"] as $pid=>$qty) {
      if (isset($products[$pid])) {
        $items[$pid] = $products[$pid];
        $items[$pid]["qty"] = $qty;
      } else { unset($_SESSION["cart"][$pid]); }
    }
    if (count($_SESSION["cart"])==0) { respond(1, null); }

    respond(1, $items);
}}
