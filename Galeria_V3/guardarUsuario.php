<?php

include('connect/db.php');

if (isset($_POST['guardarUsuario'])) {
  $NomUsua = $_POST['NomUsua'];
  $password = $_POST['password'];
  $query = "INSERT INTO users(nick,password) VALUES ('$NomUsua','$password')";
  $resul = mysqli_query($conn, $query);


  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  
  header('Location: AdminUsers.php');

}

?>
