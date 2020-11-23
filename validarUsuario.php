<?PHP
	//Veirficar que e usuario este registrado y saber que tipo de usuario es.
	session_start();
	include("conexion.php");
  	$usuario=$_REQUEST['usuario'];//correo
  	$contrasenia=$_REQUEST['contrasenia'];
	echo"$usuario";
	echo"$contrasenia";

  	$link=Conectarse();
	mysqli_select_db($link,"apuntesdb");
	//buscar usuario en la BD
   	$result = mysqli_query($link,'SELECT contrasenia,nombre,tipo FROM usuarios WHERE correo=\''.$usuario.'\'');
   	if($row = mysqli_fetch_array($result))
      {
        if($row["contrasenia"] == $contrasenia)
           {
            $_SESSION["usuario"] = $row['nombre'];
            echo "Has sido logueado correctamente: ".$_SESSION['usuario'];
			//usuario tipo 3 es alumno
            if($row['tipo']==3) header("Location:indexAlumno.php");
            if($row['tipo']==2) header("Location:indexProfesor.php");
						if($row['tipo']==1) header("Location:indexAdministrador.php");
           }
        else  header("Location:errorPassword.php");
      }
   else  header("Location:errorLogin.php");

?>
