<?PHP
  session_start();
  $log=$_REQUEST['login'];//nombre usuario
  $pas=$_REQUEST['paswd'];//contrasenia usuario

  $link=mysqli_connect("localhost","root","");
  mysqli_select_db($link,"          "); //nombre de la DB

   $result = mysqli_query($link,'SELECT password,cliente,tipo FROM clientes WHERE cliente=\''.$log.'\'');//la consulta de la tabla____, la condicion
   if($row = mysqli_fetch_array($result))
      {
        if($row["password"] == $pas)
           {
              $_SESSION["usuario"] = $row['cliente'];
              echo "Has sido logueado correctamente: ".$_SESSION['usuario'];
              if($row['tipo']==1) header("Location:indexAdministrador.php");
              if($row['tipo']==2) header("Location:indexProfesor.php");
              if($row['tipo']==3) header("Location:indexAlumno.php");
           }
        else  header("Location:errorSesion.php");
      }
   else  header("Location:errorSesion.php");

?>
