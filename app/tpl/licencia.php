<div id="licencia-cont">
<div class="container-licencia">

<div class="menu"><div>≡</div> Menú</div>
<nav class="nav-juegos"><ul><a href="<?= APP_W.''; ?>"><li><img src="/M-master/pub/images/juegos.png" /><span>Juegos</span></li></a><a href="<?= APP_W.'cuentos'; ?>"><li><img src="/M-master/pub/images/cuentos.png" /><span>Cuentos</span></li></a><a href="<?= APP_W.'paint'; ?>"><li><img src="/M-master/pub/images/dibuja.png" /><span>Dibuja</span></li></a><a href="<?= APP_W.'emociones'; ?>"><li><img src="/M-master/pub/images/diccionario.png" /><span>Diccionario</span></li></a></ul></nav>

<div class="readcrumb"></div>

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
		<tr><td><label>Dirección:</label></td><td><input class="input-style" type="text" name="address"></td></tr>
		<tr><td><label>CP:</label></td><td><input class="input-style" type="text" name="cp"></td></tr>
		<tr><td><label>CIF:</label></td><td><input class="input-style" type="text" name="cif"></td></tr>
		<tr><td><label>Ciudad:</label></td><td><input class="input-style" type="text" name="city"></td></tr>
		<tr><td><label>Teléfono:</label></td><td><input class="input-style" type="text" name="phone"></td></tr>
		<tr><td><label>CC:</label></td><td><input class="input-style" type="text" name="cc"></td></tr>
		<tr><td><label>Num. Licencias</label></td><td><select name="licencia">
			<option value="10">10</option>
			<option value="50">50</option>
			<option value="100">100</option>
			<option value="500">500</option>
		</select></td></tr>
		<div id="terminos">
		<h3>Términos de uso</h3>
		Al comprar una licencia se actualiza tu registro sumándole el número de usuarios que compres al que ya tenias contratado así puedes ir ampliando según tu conveniencia sin necesidad de estar comprando diferentes licencias con un número fijo de usuarios.
		</div>
		<tr><td colspan="2" style="text-align:end;"><input type="submit" value="Enviar" id="enviar_licencia"></input></td></tr>
	    </table>
	</form>

	<div class="line"></div>';
}else{
	echo '<div id="carga-licencias"><applet archive="../M-master/tic/dist/tic.jar" code="AppletDiagonal.class" width=640 height=480>
	</applet></div>';
}

?>

</div>
</div>