<!DOCTYPE html>
<html>
	<head>
        <link rel="stylesheet" href="css/complementaria.css">
		<title>Ejercicio 1 Complementaria</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table class="table">
		<h1>Ejercicio 1 - Constantes Magicas</h1>
		<tr>
			<th>Constante Magica</th>
			<th>Descripción</th>
		</tr>
		<tr>
			<td>__LINE__</td>
			<td>El número de línea actual en el fichero.<br>Esta constante nos devuelve la linea exacta donde esta situada en el fichero, puede ser muy útil para trazar errores o crear logs en nuestras aplicaciones.</td>
		</tr>
        <tr>
			<td>__FILE__</td>
			<td>Nos devuelve la ruta completa y nombre del fichero con enlaces simbólicos resueltos. Si se usa dentro de un include, devolverá el nombre del fichero incluido.</td>
		</tr>
        <tr>
			<td>__DIR__</td>
			<td>Directorio del fichero. Si se utiliza dentro de un include, devolverá el directorio del fichero incluído. Esta constante es igual que dirname(__FILE__). El nombre del directorio no lleva la barra inicial a no ser que esté en el directorio root.
                <br>En resumen esta constante nos devuelve el nombre del directorio donde está incluido el script, y al igual que __LINE__ puede ser muy útil para trazar bugs.</td>
		</tr>
        <tr>
			<td>__FUNCTION__</td>
			<td>Nombre de la función.<br>Si la usamos dentro de una función nos devolverá el nombre del la función que la contiene.</td>
		</tr>
        <tr>
			<td>__CLASS__</td>
			<td>Nombre de la clase. El nombre de la clase incluye el namespace declarado en (p.e.j. Foo\Bar). 
             Tenga en cuenta que a partir de PHP 5.4 __CLASS__ también funciona con traits. 
            Cuando es usado en un método trait, __CLASS__ es el nombre de la clase del trait que está siendo utilizado.
             <br>Al igual que __FUNCTION__ nos devuelve el nombre de la clase donde esta declara.</td>
		</tr>
        <tr>
			<td>__TRAIT__</td>
			<td>El nombre de el trait. El nombre del trait incluye el namespace si alguno fue declarado en (p.e.j. Foo\Bar).
            <br>Esta constante devuelve el nombre del Trait donde fue declarada, y en caso de haber sido declarado un namespace también lo devuelve.</td>
		</tr>
        <tr>
			<td>__METHOD__</td>
			<td>Nombre del método de la clase.
            <br>Es la hermana gemela de __FUNCTION__ solo que enfocada a los métodos, su función es exactamente la misma, devolver el nombre del método que la contiene.</td>
		</tr>
        <tr>
			<td>__NAMESPACE__</td>
			<td>Nos devuelve el namespace donde está declarada.</td>
		</tr>
		</table>
	</body>
</html>
