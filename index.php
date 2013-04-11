<html>
<HEAD>
<TITLE>Gestion del taller</TITLE>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel='stylesheet' href='estilos.css' type="text/css" />
</HEAD>
<BODY>

<!Cabecera>
<div id='header'>
<div align="center"><img src="../images/logox.gif" width="468" height="60"></div>
<h1><div align="center">Bienvenido a la Gestion del Taller</div></h1>
<br>
<div align="center">
<a href='index.php?go=0'>PAGINA PRINCIPAL</a><br>
CLIENTES: <a href='index.php?go=1'>A&ntilde;adir un Nuevo Cliente</a> | <a href="index.php?go=2">Actualizar un Cliente Existente</a> | <a href="index.php?go=3">Borrar un cliente</a> | <a href="index.php?go=4">Listado de Clientes</a><br>
PROVEEDORES: | <a href="index.php?go=5">A&ntilde;adir un Nuevo Proveedor</a> | <a href="index.php?go=6">Actualizar un Proveedor Existente</a> | <a href="index.php?go=7">Borrar un Proveedor</a> | <a href="index.php?go=8">Listado de Proveedores</a><br>
</div>
</div>
<p>-.-</p>
<!Principal>

		<div id='main'>
		
 <?php
switch ($_GET['go'])
{
 case 1:
	include('insertar_cliente.php');
	break;
 case 2:
	include('buscar_modifica.php');
	break;
 case 3:
	include('borrar1.php');
	break;
 case 4:
	include('lectura.php');
	break;
	case 5:
	include('insertar_proveedor.html');
	break;
	case 6:
	include('buscar_modifica_proveedor.php');
	break;
	case 7:
	include('borrar_proveedor1.php');
	break;
	case 8:
	include('lectura_proveedor.php');
	break;
	case 9:
	include('modifica_form.php');
	break;
	case 10:
	include('modifica_proveedor_form.php');
	break;
	case 11:
	include('modifica_ok.php');
	break;
	case 12:
	include('modifica_proveedor_ok.php');
	break;
	case 13:
	include('insertar.php');
	break;
	case 14:
	include('insertar_proveedor.php');
	break;
	case 15:
	include('borrar2.php');
	break;
	case 16:
	include('borrar_proveedor2.php');
	break;
 case 0:
default:
	include('inicio.php');
}
		?>
		
		</div>
<p>-.-</p>
<!Pie>

		<div id='footer'>
		
			<p></p><div align="center">Copyright &copy; 2004-2013 <a href="http://www.fortinux.com">Fortinux</a><br>
          Todos Los Derechos Reservados</div></p>
			
		</div>
</BODY>
</HTML> 
