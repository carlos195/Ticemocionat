<div id="perfil-cont">
<div class="container-perfil">
  <nav class="nav-juegos"><ul><li><img src="/M-master/pub/images/juegos.png" /><a href="<?= APP_W.''; ?>">Juegos</a></li><li><img src="/M-master/pub/images/cuentos.png" /><a href="<?= APP_W.'cuentos'; ?>">Cuentos</a></li><li><img src="/M-master/pub/images/dibuja.png" /><a href="<?= APP_W.'paint'; ?>">Dibuja</a></li><li><img src="/M-master/pub/images/diccionario.png" /><a href="<?= APP_W.'emociones'; ?>">Diccionario</a></li></ul></nav>

  <h2>Perfil de usuario</h2>
      <hr />
      
      <div id="img_perfil"></div>
      <form action="../M-master/perfil/cambiarimg" method="post" enctype="multipart/form-data"> <!-- class="camb-form" -->
      <input type="hidden" name="MAX_FILE_SIZE" value="50000000">
    <input name="perfil" type="file"  onChange="ver(form.file.value)"> 
    <input name="submit" type="submit" value="Guardar">  
</form><br> <span id="image"></span> 
      
  <table class="tg">

  </table>
   <div id="fr"> <hr /></div>
</div>
</div>