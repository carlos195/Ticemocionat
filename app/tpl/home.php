<div id="home-cont">
<div class="container-home">
    <div id="slider">
            <img id="slide-image" src="/M-master/pub/images/215245_5.jpg" />
        <div id="container-buttons">
            <div class="button-slider" id="button1"></div><div class="button-slider" id="button2"></div><div class="button-slider" id="button3"></div>
        </div>
    </div>

    <nav><ul><li><img src="/M-master/pub/images/juegos.png" /><a href="<?= APP_W.''; ?>">Juegos</a></li><li><img src="/M-master/pub/images/cuentos.png" /><a href="<?= APP_W.'cuentos'; ?>">Cuentos</a></li><li><img src="/M-master/pub/images/dibuja.png" /><a href="<?= APP_W.'paint'; ?>">Dibuja</a></li><li><img src="/M-master/pub/images/diccionario.png" /><a href="<?= APP_W.'emociones'; ?>">Diccionario</a></li></ul></nav>

    <div id="ultimos-juegos">
        <div class="title">
            <img class="log-section" src="/M-master/pub/images/ultimos.png" /><h1>Últimos juegos</h1>
        </div>
        <div class="juegos">
            <?php 
                if(isset($_SESSION['user']) == FALSE){
                    echo '<div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/memory.jpg" /><div class="text-game"><span>Memory</span></div></div>
                    <div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/relaciona.jpg" /><div class="text-game"><span>Relaciona</span></div></div>
                    <div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/comosiento.jpg" /><div class="text-game"><span>Como me siento</span></div></div>
                    <div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/puzzle_rabbit.jpg" /><div class="text-game"><span>Puzzle</span></div></div>
                    <div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/simpson.jpg" /><div class="text-game"><span>Simpson Atrapado</span></div></div>
                    <div class="item-juego"><img class="imagen-juego" src="/M-master/pub/images/bob.jpg" /><div class="text-game"><span>Bob el correcaminos</span></div></div>';
                }
            ?>
            <!--<div class="item-juego"><img src="/M-master/pub/images/215341_3.jpg" /><span>Memory</span></div>
            <div class="item-juego"><img src="/M-master/pub/images/215341_3.jpg" /><span>Memory</span></div>
            <div class="item-juego"><img src="/M-master/pub/images/215341_3.jpg" /><span>Memory</span></div>-->
        </div>
    </div>
    <?php 
            if(isset($_SESSION['user']) == TRUE){
                echo '<div id="top-jugados">
                        <div class="title">
                            <img class="log-section" src="/M-master/pub/images/trofeo.png" /><h1>Top jugadores</h1>
                        </div>
                        <div class="top-jugadores"></div>
                    </div>';
            }else{
                echo '<div id="link-licencia"><a href="/M-master/licencia"><div id="licencias">
                    <img src="/M-master/pub/images/licencias.jpg" /><div><span>TICEMOCIONAT APP</span></br><span>COMPRA YA TU LICENCIA PARA EMPEZAR A DISFRUTAR!</span></br><span>*A partir de 20 euros + IVA el grupo de licencias</span></div>
                </div></a></div>';
            }
    ?>
</div>
</div>