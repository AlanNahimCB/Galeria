<?php include("connect/db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">

      <!-- MESSAGES -->
      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- Agregar Usuario -->
      <div class="card card-body">
        <form action="guardarUsuario.php" method="POST">
          <div class="form-group">
            <input type="text" name="NomUsua" class="form-control" placeholder="Nombre de usuario" autofocus>
          </div>
          <div class="form-group">
            <input type="text"  name="password" class="form-control" placeholder="contraseña" autofocus>
          </div>
          <input type="submit" name="guardarUsuario" class="btn btn-success btn-block" value="Guardar Nuevo Usuario">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nick</th>
            <th>Tipo de Usuario</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM users";
          $result_Us = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_Us)) { ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['nick']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td>
              <a href="Edit.php?id=<?php echo $row['id']?>">
                Editar
              </a>
              <a href="Eliminar.php?id=<?php echo $row['id']?>">
                Eliminar
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
