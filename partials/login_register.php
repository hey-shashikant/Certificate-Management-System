<?php
// session_start();

require('connection.php');
// for login

if(isset($_POST['login'])){
      $username = $_POST['email_username'];
      $user_exist_query = "SELECT * FROM `registered_users` WHERE username = '$username' ";
      $result = mysqli_query($con,$user_exist_query);
    //   $count = mysqli_num_rows($result);
    //   echo $count;
      if($result){
        // if(mysqli_num_rows($result) == 1){
            if(mysqli_num_rows($result) == 1){
            $result_fetch = mysqli_fetch_assoc($result);
            $pswd = $_POST['password'];
            $passwd = $result_fetch['password'];
            if($pswd == $passwd){
                echo "sahi hai password";
                // $_SESSION['logged_in']=true;
                // $_SESSION['username']=$result_fetch['username'];
                // header("location: index.php");
            }   
            else{
                echo"
                    <script>
                    alert('Incorrect Password.');
                    window.location.href='index.php';
                    </script>
                    ";
            }
        }
        else{
            echo"
                <script>
                alert('Hello Shashikant Email or Username not registered.');
                window.location.href='index.php';
                </script>
                ";
        }
      }
}

// for registration
if(isset($_POST['register'])){
    $username = $_POST['username'];
  	$email = $_POST['email'];
    $user_exist_query = "SELECT `full_name`, `username`, `email`, `password` FROM `registered_users` WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($con,$user_exist_query);
    if($result){
        if(mysqli_num_rows($result) >= 1){
            $result_fetch = mysqli_fetch_assoc($result);
            if($result_fetch['username'] == $_POST['username']){
                echo "
                <script>
                    alert(' $result_fetch[username] - Username already taken');
                    window.location.href='index.php';
                </script>
                ";
            }
            else{
                echo "
                <script>
                    alert(' $result_fetch[email] - E-mail already taken');
                    window.location.href='index.php';
                </script>
                ";
            }
        }
        else
            {
                // $pswd = $_POST['password'];
                // $password = password_hash($pswd,PASSWORD_BCRYPT);
            $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
            if(mysqli_query($con,$query)){
                echo "
                <script>
                    alert('Registration Successful');
                    window.location.href='index.php';
                </script>
                ";
            }
            else{
                echo "
                <script>
                    alert('Registration Failed.');
                    window.location.href='index.php';
                </script>
                ";
            }
        }
    }
   
    else{
        echo"
        <script>
        alert('Cannot run query');
        window.location.href='index.php';
        </script>
        ";
    }
}

?>
