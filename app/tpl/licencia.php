<div id="licencia-cont">
<div class="container-licencia">

<nav class="nav-juegos"><ul><li><img src="/M-master/pub/images/juegos.png" /><a href="<?= APP_W.''; ?>">Juegos</a></li><li><img src="/M-master/pub/images/cuentos.png" /><a href="<?= APP_W.'cuentos'; ?>">Cuentos</a></li><li><img src="/M-master/pub/images/dibuja.png" /><a href="<?= APP_W.'paint'; ?>">Dibuja</a></li><li><img src="/M-master/pub/images/diccionario.png" /><a href="<?= APP_W.'emociones'; ?>">Diccionario</a></li></ul></nav>

<?php
	if(isset($_SESSION['user']) == FALSE){
	echo '<div id="compra">
	<ul>
	<li>Introducir datos</li>
	<li>Metodo de pago</li>
	<li>Confirmar</li>
	</ul>
	</div>

	<form class="licencia-form" method="POST">
		<table>
	    <tr><td><label>Nombre:</label></td><td><input class="input-style" type="text" name="name"></td></tr>
		<tr><td><label>Direccion:</label></td><td><input class="input-style" type="text" name="address"></td></tr>
		<tr><td><label>CP:</label></td><td><input class="input-style" type="text" name="cp"></td></tr>
		<tr><td><label>CIF:</label></td><td><input class="input-style" type="text" name="cif"></td></tr>
		<tr><td><label>Ciudad:</label></td><td><input class="input-style" type="text" name="city"></td></tr>
		<tr><td><label>Telefono:</label></td><td><input class="input-style" type="text" name="phone"></td></tr>
		<tr><td><label>CC:</label></td><td><input class="input-style" type="text" name="cc"></td></tr>
		<tr><td><label>Num. Licencias</label></td><td><select name="licencia">
			<option value="10">10</option>
			<option value="50">50</option>
			<option value="100">100</option>
			<option value="500">500</option>
		</select></td></tr>
		<tr><td colspan="2" style="text-align:end;"><input type="submit" value="Enviar" id="enviar_licencia"></input></td></tr>
	    </table>
	</form>

	<div class="line"></div>';
}else{
	echo '<div id="carga-licencias"><applet code="../M-master/tic/build/classes/Applet/AppletDiagonal.class" width=640 height=480></applet></div>';
}

?>

</div>
</div>