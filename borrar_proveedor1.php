<div align="center">

<h1>Borrar un proveedor</h1>
<br>

<?
//Conexion con la base
mysql_connect("localhost","motosvil_taller","rep123--");

//selección de la base de datos con la que vamos a trabajar
mysql_select_db("motosvil_taller");

echo '<FORM METHOD="POST" ACTION="index.php?go=16">Nombre<br>';

//Creamos la sentencia SQL y la ejecutamos
$sSQL="Select nombre From bd_proveedores Order By nombre";
$result=mysql_query($sSQL);

echo '<select name="nombre">';

//Mostramos los registros en forma de menú desplegable
while ($row=mysql_fetch_array($result))
{echo '<option>'.$row["nombre"];}
mysql_free_result($result)
?>

</select>
<br>
<INPUT TYPE="SUBMIT" value="Borrar">
</FORM>
</div>

