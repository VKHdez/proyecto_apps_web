<?PHP session_start();
	include("conexion.php");
//obtener los datos del formulario
  	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
  	$contrasenia=$_POST['contrasenia'];
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
    mysqli_query($link,"insert into usuarios (nombre,apellido,correo,contrasenia, tipo) values ('$nombre','$apellido','$correo','$contrasenia',$tipo)");

    $_SESSION["usuario"] = $nombre;
    $_SESSION['tipo']    = $tipo;

    header('Location:indexAlumno.php')

?>