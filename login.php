<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <script>
        function loginFilled() {
              name = document.getElementById('myusername').value;
              password = document.getElementById('mypassword').value;
              thereturn = true;
              if (name == "") {
                  document.getElementById('wronguser').innerHTML = "Plese enter your username."
                  document.getElementById('myusername').style.borderColor = "red"
                  thereturn = false;
              }
              if (password == "") {
                document.getElementById('wrongpass').innerHTML = "Please enter your password."
                  document.getElementById('mypassword').style.borderColor = "red"
                  thereturn = false;
              }
              return thereturn
          }

        </script>
    </head>
    <body>

        <h2 style="text-align:center; margin-top:15px;">Login</h2>

          <div class="d-flex justify-content-center">
        <form class="" action="logincheck.php" method="post">
          <div id="wronguser"></div>
          <div id="wrongpass"></div>

          <!-- div for username -->
          <div class="row mb-3">
            <label style="margin-left: 4px;" for="myusername" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10 ">
          <input  type="username" id="myusername" name="formUsername" placeholder="">
        </div>
        </div>

<!-- div for password -->
        <div class="row mb-3">
          <label style="margin-left: 4px;" for="mypassword" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
          <input type="password" id="mypassword" name="formPassword" placeholder="">
        </div>
        </div>
          <input style=" border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer;" type="submit" name="Submit" onClick="return loginFilled();">
        </form>
      </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
