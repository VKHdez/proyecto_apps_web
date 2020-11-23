<?PHP session_start();
	include("conexion.php");
//obtener los datos del formulario
  	$nombre=$_REQUEST['nombre'];
	$apellido=$_REQUEST['apellido'];
	$correo=$_REQUEST['correo'];
  	$contrasenia=$_REQUEST['contrasenia'];
	$tipo=3;
//mostrar datos
/*
  	echo "NOMBRE: $nombre <br>";
	echo "APELLIDO: $apellido <br>";
	echo "CORREO: $correo <br>";
	echo "contrasenia: $contrasenia <br>";
	echo "TIPO: $tipo <br>";
*/

//crear la conexion a la DB
	$link=Conectarse();
  	mysqli_select_db($link,"apuntesdb");
	//guardar el registro en la DB 
    mysqli_query($link,"insert into usuarios (nombre,apellido,correo,contrasenia, tipo) 
                   values ('$nombre','$apellido','$correo','$contrasenia',$tipo)");
	
?>