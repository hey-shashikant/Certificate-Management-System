<?php require('connection.php');?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/boxicons.min.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="../css/login.css">
    

    <title>Login Page</title>
</head>

<!-- <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50"> -->

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="../img/logo1.jpeg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Just for the alignment of the button towards the left -->
                <ul class="navbar-nav ms-auto">
                    
                </ul>

                <!-- <div class='sign-in-up'> -->
                    <!-- <button type='button' onclick="popup('login-popup')">LOGIN</button> -->
                    <!-- <button type='button' onclick="popup('register-popup')">REGISTER</button> -->
                  <!-- </div> -->
                <button class="btn btn-primary ms-lg-3" type='button' onclick="popup('login-popup')">User Login</button>
                <button class="btn btn-primary ms-lg-3" type='button' onclick="popup('register-popup')">Admin Login</button>

            </div>
        </div>
    </nav><!-- //NAVBAR ENDS HERE-->

    <div class="popup-container" id="login-popup">
        <div class="popup">
          <form method="POST" action="login_register.php">
            <h2>
              <span>USER LOGIN</span>
              <button type="reset" onclick="popup('login-popup')">X</button>
            </h2>
            <input type="text" placeholder="E-mail or Username" name="user_id">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" class="login-btn" name="user_login">LOGIN</button>
          </form>
        </div>
      </div>
    
      <div class="popup-container" id="register-popup">
        <div class="register popup">
            <form method="POST" action="login_register.php">
                <h2>
                  <span>ADMIN LOGIN</span>
                  <!-- <button type="reset" onclick="popup('login-popup')">X</button> -->
                  <button type="reset" onclick="popup('register-popup')">X</button>
                </h2>
                <input type="text" placeholder="E-mail or Username" name="admin_id">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" class="login-btn" name="admin_login">LOGIN</button>
              </form>
        </div>
      </div>


    <script src="../js/bootstrap.bundle.min.js"></script>


    <script>
        function popup(popup_name)
        {
          get_popup=document.getElementById(popup_name);
          if(get_popup.style.display=="flex")
          {
            get_popup.style.display="none";
          }
          else
          {
            get_popup.style.display="flex";
          }
        }
      </script>
</body>
</html>