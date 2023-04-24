<?php
include("conexion.php");
$nota1 = '';
$nota2 = '';
$nota3= '';

if  (isset($_GET['Id'])) {
  $id = $_GET['Id'];
  $query = "SELECT * FROM nota WHERE Id_Estudiante=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nota1 = $row['Nota1'];
    $nota2 = $row['Nota2'];
    $nota3 = $row['Nota3'];
  }
}

if (isset($_POST['update'])) {
  $id = $_GET['Id'];
  $nota1= $_POST['Nota1'];
  $nota2 = $_POST['Nota2'];
  $nota3 = $_POST['Nota3'];

  $query = "UPDATE nota set Nota1 = '$nota1', Nota2 = '$nota2', Nota3 = '$nota3' WHERE Id_Estudiante=$id";
  mysqli_query($conn, $query);
  header('Location: redes.php');
}

?>
<?php include('cebecera.php'); ?>
<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto" >
      <div class="card card-body">
      <form action="formularioEditarRedes.php?Id=<?php echo $_GET['Id']; ?>" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Codigo de estudiante</label>

          <input type="text" class="form-control"  value="<?php echo $id;?>" disabled>

        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Nota 1:</label>
          <input name="Nota1" type="text" class="form-control" value="<?php echo $nota1; ?>" placeholder="Edita nota 3">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Nota 2:</label>

          <input name="Nota2" type="text" class="form-control" value="<?php echo $nota2; ?>" placeholder="Edita nota 2">
        </div>
        <br>
        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Nota 3:</label>

          <input name="Nota3" type="text" class="form-control" value="<?php echo $nota3; ?>" placeholder="Edita nota 3">
        </div>
        <br>
        <div class="text-center">
          <button type="submit" name="update" class="btn btn-primary">Actualizar</button>
          <a class="btn btn-dark" href="redes.php">Regresar</a>

  </button>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
