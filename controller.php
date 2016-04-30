<?php
   $link = mysqli_connect("localhost", "root", "");
   mysqli_select_db($link, "prueba");
   $tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
 
   //Recoger datos que llegan
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $telefono=$_POST['telefono'];
   $correoElectronico=$_POST['correoElectronico'];
   $servicios=$_POST['servicios'];
   $servicio=$_POST['servicio'];

   $result = mysqli_query($link, "SELECT  correoElectronico FROM usuario2 WHERE correoElectronico = '$correoElectronico'");
   $error;

   if($result->num_rows > 0){
      $error = '1';
   }else{
      if($servicio=='OTRO'){
         $error = '2';
         mysqli_query($link, "INSERT INTO usuario2 VALUES (null,'$nombre','$apellido','$telefono','$correoElectronico','$servicio')");
      }
      else{
         $error = '2';
         mysqli_query($link, "INSERT INTO usuario2 VALUES (null,'$nombre','$apellido','$telefono','$correoElectronico','$servicios')");
      }
   }
   
   mysqli_close($link);
   header("Location: messages.php?error=".$error);
   ?>
