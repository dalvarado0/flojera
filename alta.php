<?php session_start(); 
//datos para establecer la conexion con la base de mysql.
require "cfg/conexion.php";

// verificamos si se han enviado ya las variables necesarias.
if (isset($_GET["nom"])) {
    $name = $_GET["nom"];
    $responsable = $_GET["res"];
    $telefono = $_GET["tel"];
    $email = $_GET["mail"];
    $tiempo = $_GET["tiempo"];
    $isdn = $_GET["isdn"];
    
    
    
    // Hay campos en blanco
    if($name==NULL|$responsable==NULL|$telefono==NULL|$email==NULL|$isdn==NULL) {
        echo "un campo est&aacute; vacio.";
        formRegistro();
    }else{
                                                                                   //INSERT INTO SALA_REMOTA (nombre, telefono, email_responsable, ip, issdn)
                $query = 'INSERT INTO SALA_REMOTA (nombre, responsable, telefono, email_responsable, isdn,tiempo) VALUES ("'.$name.'","'.$responsable.'","'.$telefono.'","'.$email.'","'.$isdn.'","'.$tiempo.'")';
                mysqli_query($conexion,$query) or die(mysqli_error($conexion));
                echo 'La sala '.$name.' ha sido registrada de manera satisfactoria.<br/>';
   header('Location: index.php');
            }
        }

?>