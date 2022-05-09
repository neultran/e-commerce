<html>
    <head>
        <title>Account Creation</title>
          <meta charset="UTF-8">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
          <script>
            function filledOut(){
              name = document.getElementById('name').value;
              last = document.getElementById('last').value;
              email = document.getElementById('email').value;
              password = document.getElementById('pass').value;
              bday = document.getElementById('bday').value;
              thereturn = true;

              if (name == "") {
                  document.getElementById('wrongname').innerHTML = "Plese enter your first name."
                  document.getElementById('name').style.borderColor = "red"
                  thereturn = false;
              }
              if (last == "") {
                  document.getElementById('wronglast').innerHTML = "Plese enter your last name."
                  document.getElementById('last').style.borderColor = "red"
                  thereturn = false;
              }
              if (email == "") {
                  document.getElementById('wrongemail').innerHTML = "Plese enter an email"
                  document.getElementById('email').style.borderColor = "red"
                  thereturn = false;
              }
              if (password == "") {
                document.getElementById('wrongpassword').innerHTML = "Please enter your password."
                  document.getElementById('pass').style.borderColor = "red"
                  thereturn = false;
              }
              if (bday == "") {
                  document.getElementById('wrongbday').innerHTML = "Plese enter your birthday"
                  document.getElementById('bday').style.borderColor = "red"
                  thereturn = false;
              }
              return thereturn
              respond("Return to the homepage and login!");
            }
          </script>
    </head>
    <body>
        <div class="container">
            <h2>Make an account with Navia's Bakery!</h2>
<hr>
<div id="wrongname"></div>
<div id="wronglast"></div>
<div id="wrongemail"></div>
<div id="wrongpassword"></div>
<div id="wrongbday"></div>

            <form action="newAcc.php" method="POST">
                <input type="text" name="formName" id="name" placeholder="Name">
                <input type="text" name="formLastName" id="last" placeholder="Last Name">
                <input type="email" name="formEmail" id="email" placeholder="e-mail">
                <input type="password" name="formPassword" id="pass" placeholder="Password">
                <input type="date" name="formBirthday" id="bday" placeholder="Birthday">
                <input style="border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer;" type="submit" name="Submit" onclick="return filledOut();">
            </form>
            <div id="info"></div>
            <button style="border: 0; padding: 10px; background: #7988df; color: #fff; font-size: 18px; cursor: pointer;"><a style="text-decoration:none; color:white;"href="index.php">Back to homepage</a></button>
        </div>
    </body>
</html>
