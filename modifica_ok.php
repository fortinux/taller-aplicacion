<div align="center">

<?
$ud_id=$_POST['ud_id'];
$ud_matricula=$_POST['ud_matricula'];
$ud_name=$_POST['ud_name'];
$ud_apellidos=$_POST['ud_apellidos'];
$ud_razon=$_POST['ud_razon'];
$ud_dni=$_POST['ud_dni'];
$ud_direccion=$_POST['ud_direccion'];
$ud_codigo=$_POST['ud_codigo'];
$ud_ciudad=$_POST['ud_ciudad'];
$ud_provincia=$_POST['ud_provincia'];
$ud_comunidad=$_POST['ud_comunidad'];
$ud_pais=$_POST['ud_pais'];
$ud_telefono=$_POST['ud_telefono'];
$ud_fax=$_POST['ud_fax'];
$ud_email=$_POST['ud_email'];
$ud_web=$_POST['ud_web'];
$ud_observaciones=$_POST['ud_observaciones'];
/* Change next two lines */
$db="motosvil_taller";
$link = mysql_connect('localhost', 'motosvil_taller', 'rep123--');
if (! $link)
die("Couldn't connect to MySQL");
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
mysql_query(" UPDATE bd_clientes  SET matricula='$ud_matricula' ,nombre='$ud_name' ,apellidos='$ud_apellidos' ,razon='$ud_razon' ,dni='$ud_dni' ,direccion='$ud_direccion' ,codigo='$ud_codigo' ,ciudad='$ud_ciudad' ,provincia='$ud_provincia' ,comunidad='$ud_comunidad' ,pais='$ud_pais' ,telefono='$ud_telefono' ,fax='$ud_fax' ,email='$ud_email' ,web='$ud_web' ,observaciones='$ud_observaciones' WHERE matricula='$ud_matricula'");
echo "Los datos del cliente han sido modificados ";
mysql_close($link);
?>
<form method="POST" action="index.php?go=2">
<input type="submit" value="Cambiar Otro Cliente">
</form><br>

<form method="POST" action="index.php">
<input type="submit" value="Pagina Principal">
</form>
</div>
