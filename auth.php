<?php
  $conn = mysqli_connect('localhost', 'root', '', 'car');

  $email = $_POST['email'];
  $password = $_POST['password'];

  $login_query = "SELECT * FROM user WHERE email='$email'";
  $login_result = mysqli_query($conn, $login_query);

  if (mysqli_num_rows($login_result) == 1) {
    $user = mysqli_fetch_assoc($login_result);
   
    if ($user['password'] === $password) {
        setcookie("auth", $user['email'], time()+3600, "/"); 
        header("Location: index.php");
    } else {
      echo "Неверный пароль.";
    }
  } else {
    echo "Пользователь не найден.";
  }
?>