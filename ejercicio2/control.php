<?PHP

$distancia = $_GET ['distancia'];
$velocidad = $_GET['velocidad'];
$tiempo = $distancia / $velocidad;
echo "el tiempo que tardaras es". " $tiempo horas";

?><br>
<a href="velocidad.html">Atras</a>