<!DOCTYPE html>
<html lang='es'>
    <head>
        <title>Instituto Zaidín Vergeles</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width'>
        <meta http-equiv='Pragma' content='no-cache'>
        <meta http-equiv='Expires' content='0'>
        <meta http-equiv='Last-Modified' content='0'>
        <meta http-equiv='Cache-Control' content='no-cache, mustrevalidate'>
        <link rel='shortcut icon' href='https://ieszaidinvergeles.org/favicon.ico?v=2' />
        <style>
            @import "{{url('/assets/css/MetroJs.css')}}";
            @import "{{url('/assets/css/estilos.css?vers=1.1')}}";
            @import "{{url('/assets/bootstrap/css/bootstrap.min.css')}}";
            @import "{{url('/assets/jqueryui/jquery-ui.min.css')}}";
            @yield('estilosAdicionales')
        </style>
    </head>
    <body>
        <div id="loading"></div>
        <div id="contenedor_principal">
            <div id="cabecera">
                <div id="logo" onclick="window.location = 'https://ieszaidinvergeles.org';"></div>
                <nav>
                    <div id="control_menu_principal"></div>
                    <div id="botonera_principal" style="display: block;">
                        <div id="boton1" onclick="window.location = 'https://ieszaidinvergeles.org';"><a href="https://ieszaidinvergeles.org">Inicio</a></div>
                        <div id="boton2" onclick="window.location = 'https://ieszaidinvergeles.org/el_centro.php';"><a href="https://ieszaidinvergeles.org/el_centro.php">El Centro</a></div>
                        <div id="boton3" onclick="window.location = 'https://ieszaidinvergeles.org/ensenanzas.php';"><a href="https://ieszaidinvergeles.org/ensenanzas.php">Enseñanzas</a></div>
                        <div id="boton4" onclick="window.location = 'https://ieszaidinvergeles.org/enlaces.php';"><a href="https://ieszaidinvergeles.org/enlaces.php">Enlaces</a></div>
                        <div id="boton5" onclick="window.location = 'https://ieszaidinvergeles.org/contacto.php';"><a href="https://ieszaidinvergeles.org/contacto.php">Contacta</a></div>
                        <div id="boton6" onclick="window.location = 'https://ieszaidinvergeles.org/blog';"><a href="https://ieszaidinvergeles.org/blog/" target="_blank">Noticias</a></div>
                        <div id="boton7" onclick="window.location = 'https://ieszaidinvergeles.org/acceso_prof.php';"><a href="https://ieszaidinvergeles.org/acceso_prof.php">Acceso Profesores</a></div>
                    </div>
                </nav>
            </div>
            <!-- -->
            @yield('contenido')
            <!-- -->
            <div id="sobre_pie"></div>
            <div id="pie">
                <footer>
                    <div class="splitter"></div>
                    <ul>
                        <li>
                            <div class = "icon" data-icon = "e"></div>
                            <div class="text">
                                <h4>Enseñanzas</h4>
                                <div class="lista">
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php?edu=eso#eso">ESO</a>
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php?edu=fpb#pcpi">FPB</a>
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php?edu=bach#bach">Bachillerato</a>
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php?edu=cf#cf">Ciclos Formativos</a>
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php?edu=adul#adul">Adultos</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class = "icon" data-icon = "c"></div>
                            <div class = "text">
                                <h4>Contacta</h4>
                                <div>
                                    <p>Avda.Primavera, 26-28 (18008) Granada</p>
                                    <p>958 89 38 50 - Tlf</p>
                                    <p>951 12 89 05 - Fax</p>
                                    <p>secretaria.ieszaidinvergeles@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class = "icon" data-icon = "e"></div>
                            <div class="text">
                                <h4>Enlaces</h4>
                                <div class="lista">
                                    <a href="https://ieszaidinvergeles.org/index.php">Inicio</a>
                                    <a href="https://ieszaidinvergeles.org/el_centro.php">El Centro</a>
                                    <a href="https://ieszaidinvergeles.org/ensenanzas.php">Enseñanzas</a>
                                    <a href="https://ieszaidinvergeles.org/enlaces.php">Enlaces</a>
                                    <a href="https://ieszaidinvergeles.org/contacto.php">Contacta</a>
                                    <a href="https://ieszaidinvergeles.org/blog/index.php">Noticias</a>
                                    <a href="https://ieszaidinvergeles.org/acceso_prof.php">Acceso Profesores</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="bar">
                        <div id="certificaciones">
                            <img src = "{{url('/assets/images/certificados_02.png')}}"           alt = "Logo de la junta de Andalucía" class ="junta"  />
                            <img src = "{{url('/assets/images/ministerio_educacionlogo.png')}}"  alt = "Logo del Ministerio de Educación" class="ministerio"/>
                            <img src = "{{url('/assets/images/Fondo_Social_Europeo.png')}}"      alt = "Logo de Fondo Social Europeo"/>
                            <img src = "{{url('/assets/images/certificados_04.png')}}"           alt = "Logo Aenor"/>
                            <img src = "{{url('/assets/images/certificados_06.png')}}"           alt = "Logo Cisco"/>
                            <img src = "{{url('/assets/images/certificados_08.png')}}"           alt = "Logo Erasmus"/>
                            <img src = "{{url('/assets/images/certificados_09.png')}}"           alt = "Logo Leonardo da Vinci"/>
                            <img src = "{{url('/assets/images/certificados_01.png')}}"           alt = "Logo Calidad Energética"/>
                            <img src = "{{url('/assets/images/andaluciasemueve.png')}}"          alt="Logo de Andalucía se mueve con Europa"/>
                        </div>
                        <div class = "bar-wrap">
                            <ul class="links">
                                <li><a href = "https://ieszaidinvergeles.org/">Inicio</a></li>
                                <li><a href="#">Licencia</a></li>
                                <li><a href = "https://ieszaidinvergeles.org/contacto.php">Contacto</a></li>
                                <li><a href="#">Info Extra</a></li>
                                <li><a href = "#">Diseño</a></li>
                            </ul>
                            <div class = "social">
                                <a href="http://www.juntadeandalucia.es/averroes/centros-tic/18700098/moodle/" class="fb">
                                    <span data-icon = "M" class = "icon"></span>
                                    <span class="info">
                                        <span class = "follow">Plataforma Moodle</span>
                                        <span class="num">+ info</span>
                                    </span>
                                </a>
                                <a href = "https://ieszaidinvergeles.org/blog/" class = "tw">
                                    <span data-icon="B" class="icon"></span>
                                    <span class = "info">
                                        <span class="follow">Noticias del Blog</span>
                                        <span class = "num">+ info</span>
                                    </span>
                                </a>
                                <a href="https://ieszaidinvergeles.org/blog/?feed=rss2" class="rss">
                                    <span data-icon = "R" class = "icon"></span>
                                    <span class="info">
                                        <span class = "follow">Suscríbete al RSS</span>
                                        <span class="num">+ info</span>
                                    </span>
                                </a>
                            </div>
                            <div class="clear"></div>
                            <div class = "copyright">IZV &copy; 2015 Todos los derechos reservados</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--<script type="text/javascript" src="{{url('/js/jquery11.js')}}"></script>-->
        <script type="text/javascript" src="{{url('/assets/js/jquery-3.4.1.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/MetroJs.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/jqueryui/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{url('/assets/js/scripts.js')}}"></script>
        <!-- -->
        @yield('scriptsAdicionales')
        <!-- -->
        <script type="text/javascript">
            // Control de visibilidad de la botonera principal de colores según la resolución (Evita que el fadeToggle haga desaparecer el menu en resoluciones altas)
            $(window).resize(function() {
                if ($(window).width() > 553)
                    $('#botonera_principal').css('display', 'block');
                else
                    $('#botonera_principal').css('display', 'none');
            });
            //Animación para hacer aparecer la botonera, cuando pulsamos el botón de menu en resolución móvil
            $(document).ready(function() {
                $("#control_menu_principal").click(function() {
                    $('#botonera_principal').fadeToggle("swing");
                });
            });
            function controlcookies() {
                // si variable no existe se crea (al clicar en Aceptar)
                localStorage.controlcookie = (localStorage.controlcookie || 0);
                localStorage.controlcookie++; // incrementamos cuenta de la cookie
                cookie1.style.display = 'none'; // Esconde la política de cookies
            }
        </script>
        <!-- Script para activar el slider y los botones metro -->
        <script type="text/javascript">
            //Poner los botones tipo metro en marcha cuando todos los elementos de la página ya estén disponibles
            $(".live-tile, .flip-list").not(".exclude").liveTile();
            function openBlog() {
                window.open("https://ieszaidinvergeles.org/blog/", "_blank");
            }
        </script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-57168876-2', 'auto');
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
        </script>
    </body>
</html>