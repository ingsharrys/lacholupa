<?php
include 'config.php';
//Si se quiere subir una imagen
if (isset($_POST['subir'])) {
   //Recogemos el archivo enviado por el formulario
   $refe = $_POST['posi'];
   $links = $_POST['enlace'];
   $archivo = $_FILES['archivo']['name'];
   //Si el archivo contiene algo y es diferente de vacio
   if (isset($archivo) && $archivo != "") {
      //Obtenemos algunos datos necesarios sobre el archivo
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
      //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        
        header("Location: banners.php?exito='Error. La extensión o el tamaño de los archivos no es correcta - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.'");
       // echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        //- Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        //Si la imagen es correcta en tamaño y tipo
        //Se intenta subir al servidor
        if (move_uploaded_file($temp, 'access/banner/'.$archivo)) {
            //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
            chmod('access/banner/'.$archivo, 0777);
            
            $sql = "INSERT INTO banner (name, posicion, link)
            VALUES ('$archivo', '$refe', '$links')";
    if ($connect->query($sql) === TRUE) {
        header("Location: banners.php?exito='Banner subido con exito'");
        //  echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
           
            //Mostramos el mensaje de que se ha subido co éxito
       //     header("Location:../miscompras.php?exito='ENVÍO DE SOPORTE DE PAGO EXITOSO, ESTAREMOS CONFIRMANDO Y ENVIANDO SU TICKET EN MAXIMO 24 HORAS'");
           // echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            //Mostramos la imagen subida
            echo '<p><img src="images/'.$archivo.'"></p>';
        }
        else {
           //Si no se ha podido subir la imagen, mostramos un mensaje de error
       //    header("Location:../miscompras.php?exito='ENVÍO DE SOPORTE CON ERRORES, INTENTAR DE NUEVO'");
           //echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
        }
      }
   }
}
?>