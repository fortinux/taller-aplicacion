<div align="center">
<?
//Conexion con la base
mysql_connect("localhost","motosvil_taller","rep123--");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("motosvil_taller");

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Delete From bd_proveedores Where nombre='".$_POST['nombre']."'";
mysql_query($sSQL);
?>

<h1><div align="center">Proveedor Borrado</div></h1>
</div>
