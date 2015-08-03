<?php

  $nombre = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "yamil@live.com";
  $subject = "TEDxTegucigalpa Contacto";
  $body = "Nombre: $nombre \nEmail: $email \nMensaje: $message";
  $headers = "From: contacto@tedxtegucigalpa.org";


  mail($to, $subject, $body, $headers);
?>

<!DOCTYPE html>
<html lang="es-419">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="TEDxTegucigalpa es una conferencia donde personas se reúnen a compartir ideas que vale la pena difundir." />
    <meta name="keywords" content="ted, tedx, tedxtegucigalpa, tegucigalpa, honduras, eventos, conferencias, conferencia, inspiracion, ideas, ciencia, tecnologia, diseño, entretenimiento" />
    <meta name="author" content="TEDxTegucigalpa" />
    <title>TEDxTegucigalpa 2015 — Ideas que inspiran ideas</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
  </head>

  <body>

    <header>
        <div class="menu">
            <img id="logo"src="tedxt/logotedxt.svg" width="230" alt="TEDxTegucigalpa">
            <nav>
                <ul>
                    <li><a href="http://tedxtegucigalpa.org">Inicio</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Acerca de TED</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Conferencistas</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Contacto</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Patrocinadores</a></li>
                </ul>
            </nav>
            <a href="https://twitter.com/TEDxTegucigalpa"><img class="bot" src="tedxt/tw.png"></a>
            <a href="https://www.facebook.com/TEDxTegucigalpa"><img class="bot" src="tedxt/fb.png"></a>
            <a href="https://instagram.com/tedxtegucigalpa/"><img class="bot" src="tedxt/in.png"></a>
            <a href="#" class="hide"><img class="bot" src="tedxt/yt.png"></a>
        </div>
    </header>

    <main>

        <div class="container">

        <div class="box" id="box1">
            <div class="unibox">
              <p class="centered">
                ¡Tu mensaje fue enviado exitosamente!
              </p>
              <p class="centered">
                Pronto un miembro de nuestro equipo te responderá. ¡Muchas gracias por contactarnos!
              </p>
            </div>
        </div>


    </main>

    <footer>
        <nav>
                <ul>
                    <li><a href="http://tedxtegucigalpa.org">Inicio</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Acerca de TED</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Conferencistas</a></li>
                    <li><a href="http://tedxtegucigalpa.org">Patrocinadores</a></li>
                </ul>
            </nav>

    </footer>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27439595-1', 'auto');
  ga('send', 'pageview');

</script>
    </body>

    </html>
