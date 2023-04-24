<?php include('cebecera.php')?>
<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <main class="container p-4">
      <div class="row">

        <div class="container py-3">

          <br>
          <h2 class="text-center">CALIFICACIONES DE ESTUDIANTES</h2>
          <br>
            <h4 class="text-center">(CALCULO VECTORIAL)</h4>
          <br>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">CORREO</th>
                <th scope="col">ASIGNATURA</th>
                <th scope="col">PERIODO</th>
                <th scope="col">MODALIDAD</th>
                <th scope="col">NOTA 1 (30%)</th>
                <th scope="col">NOTA 2 (30%)</th>
                <th scope="col">NOTA 3 (40%)</th>
                <th scope="col">TOTAL</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $query = "SELECT e.Id as Id, e.Nombre,e.Apellido, e.Correo, g.Nombre as asignatura,Id_Estudiante, g.Periodo, g.Modalidad, Nota1, Nota2, Nota3, ROUND((nota1*0.3 + nota2*0.3 + nota3*0.4), 2) as total FROM estudiante e, grupo g, nota a WHERE e.Id=a.Id_Estudiante AND g.Id=a.Id_Grupo AND g.Nombre='CALCULO VECTORIAL'";
              $resultado = mysqli_query($conn, $query);

              while($row = mysqli_fetch_assoc($resultado)) { ?>
              <tr>
                <td scope="row"><?php echo $row['Id'];?></td>
                <td><?php echo $row['Nombre'];?></td>
                <td><?php echo $row['Apellido'];?></td>
                <td><?php echo $row['Correo'];?></td>
                <td><?php echo $row['asignatura'];?></td>
                <td><?php echo $row['Periodo'];?></td>
                <td><?php echo $row['Modalidad'];?></td>
                <td><?php echo $row['Nota1'];?></td>
                <td><?php echo $row['Nota2'];?></td>
                <td><?php echo $row['Nota3'];?></td>
                <td><?php echo $row['total'];?></td>
                <td>
                  <a href="formularioEditarCalculo.php?Id=<?php echo $row['Id']?>" class="btn btn-warning">
                    Editar
                  </a>

                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>









  </body>
</html>
