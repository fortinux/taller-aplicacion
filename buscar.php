<html><head> 
<title>Buscando ...</title> 
</head><body><?php
// conectar al servidor
$server_link = mysql_connect("localhost", "motosvil_taller", "rep123--");
if(!$server_link){
    die("Fall&oacute; la Conexi&oacute;n ". mysql_error());
}
// seleccionamos la base de datos
$db_selected = mysql_select_db("motosvil_taller", $server_link);
if(!$db_selected){
    die("No se pudo seleccionar la Base de Datos ". mysql_error());
}
// varificamos que el formulario halla sido enviado
if(isset($_GET['buscar']) && $_GET['buscar'] == 'Buscar'){
    $frase = addslashes($_GET['frase']);
    // hacemos la consulta de busqueda
    $sqlBuscar = mysql_query("SELECT matricula, nombre, apellidos, razon, dni, direccion, codigo, ciudad, provincia, comunidad, pais, telefono, fax, email, web, observaciones,
                              MATCH (matricula, nombre, apellidos, razon, dni, direccion, codigo, ciudad, provincia, comunidad, pais, telefono, fax, email, web, observaciones)
                              AGAINST ('$frase' IN BOOLEAN MODE) AS coincidencias
                              FROM bd_clientes
                              WHERE MATCH (matricula, nombre, apellidos, razon, dni, direccion, codigo, ciudad, provincia, comunidad, pais, telefono, fax, email, web, observaciones)
                              AGAINST ('$frase' IN BOOLEAN MODE)
                              ORDER BY coincidencias DESC", $server_link)
                              or die(mysql_error());                              
    $totalRows = mysql_num_rows($sqlBuscar);
    // Enviamos un mensaje
    // indicando la cantidad de resultados ($totalRows)
    // para la frase busada ($frase)
    if(!empty($totalRows)){
        echo stripslashes("<p>Su b&uacute;squeda arroj&oacute; <strong>$totalRows</strong> resultados para <strong>$frase</strong></p>");        
        // mostramos los resultados
        while($row = mysql_fetch_array($sqlBuscar)){
//echo "<strong><a href='#'>$row[matricula]</a>:</strong> <em>Coincidencias: ". round($row['coincidencias']) ."</em><br />";
echo "<strong><a href='noti_detalle.php?matricula=$row[matricula]' target='_blank'>$row[matricula]</a>:</strong> <em>Coincidencias: ". round($row['coincidencias']) ."</em><br />";

            echo "<p>Matricula: ".substr(strip_tags($row['matricula']), 0, 255)."</p>";
            echo "<p>Nombre: ".substr(strip_tags($row['nombre']), 0, 255)."</p>";
            echo "<p>Apellidos: ".substr(strip_tags($row['apellidos']), 0, 255)."</p>";
            echo "<p>Razon social: ".substr(strip_tags($row['razon']), 0, 255)."</p>";
            echo "<p>DNI/NIE: ".substr(strip_tags($row['dni']), 0, 255)."</p>";
            echo "<p>Direccion: ".substr(strip_tags($row['direccion']), 0, 255)."</p>";
            echo "<p>Codigo Postal: ".substr(strip_tags($row['codigo']), 0, 255)."</p>";
            echo "<p>Ciudad: ".substr(strip_tags($row['ciudad']), 0, 255)."</p>";
            echo "<p>Provincia: ".substr(strip_tags($row['provincia']), 0, 255)."</p>";
            echo "<p>Telefono: ".substr(strip_tags($row['telefono']), 0, 255)."</p>";
            echo "<p>Fax: ".substr(strip_tags($row['fax']), 0, 255)."</p>";
            echo "<p>E-mail: ".substr(strip_tags($row['email']), 0, 255)."</p>";
            echo "<p>Sitio web: ".substr(strip_tags($row['web']), 0, 255)."</p>";
            echo "<p>Observaciones: ".substr(strip_tags($row['observaciones']), 0, 255)."</p>";
        }
    }
    // si se ha enviado vacio el formulario
    // mostramos un mensaje del tipo Oops...!
    elseif(empty($_GET['frase'])){
        echo "Debe introducir una palabra o frase.";
    }
    // si no hay resultados
    // otro mensaje del tipo Oops...!
    elseif($totalRows == 0){
        echo stripslashes("Su busqueda no arrojo resultados para <strong>$frase</strong>");
    }
}
?>
<h3><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Buscador </a></h3>
<form name="buscar" action="<?php $_SERVER['PHP_SELF'] ?>" method="get">Buscar: <input type="text" size="20" value="<?php echo $_GET['frase']; ?>" name="frase" />
<input type="submit" name="buscar" value="Buscar" />
</form></body></html>
