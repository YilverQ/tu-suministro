<? //Recepcion de datos
$apellido=$_POST['apellido'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$correo=$_POST['correo']; $asunto=$_POST['asunto'];
$consulta=$_POST['consulta'];
// Fin de recpcion de datos
// Accion de envio
//---------//
$para='tusuministro@hotmail.com';
$mensaje='
Mensaje de:
'.$apellido.', '.$nombre.'
Correo:
'.$correo.'
Asunto:
'.$asunto.'
Consulta:
'.$consulta.'
';
$desde='From: '.$correo.'tusuministro@hotmail.com';
ini_set(sendmail_from,'tusuministro@hotmail.com');
mail($para,$asunto,$mensaje,$desde);
echo'Mensaje envido con exito, muchas gracias';
?>