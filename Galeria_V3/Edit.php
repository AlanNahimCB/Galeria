<?php
include("connect/db.php");
$Nick = '';
$Password= '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM users WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $Nick = $row['Nick'];
    $Password = $row['password'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $Nick= $_POST['Nick'];
  $Password = $_POST['password'];

  $query = "UPDATE users set nick = '$Nick' , password = '$Password' WHERE id=$id";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Usuario Actualizado';
  $_SESSION['message_type'] = 'warning';
  header('Location: AdminUsers.php');
}

?>
<?php include('includes/header.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
      <form action="Edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="form-group">
          <input name="Nick" type="text" class="form-control" value="<?php echo $Nick; ?>" placeholder="Nuevo Nick">
        </div>
        <div class="form-group">
          <input name="password" type="text" class="form-control" value="<?php echo $Password; ?>" placeholder="nueva Contraseña">
        </div>
        <button class="btn btn-success" name="update">
          Actualiza
        </button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>
