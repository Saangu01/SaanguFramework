<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saangu´s Blog</title>
    <link rel="stylesheet" href="{{asset('css/PaginaPrincipal.css')}}">
</head>
{{-- ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⠤⠒⠊⠉⠀⢀⠴⠊⠉⠋⠙⢿⡖⠦⢤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡤⠊⠁⠀⠀⠀⠀⡠⠚⠁⠀⠀⠀⠀⠀⠀⠹⡄⠀⠈⠳⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⠔⠋⠀⠀⠀⠀⢀⡴⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢳⠀⠀⠀⠈⢳⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⡏⠀⠀⠀⠀⠀⢀⣾⠶⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠀⠀⠀⠀⠀⢻⣆⠀⠀⠀⢀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠠⡇⠀⠀⠀⢀⣴⢿⠁⠀⠈⠿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⡇⠀⠀⠀⠀⢸⣿⠀⢀⡴⠋⢣⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⢾⣧⣘⡀⠀⠀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣧⠀⠀⠀⠀⢸⣿⠖⠁⠀⠀⠀⢣⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢀⣇⠀⠀⠀⠀⠈⠉⠉⠉⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⣼⡇⠀⠀⠀⠀⠀⠀⢣⠀⠀⠀
⠀⠀⠀⣀⣤⣶⠟⠋⠓⠦⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⣦⣶⣿⠤⠖⠚⠉⠙⡆⠀⠀⠀⠀⠀⠀⠀⢣⠀⠀
⠀⢠⣾⣟⠁⠃⠀⠀⠀⠀⠀⠈⠉⠉⠓⠒⠒⠒⠒⠒⠒⠒⣶⡶⢿⠉⠉⠀⠈⢆⠀⠀⠀⠀⢳⠀⠀⠀⠀⠀⠀⠀⠀⢣⠀
⠀⠀⠙⣿⢿⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣴⡖⣻⡟⠀⢸⠀⠀⠀⠀⠈⡆⠀⠀⠀⢸⡀⠀⠀⠀⠀⠀⠀⠀⣨⠇
⠀⠀⠀⢹⡀⠀⠉⠉⡿⠲⣶⠒⠒⠒⣿⡏⠉⠁⠀⠀⠉⢉⡴⠒⢺⠀⠀⠀⠀⠀⢹⠀⠀⠀⣼⡇⠀⠀⠀⠀⠀⠀⣬⠃⠀
⠀⠀⠀⠀⠳⡀⠀⠀⢧⠀⡾⠀⠀⣀⣠⡀⠀⠀⠀⠀⠀⠸⣦⣀⣸⡇⠀⠀⠀⠀⠈⡆⠀⣰⣿⡇⠀⠀⠀⠀⢀⡴⠁⠀⠀
⠀⠀⠀⠀⠀⠱⡀⠀⠈⢯⡀⠀⠀⠀⠀⠈⠀⠀⠀⠀⠀⠀⠉⠛⠛⢳⠀⠀⠀⠀⠀⣷⣴⣿⣿⡇⠀⠀⠀⢀⡟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣱⡀⠀⠀⠑⣤⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⡄⠀⠀⠀⠀⣿⠛⠿⣿⡇⠀⠀⢠⡟⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣿⣿⢦⡀⢸⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠃⠀⠀⠀⠀⣹⠀⠀⠈⠁⠀⢠⠎⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠉⠁⠀⢙⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⡀⠀⠀⠀⣰⠋⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢀⡞⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⡟⢦⡀⠈⢣⠀⠀⠀⠀⠀⠀⠀⠀
⠀⣀⡀⠀⠀⣀⠤⠒⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢧⣴⣿⣷⠾⠃⠀⠀⠀⠀⠀⠀⠀
⡼⠟⠳⣀⠞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠟⠋⢁⣀⡀⢀⣀⡀⠀⠀⠀⠀
⡇⠀⡀⠱⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢰⠿⠟⠳⡀⠀⠀⠀⠀⠀⠀⢸⣤⡞⠉⠀⠀⠰⡟⠙⠳⣄⠀⠀
⢹⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⡄⠀⠀⢳⠀⠀⠀⠀⠀⢀⣼⣿⡿⠀⠀⠀⠀⠹⣄⠀⢹⣇⠀
⠘⡆⢰⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡇⠀⠀⠀⡇⠀⠀⠀⣠⣾⣿⣿⠇⠀⠀⠀⠀⢀⠈⠙⣿⣿⠀
⠀⠸⡄⢹⠆⢤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠀⠀⠀⢸⠀⠤⠊⢁⠟⣿⢿⣦⣀⣀⣾⣿⠟⣧⣴⠿⡯⠀
⠀⠀⠉⠉⠳⢄⡙⠢⠄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢆⠀⠀⢸⠀⢀⡠⠊⠀⠘⢦⣢⡈⠉⠻⢿⠿⠋⢀⠔⠁⠀
⠀⠀⠀⠀⠀⠀⠈⠙⠒⠒⠶⠒⠒⠒⠈⠉⠉⠉⠉⠉⠉⠒⠒⠪⠷⠒⠛⠊⠉⠀⠠⠄⠀⠤⣌⠛⠳⠦⠤⠴⠒⠁⠀⠀⠀ --}}
<body>
    
    <header>
        <h1>Saangus Blog</h1>
        <h2>Hola! Bienvenido a mi blog personal donde encontraras todo lo relacionado conmigo</h2>
        <a style="color: #FFFFFF;" href="Home">return</a>
        <a style="color: #FFFFFF;" href="">reset</a>
    </header>
<br>
    <section>
        <h2>Hola ahi!</h2>
        <p>Aqui puedes saber mas sobre mi desde como me llamo hasta que me gusta y todas esas cosas que describen las personas XD</p>
        <a class="Recuadro" href="about">Sobre Mi!</a>
    </section>
<br>
    <section>
        <h2>Dead By Daylight</h2>
        <p>Desde que empece a jugar dead by daylight me encanto, tanto que con mis asesinos favoritos te recomiendo una build con todos ellos para que puedas masomenos saber que hacer en una partida</p>
        <a class="Recuadro" href="dbd">Click!</a>
    </section>
<br>
    <section>
        <h2>Voala!</h2>
        <p>Aqui puedes saber que gustos musicales tengo y asi puedas conocerme mejor ya que todo el mundo se comunica con musica </p>
        <a class="Recuadro" href="music">Musica!</a>
    </section>
<br>

<footer>
    Todos los derechos reservados &copy; 2024<br>
    Desarrollado por: SKPEPS
</footer>
<br>
<br>
<br>
<br>
<br>
<br>
<p>PD: yo se que el diseño de la pagina no es muy bueno pero de todas formas sirve!</p>
</body>
</html>

