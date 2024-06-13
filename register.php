<?php
  $conn = mysqli_connect('localhost', 'root', '', 'car');

  $full_name = $_POST['full_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $driver_f = $_POST['driver_f'];
  $password = $_POST['password'];
  $role = 1;

  $register_query = "INSERT INTO user (id_role, password, full_name, phone, email, driver_license) VALUES ('$role', '$password', '$full_name', '$phone', '$email', '$driver_f')";
  mysqli_query($conn, $register_query);
 
  header("Location: login.php");
?>