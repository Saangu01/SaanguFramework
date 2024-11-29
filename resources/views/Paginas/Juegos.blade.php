<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/RGV.css')}}">
    <link rel="icon" href="IMG/1732234196059.png" type="image/x-icon">
    <title>VideoGames.hmtl</title>
</head>
{{-- ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠿⠿⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠛⠉⠁⠀⠀⠀⠀⠈⠉⠛⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠁⠀⠀⠀⠀⠀⠀⠀⣀⣠⣤⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⢿⣿⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀⠀⠀⠀⠀⢠⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠿⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠿⠛⠋⠉⠀⠀⠀⠀⠉⠙⠻⠿⣿⡟⠀⠀⠀⠀⠀⠀⠀⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠛⠉⠀⠀⠀⠀⠀⠉⠙⠛⠿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣯⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣤⣶⣾⡄⠀⠀⠀⠀⠀⠀⣰⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣴⣶⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⢾⣿⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⣴⣿⣿⡿⠿⣿⣿⣿⣿⣿⣿⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⣶⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⣿⣿⡄⠀⠀⠼⠛⠉⠁⠀⠀⠀⠈⠙⠻⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⣶⡀⠀⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⢀⣤⣶⣾⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣧⡀⠀⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣿⣿⣿⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣄⠀⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻⣿⣿⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠀⠀⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⢠⠀⠀⠀⠀⠀⠀⠀⢻⣿⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⡄⠀⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⢸⣷⡀⠀⠀⠀⠀⠀⠀⢻⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⡇⠙⣿⣿⣿⣿⣿⣿⣿⣆⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⢸⣿⣷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⡇⠀⠈⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⢸⣿⣿⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⡇⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣧⠀⠀⠀⠀⠈⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣇⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣷⣄⠀⠀⠀⠀⠙⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣶⣤⣄⡀⠀⢸⣿⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣶⣦⣤⣀⡀⠻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣾⣿⣿⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣆⠀⠀⠀⠀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣤⣀⡀⠀⠀⠀⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣷⣦⣤⣸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿ --}}
<body>
    <div class="marquee">
        <span id="song-name">♪ SAINT PEPSI - Cherry Pepsi - Artzie Music ♪</span>
    </div>
    <audio src="audio/SAINT PEPSI - Cherry Pepsi - Artzie Music (youtube).mp3" autoplay loop></audio>
    <img id="dvd-image" src="https://64.media.tumblr.com/tumblr_ma5waeRMf81r03eaxo1_r1_1280.gif" alt="Logo rebotando">
    <section class="titulo" style="position: absolute; top:125px; left: 50px;">
        <h1>Retro VideoGames</h1>
    </section>

    <section class="info" style="position: absolute; top:256px; left: 50px; text-align: center; ">
        <h1>Super Mario 64</h1>
        <img src="IMG/Covers/SM64-Cover.jpg" alt="SM64-Cover" style=" top:350px; left:80px; width:250px; height:200px; border:0 4px #000; padding:10px;">
        <img src="https://www.copetti.org/images/consoles/nintendo64/international.9e449590112030a45a7b53a7625f2ef6691615ca5561fdd4bbc0fe75eb64742a_hu16506699488210059363.webp" style="color:#FFFFFF; position: absolute; top:350px; left:400px; width:700px; height:350px;" alt="N64-Console">
        <h1 style="color: #FFFFFF; text-align:left">Videojuego de plataformas desarrollado y publicado por Nintendo para la consola Nintendo 64. Salió a la venta en Japón y Norteamérica en 1996, y en las regiones PAL en 1997.</h1>
    </section>
    
    <section class="info" style="position: absolute; top:1000px; left: 50px; text-align: center;">
        <h1>Castlevania:SOTN</h1>
        <img src="IMG/Covers/Castlevania SOTN-Cover.png" alt="SOTN-Cover" style=" top:350px; left:80px; width:255px; height:205px; border:0 4px #000; padding:10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/PSX-Console-wController.png/1920px-PSX-Console-wController.png" style="color:#FFFFFF; position: absolute; top:350px; left:525px; width:700px; height:350px;" alt="PS1-Console">
        <h1 style="color: #FFFFFF; text-align:left">Castlevania SONT es un videojuego de acción-aventura de gráficos 2D desarrollado y publicado por Konami en el año 1997. Es el XIII episodio de las series de Castlevania, siendo este el primero lanzado para las consolas PlayStation y Saturn.</h1>
    </section>

    <section class="info" style="position: absolute; top:1744px; left: 50px; text-align: center;">
        <h1>DOOM</h1>
        <img src="IMG/Covers/DOOM-Cover.jpg" alt="DOOM-Cover" style=" top:350px; left:80px; width:250px; height:300px; border:0 4px #000; padding:10px;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6f/Personal_System_2_Series_of_Computers.png" style="color:#FFFFFF; position: absolute; top:350px; left:705px; width:700px; height:400px;" alt="90s PC">
        <h1 style="color: #FFFFFF; text-align:left">Doom es un videojuego de disparos en primera persona desarrollado y publicado por id Software. Lanzado el 10 de diciembre de 1993 para DOS, es la primera entrega de la franquicia Doom.</h1>
    </section>

    <section class="info" style="position: absolute; top:2688px; left: 50px; text-align: center;">
        <h1>Contra</h1>
        <img src="IMG/Covers/Contra-Cover.jpg" alt="Contra-Cover" style=" top:350px; left:80px; width:250px; height:300px; border:0 4px #000; padding:10px;">
        <img src="https://www.copetti.org/images/consoles/nes/international.2260a04d73e81185a57694fffab4548ad5682f9db806f3620060487d455bef4d.png" style=" color:#FFFFFF; position: absolute; top:360px; left:705px; width:600px; height:300px;" alt="Nintendo Entertainment System-Console">
        <h1 style="color: #FFFFFF; text-align:left">Contra es un videojuego de matamarcianos desarrollado y publicado por Konami, lanzado originalmente como un juego de arcade el 20 de febrero de 1987.3​ En 1988 se lanzó una versión doméstica para Nintendo Entertainment System, junto con puertos para varios formatos de computadora, incluido el MSX2.</h1>
    </section>

    <section class="info" style="position: absolute; top:3587px; left: 50px; text-align: center;">
        <h1>Dragon Lair</h1>
        <img src="IMG/Covers/Dragons Lair-Cover.jpg" alt="Dragons-Lair-Cover" style=" top:350px; left:80px; width:250px; height:350px; border:0 4px #000; padding:10px;">
        <img src="IMG/28bcbb2c-764b-45bf-b591-599312c6351d (1).png" style="color:#FFFFFF; position: absolute; top:350px; left:785px; width:300px; height:500px;" alt="DL-Arcade">
        <h1 style="color: #FFFFFF; text-align:left">Dragon's Lair es un videojuego de laserdisc publicado por Cinematronics en 1983. Contó con la animación creada por el ex animador de Disney Don Bluth. La única edición lanzada en Japón es en Sega CD.</h1>
    </section>
    <a href="Home" style="color:#FFFFFF; top:65px; white-space: nowrap; position: fixed; left:20px;">return</a>
    <a href="" style="color:#FFFFFF; top:40px; white-space: nowrap; position: fixed; left:20px;">reset</a>

    {{-- -Start VideoGamesGallery --}}
    
    <a href="https://www.windows93.net/" style="color: blue; font-size:4px;">f</a>
    <img src="https://i.kinja-img.com/image/upload/c_fit,q_60,w_645/6bccc0ffbed1a9ccc45112da28c2b1b8.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1150px; top:246px;" alt="cap-1">
    <img src="https://miro.medium.com/v2/resize:fit:1400/1*rgu2gljl0ris_SSKX-3NCw.png" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1350px; top:566px;" alt="cap-2">
    <img src="https://www.dsogaming.com/wp-content/uploads/2024/04/Super-Mario-64-ReRendered-screenshots-3.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:710px; top:66px;" alt="cap-3">
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a0/SotNGameplay.jpg/220px-SotNGameplay.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:910px; top:976px;" alt="cap-4">
    <img src="https://www.cultofmac.com/wp-content/uploads/2020/03/Castlevania-Symphony-of-the-Night.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1310px; top:1076px;" alt="cap-5">
    <img src="https://preview.redd.it/castlevania-sotn-mobile-map-completion-200-5-v0-dk61w4wsh3ub1.jpg?width=640&crop=smart&auto=webp&s=dfb26cd09b9d7d2b33c6ca6c8e716d0c9052d27e" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1199px; top:1376px;" alt="cap-6">
    <img src="https://cdn.britannica.com/67/138367-004-08EABB20/Screenshot-Doom.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:899px; top:1750px;" alt="cap-7">
    <img src="https://assets.newatlas.com/dims4/default/a738e03/2147483647/strip/true/crop/2560x1920+0+0/resize/2560x1920!/quality/90/?url=http%3A%2F%2Fnewatlas-brightspot.s3.amazonaws.com%2Ffd%2F23%2F9dac3bd5442ab943f0e059b47819%2Fdoom1pc7-transformed.jpeg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1409px; top:1950px;" alt="cap-8">
    <img src="https://i.redd.it/p3y1m0evzz991.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1479px; top:1650px;" alt="cap-9">
    <img src="https://cdn.mobygames.com/screenshots/7203610-contra-nes-a-bit-of-demo-gameplay.png" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1479px; top:2890px;" alt="cap-10">
    <img src="https://i.ytimg.com/vi/k7vcUei5u2E/maxresdefault.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1110px; top:2690px;" alt="cap-11">
    <img src="https://lh5.googleusercontent.com/proxy/DOOUJPMqAfFd5eyb3IqljRfAY4_qFWl-V89eQCGRzTEehu_NwKhULQuGLcHgbspzTnh-cTl3Z-vECR-JwZxFsb1j3KSSjrwiVXV9GF5fA7pyqMI6cavpqmGvU9e_" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1010px; top:3590px;" alt="cap-11">
    <img src="https://i.pinimg.com/736x/eb/73/73/eb7373156219e24869e7ba9a3ed299ed.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:400px; height:300px; left:1370px; top:3990px;" alt="cap-12">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg2lw2zfEuLFxw5lJM7AhDO_z8gmUaByHlnQ_ZYFMUgWY8GiHI1KsgEiS5FI8JtUX9AWTB2OSeEQ9PMJZDKNTp_hUeu5z444TEn-Z-40cqfY6hl2X9AblK1CZQI9ZVMS_lkfUWRnzNpnnY/s1600/DragonsLair+2014-09-26+16-51-00-72.jpg" style="position:absolute; border: 4px solid #000; padding: 10px; width:500px; height:300px; left:1279px; top:3290px;" alt="cap-13">
    <script src="js/image.js"></script>
</body>
</html>
