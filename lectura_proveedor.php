<h1><div align="center">Listado de proveedores</h1>
<br>

<?
//Conexion con la base
mysql_connect("localhost","motosvil_taller","rep123--");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("motosvil_taller");

//Ejecutamos la sentencia SQL
$result=mysql_query("select * from bd_proveedores");
?>
<table align="center" border="1">
<tr>
<th>Nombre</th>
<th>Apellidos</th>
<th>Razon social</th>
<th>DNI/NIE</th>
<th>Direccion</th>
<th>Codigo Postal</th>
<th>Ciudad</th>
<th>Telefono</th>
<th>Fax</th>
<th>Observaciones</th>
</tr>
<?
//Mostramos los registros
while ($row=mysql_fetch_array($result))
{
echo '<tr><td>'.$row["nombre"].'</td>';
echo '<td>'.$row["apellidos"].'</td>';
echo '<td>'.$row["razon"].'</td>';
echo '<td>'.$row["dni"].'</td>';
echo '<td>'.$row["direccion"].'</td>';
echo '<td>'.$row["codigo"].'</td>';
echo '<td>'.$row["ciudad"].'</td>';
echo '<td>'.$row["telefono"].'</td>';
echo '<td>'.$row["fax"].'</td>';
echo '<td>'.$row["observaciones"].'</td></tr>';
}
mysql_free_result($result)
?>
</table>
</div>
