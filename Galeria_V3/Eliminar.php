<?php

include("connect/db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM users WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Usuario Eliminado';
  $_SESSION['message_type'] = 'danger';
  header('Location: AdminUsers.php');
}

?>
