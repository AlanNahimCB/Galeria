<?php include("connect/db.php"); ?>

<?php include('includes/header.php'); ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
		<h1>Subir una Planta</h1>
      		<div class="card card-body">
	<div>
		<div class="col-md-4 col-md-offset-4">
			<form>
				<p>
					<imput type="file" name="user-file">
				</p>
				<div class="helper-text">Elige una imagen jpg de maximo 600kb</div>
				<button type="submit" class="btn btn-default btn-block">Subir</button>
			</form>
			
		</div>	


	<?php include('includes/footer.php'); ?>