<div align="center">
<h1>Actualizar un proveedor</h1>
<br>
<form method="POST" action="index.php?go=10">
<pre>
Escribe el numero de ID para modificar datos: <input type="text" name="PID" size="7">
<input type="submit" value="Modificar"><input type="reset">
</pre>
</form>
<?
/* Change next two lines */
$db="motosvil_taller";
$link = mysql_connect('localhost', 'motosvil_taller', 'rep123--');
if (! $link)
die(mysql_error());
mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());
$result = mysql_query( "SELECT * FROM bd_proveedores" )
or die("SELECT Error: ".mysql_error());
$num_rows = mysql_num_rows($result);
print "En la base de datos hay $num_rows proveedores.<P>";
print "<table width=200 border=1>\n";
while ($get_info = mysql_fetch_row($result)){ 
print "<tr>\n";
foreach ($get_info as $field) 
print "\t<td>$field</td>\n";
print "</tr>\n";
}
print "</table>\n";
mysql_close($link);
?>
</div>
