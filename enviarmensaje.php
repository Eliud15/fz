
<?php

 $mensaje=$_POST["mensaje"];

 $conectar=mysqli_connect("localhost","id19246385_mensajesusuario","RJ1nubs=rtj62~sg","id19246385_mensaje");
$mensaje=mysqli_real_escape_string($conectar,$mensaje);

$resultado=mysqli_query($conectar,'INSERT INTO mensajes2(mensaje) VALUES ("'.$mensaje.'")');

echo("<center><h1>Mensaje enviado</h1> </center>");
echo("<center><button class='btn'>Volver</button></center>");
?>

<script>

    
    location.href="https://ezonadeamigos.000webhostapp.com/"

</script>
