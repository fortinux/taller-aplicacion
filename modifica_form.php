<div align="center">
<?
$matricula=$_POST['matricula'];
$db="motosvil_taller";
$link = mysql_connect('localhost', 'motosvil_taller', 'rep123--');
if (! $link)
die("Couldn't connect to MySQL");

mysql_select_db($db , $link)
or die("Couldn't open $db: ".mysql_error());

$query=" SELECT * FROM bd_clientes WHERE matricula='$matricula'";
$result=mysql_query($query);
$num=mysql_num_rows($result);

$i=0;
while ($i < $num) {
$matricula=mysql_result($result,$i,"matricula");
$nombre=mysql_result($result,$i,"nombre");
$apellidos=mysql_result($result,$i,"apellidos");
$razon=mysql_result($result,$i,"razon");
$dni=mysql_result($result,$i,"dni");
$direccion=mysql_result($result,$i,"direccion");
$codigo=mysql_result($result,$i,"codigo");
$ciudad=mysql_result($result,$i,"ciudad");
$provincia=mysql_result($result,$i,"provincia");
$comunidad=mysql_result($result,$i,"comunidad");
$pais=mysql_result($result,$i,"pais");
$telefono=mysql_result($result,$i,"telefono");
$fax=mysql_result($result,$i,"fax");
$email=mysql_result($result,$i,"email");
$web=mysql_result($result,$i,"web");
$observaciones=mysql_result($result,$i,"observaciones");
?>
<table width="550" align="center" cellpadding="10" cellspacing="0" border="2">
<tr align="center" valign="top">
<td align="center" colspan="1" rowspan="1" bgcolor="#ff0000">
<h3>Modificar datos cliente</h3>
<form action="index.php?go=11" method="post">
<input type="hidden" name="ud_id" value="<? echo "$id" ?>">
Matricula: <br>   <input type="text" name="ud_matricula" value="<? echo "$matricula"?>"><br>
Name:  <br>  <input type="text" name="ud_name" value="<? echo "$nombre"?>"><br>
Apellidos:  <br>  <input type="text" name="ud_apellidos" value="<? echo "$apellidos"?>"><br>
Moto:  <br>  <input type="text" name="ud_razon" value="<? echo "$razon"?>"><br>
DNI/NIE:  <br>  <input type="text" name="ud_dni" value="<? echo "$dni"?>"><br>
Direccion:  <br>  <input type="text" name="ud_direccion" value="<? echo "$direccion"?>"><br>
Codigo Postal: <br>   <input type="text" name="ud_codigo" value="<? echo "$codigo"?>"><br>
Ciudad:  <br>  <input type="text" name="ud_ciudad" value="<? echo "$ciudad"?>"><br>
Provincia:  <br>  <input type="text" name="ud_provincia" value="<? echo "$provincia"?>"><br>
Comunidad: <br>   <input type="text" name="ud_comunidad" value="<? echo "$comunidad"?>"><br>
Pais: <br>   <input type="text" name="ud_pais" value="<? echo "$pais"?>"><br>
Telefono:  <br>  <input type="text" name="ud_telefono" value="<? echo "$telefono"?>"><br>
Fax: <br>   <input type="text" name="ud_fax" value="<? echo "$fax"?>"><br>
E-mail:  <br>  <input type="text" name="ud_email" value="<? echo "$email"?>"><br>
Sitio Web:  <br>  <input type="text" name="ud_web" value="<? echo "$web"?>"><br>
Observaciones:  <br>  <textarea name="ud_observaciones" cols="60" rows="20" > <? echo $observaciones;?></textarea><br>
<input type="Submit" value="Actualizar">
</form>
</td></tr></table>

<?
++$i;
}
?>
</div>
