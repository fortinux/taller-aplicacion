<div align="center">
<?
$matricula=$_POST['matricula'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$razon=$_POST['razon'];
$dni=$_POST['dni'];
$direccion=$_POST['direccion'];
$codigo=$_POST['codigo'];
$ciudad=$_POST['ciudad'];
$provincia=$_POST['provincia'];
$comunidad=$_POST['comunidad'];
$pais=$_POST['pais'];
$telefono=$_POST['telefono'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$web=$_POST['web'];
$observaciones=$_POST['observaciones'];
$link = mysql_connect("localhost", "motosvil_taller", "rep123--")
or die("Could not connect to database!");
mysql_select_db("motosvil_taller")
or die("Could not select database!");
$query = "insert into `bd_clientes`(`matricula`,`nombre`,`apellidos`,`razon`,`dni`,`direccion`,`codigo`,`ciudad`,`provincia`,`comunidad`,`pais`,`telefono`,`fax`,`email`,`web`,`observaciones`) values
('$matricula','$nombre','$apellidos','$razon','$dni','$direccion','$codigo','$ciudad','$provincia','$comunidad','$pais','$telefono','$fax','$email','$web','$observaciones')";
$result = mysql_query($query)
or die("Query failed:$query");
?>
<h1><div align="center">Cliente Agregado</div></h1>
</div>
