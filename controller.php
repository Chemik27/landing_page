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
   
   if($result->num_rows > 0){
      echo "El email con el que se quiere registrar ya existe";
   }else{
      if($servicio=='OTRO')
         mysqli_query($link, "INSERT INTO usuario2 VALUES (null,'$nombre','$apellido','$telefono','$correoElectronico','$servicio')");
      else
         mysqli_query($link, "INSERT INTO usuario2 VALUES (null,'$nombre','$apellido','$telefono','$correoElectronico','$servicios')");
   }
   
   mysqli_close($link);

   ?>