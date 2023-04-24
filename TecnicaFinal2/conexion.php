<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'gestionnotas2'
) or die(mysqli_erro($mysqli));

?>
