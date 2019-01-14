<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>login</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!--<link href="/css/sb-admin-2.css" rel="stylesheet"> -->
 

</head>

<body>
<?php //session_start(); 
require "cfg/conexion.php";



   $query="select * from SALA_REMOTA";

   $resultado=mysqli_query($conexion,$query);
   echo "<div class='container'>";
   echo "<table class='table table-striped'>";
   echo "<th> Nombre de Sala</th> <th>Respondable de Sala</th> <th>Telefono</th> <th>E-Mail</th><th>ISDN</th><th>Tiempo</th><th>Editar</th> <th>Eliminar</th>";
   while ($dato=mysqli_fetch_array($resultado)) {
   
   echo "<tr>";  
   echo "<td>". $dato['nombre']."</td>";
   echo "<td>". $dato['responsable']."</td>";
   echo "<td>". $dato['telefono']."</td>";
   echo "<td>". $dato ['email_responsable']."</td>";
   //echo "<td>". $dato ['ip']."</td>";
   echo "<td>". $dato ['isdn']."</td>";
   echo "<td>". $dato ['tiempo']."</td>";
   echo "<td><a href='editarSala.php?id=". $dato ['id_sala_remota']."'>Editar</a></td>";
   echo "<td><a href='eliminarSala.php?id=". $dato ['id_sala_remota']."'>Eliminar</a></td>";
   echo "</tr>";
   }
   echo "</table>";
?>
   <button type="button" class="btn btn-success" onclick="window.location.href='sala_remota.html'">Angregar Sala</button>
   </div>
    <!-- jQuery -->
    <link href="/js/jquery.js"/>

    <!-- Bootstrap Core JavaScript -->
    <link href="/js/bootstrap.min.js"/>

    <!-- Metis Menu Plugin JavaScript -->
    <link href="/js/plugins/metisMenu/metisMenu.min.js"/>

    <!-- Custom Theme JavaScript -->
    <link href="/js/sb-admin-2.js"/>

</body>