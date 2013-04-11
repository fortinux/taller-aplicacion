<HTML>
<HEAD>
<TITLE>MOTOS VILAMUR</TITLE>
</HEAD>
<BODY>
<div align="center"><img src="../images/logox.gif" width="468" height="60"></div>
<h1><div align="center">Listado de clientes</div></h1>
<br>
<br>
<?
//Conexion con la base
mysql_connect("localhost","motosvil_taller","rep123--");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("motosvil_taller");

//Ejecutamos la sentencia SQL
$result=mysql_query("select * from bd_clientes where matricula = matricula");
?>
<table align="center" border="1">
<tr>
<th>Matricula</th>
<th>Nombre</th>
<th>Apellidos</th>
<th>Moto</th>
<th>DNI/NIE</th>
<th>Direccion</th>
<th>Codigo Postal</th>
<th>Ciudad</th>
<th>Provincia</th>
<th>Comunidad</th>
<th>Pais</th>
<th>Telefono</th>
<th>Fax</th>
<th>E-mail</th>
<th>Sitio Web</th>
<th>Observaciones</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["matricula"].'</td>';
echo '<td>'.$row["nombre"].'</td>';
echo '<td>'.$row["apellidos"].'</td>';
echo '<td>'.$row["razon"].'</td>';
echo '<td>'.$row["dni"].'</td>';
echo '<td>'.$row["direccion"].'</td>';
echo '<td>'.$row["codigo"].'</td>';
echo '<td>'.$row["ciudad"].'</td>';
echo '<td>'.$row["provincia"].'</td>';
echo '<td>'.$row["comunidad"].'</td>';
echo '<td>'.$row["pais"].'</td>';
echo '<td>'.$row["telefono"].'</td>';
echo '<td>'.$row["fax"].'</td>';
echo '<td>'.$row["email"].'</td>';
echo '<td>'.$row["web"].'</td>';
echo '<td>'.$row["observaciones"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>

<div align="center">
<a href="index.php">Pagina Principal - Buscar Cliente/Proveedor</a><br>
<a href="insertar.html">A&ntilde;adir un Nuevo Cliente</a> | <a href="insertar_proveedor.html">A&ntilde;adir un Nuevo Proveedor</a><br>
<a href="actualizar1.html">Actualizar un Cliente Existente</a> | <a href="actualizar_proveedor.php">Actualizar un Proveedor Existente</a><br>
<a href="borrar1.php">Borrar un cliente</a> | <a href="borrar_proveedor1.php">Borrar un Proveedor</a><br>
<a href="lectura.php">Listado de Clientes</a> | <a href="lectura_proveedor.php">Listado de Proveedores</a>
</div>

</BODY>
</HTML> 
