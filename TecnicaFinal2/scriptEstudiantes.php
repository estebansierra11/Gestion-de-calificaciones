
<?php
// Con el siguiente codigo obtuve los datos de los estudiantes y luego con una consulta sql
// agregue los datos a la base de datos

//$curl = curl_init();

//curl_setopt_array($curl, array(
//  CURLOPT_URL => 'http://consultas.cuc.edu.co/api/v1.0/estudiantes',
//  CURLOPT_RETURNTRANSFER => true,
//  CURLOPT_ENCODING => '',
//  CURLOPT_MAXREDIRS => 10,
//  CURLOPT_TIMEOUT => 0,
//  CURLOPT_FOLLOWLOCATION => true,
//  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//  CURLOPT_CUSTOMREQUEST => 'POST',
//  CURLOPT_POSTFIELDS =>'{
//"course": "21H17"
//}',
//  CURLOPT_HTTPHEADER => array(
  //  'Authorization: JWT eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VybmFtZSI6InBydWViYTIwMjJAY3VjLmVkdS5jbyIsImV4cCI6MTY0OTQ1MzA1NCwiY29ycmVvIjoicHJ1ZWJhMjAyMkBjdWMuZWR1LmNvIn0.MAoFJE2SBgHvp9BS9fyBmb2gZzD0BHGPiyKoAo_uYAQ',
  //  ': ',
  //  'Content-Type: application/json'
//  ),
//));

//$response = curl_exec($curl);
//if (!$response) {
//    die('Error al consumir la API: ' . curl_error($curl));
//}

//$data = json_decode($response);

//foreach ($data as $fila) {
//$consulta = "INSERT INTO `estudiante` (`Id`, `Nombre`, `Apellido`, `Curso`, `Correo`) VALUES ('" . $fila->id . "','" . $fila->names . "', '" . $fila->last_names . "', '" . $fila->course . "', '" . $fila->email . "');";


 //mysqli_query($conn, $consulta);
}

//curl_close($curl);

?>
