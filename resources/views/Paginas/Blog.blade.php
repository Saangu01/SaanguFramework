<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog.html</title>
    <link rel="stylesheet" href="{{asset("css/Blog.css")}}">
    <link rel="icon" href="IMG/1732234196059.png" type="image/x-icon">
</head>
{{-- ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⣤⣤⡤⠤⢤⣤⣤⣤⣤⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⡶⠿⠛⠉⠉⠁⠀⠀⠀⠀⠀⠀⠈⠉⠉⠙⠛⠷⣶⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣶⠟⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⠿⣦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣠⡾⠋⢁⡤⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠙⢷⣄⡀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣠⡾⠋⣠⡴⠋⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠙⣷⡄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⣰⡿⢡⡾⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣆⠀⠀⠀⠀
⠀⠀⠀⣴⡟⣰⡟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢻⣇⠀⠀⠀
⠀⠀⢠⡿⢰⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢿⣆⠀⠀
⠀⢠⣿⠃⣿⡇⠀⠀⠀⣰⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⡇⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⠀⢠⡄⠀⠀⠀⠀⠀⠀⠘⣿⡀⠀
⠀⢸⡿⠀⣿⡇⠀⠀⠀⣿⢠⡤⠤⠤⣠⣿⡄⠀⠀⠀⢸⣿⠀⠀⣠⠶⠶⠶⠦⣤⣿⠁⠀⠀⢀⡞⠀⠀⠀⠀⣆⠀⠀⠀⢻⣧⠀
⠀⣾⠇⠀⠹⣷⡀⠀⠀⣿⣮⡛⠓⠒⠺⣏⣷⡄⠀⠀⣿⣿⠀⠀⠈⠓⠒⢒⣻⣿⡇⠀⠀⢀⣿⡇⠀⠀⠀⢠⡿⢰⠄⠀⠈⣿⠀
⢠⣿⠀⠀⠀⠙⢿⣦⣀⣿⡈⠻⢦⣄⣀⣿⠙⢿⡄⢰⣿⣿⠀⠀⠀⣀⣤⠟⠁⡼⠃⢀⣴⠟⡿⠀⠀⠀⣠⣿⣇⡾⠀⠀⠀⣿⡀
⢸⡏⠀⠀⠀⠀⠘⣯⠉⣿⣷⠶⡶⠿⠿⠿⢶⣾⡝⠿⠷⣿⣶⠶⣿⠿⠷⠶⠾⠷⣾⣟⣁⣸⠃⠀⢀⣼⣿⠿⣿⠁⠀⠀⠀⣿⡇
⢸⣷⠀⠀⠀⠀⠀⠸⣶⡿⣿⠀⣇⠀⠀⠀⣼⣾⠇⠀⠀⠈⣧⡀⢧⠀⠀⠀⠀⢀⡇⢈⣿⣿⣤⠶⠛⢹⣿⣰⡏⠀⠀⠀⠀⣿⡇
⠸⣿⡀⠀⠀⠀⠀⢰⣿⠁⢻⡆⠸⣦⣀⣠⢿⡟⠀⠀⠀⠀⠹⣇⠘⢧⣀⣀⣀⡞⢁⣼⠇⠀⠀⠀⠀⢸⣿⠛⠀⠀⠀⠀⠀⣿⠃
⠀⣿⡇⠀⠀⠀⠀⣼⡇⠀⠀⠻⣆⡈⠉⣰⠟⠁⣤⠀⠀⠀⠀⠘⢳⣄⣉⠉⣁⣤⠟⠃⠀⠀⠀⠀⢀⣾⡏⠀⠀⠀⠀⠀⠀⣿⠀
⠀⢸⣿⠀⣶⠀⠀⢹⣧⠀⠀⠀⠈⠉⠉⠁⠀⠀⠻⠆⠀⠀⠀⠀⠀⠈⠉⠉⠉⠀⠀⠀⠀⠀⠀⢀⣼⡟⠀⠀⠀⠀⡀⠀⣼⡟⠀
⠀⠈⢻⣧⣸⣧⠀⠈⢻⣦⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣴⡾⠋⠀⠀⠀⠀⣰⡇⢰⡿⠁⠀
⠀⠀⠀⠻⣌⣿⢧⡀⠀⣙⠿⣦⣄⣀⠀⠀⠀⠀⠀⠉⠁⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣠⣾⣟⠋⠀⠀⠀⠀⠀⣴⢿⣧⡿⠁⠀⠀
⠀⠀⠀⠀⠙⠿⣎⠻⣦⡀⢻⣌⡉⠛⢿⣶⣶⣶⣦⣤⣤⣤⣤⣤⣤⣴⣶⣶⠶⠛⣻⢏⣶⠋⠀⣠⡆⠀⣠⡾⣣⡿⠟⠁⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠦⣿⣟⠶⣬⣷⡀⠀⠀⠈⣿⡍⠉⢡⡿⠁⠀⠀⠀⠀⢛⣿⣧⡤⢾⣿⡴⠟⠋⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠉⠀⠉⠁⣠⣤⣴⡿⠁⠀⠈⢿⣦⣀⠀⠀⠀⠈⠉⠁⠀⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣤⡾⠟⠛⠉⠸⣧⠀⠀⠀⡼⠉⠙⠛⠛⢶⣦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⠋⠀⠀⢀⣀⣀⠙⠳⠶⢻⣁⡀⠀⠀⠀⠀⠈⠙⢷⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣾⠇⠀⠀⠀⣼⠉⠙⠳⣤⠞⠋⠉⢹⠄⠀⠀⠀⠀⠀⠘⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡏⠀⠀⡀⠀⢸⣆⠀⠀⠛⠀⢀⣰⠏⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⡿⠁⠀⢀⡇⠀⠀⠙⢦⣄⢀⣤⠞⠁⠀⠀⠀⠀⠀⢳⠀⠀⣿⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣠⡾⠋⠀⠀⢀⣾⠁⠀⠀⠀⠀⠈⠉⠀⠀⠀⠀⠀⠀⠀⠀⢸⡄⠀⠘⣿⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢠⣾⠋⠁⠀⠀⢀⣾⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⢹⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢠⡿⠃⠀⠀⠀⢠⡾⠋⠛⠶⢤⣤⣀⣀⣀⣀⣀⣀⣀⣤⣤⠤⠶⠞⠛⣿⡀⠀⠀⠹⣧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣿⠇⠀⠀⠀⢠⡿⠣⣄⠀⠀⠀⠀⠈⠉⠉⠉⠉⠉⠉⠀⠀⠀⠀⣀⡤⠿⣧⠀⠀⠀⠹⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⢰⣿⠀⠀⠀⢠⣿⡁⠀⠈⠙⠛⠲⠤⢤⣤⣤⣤⣤⣤⠤⠴⠒⠛⠋⠁⠀⢀⣿⣧⠀⠀⠀⢸⣷⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣿⣇⠀⠀⣾⠃⠉⠲⢦⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⡤⠶⠚⠉⠁⢹⣧⠀⠀⠀⣿⡄⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠈⢿⣷⣄⣿⢦⡀⠀⠀⠀⠉⠛⠛⠓⠒⠒⠒⠚⠛⠋⠉⠉⠀⠀⠀⠀⠀⠀⢀⣿⡇⠀⠀⣿⡇⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⢸⡇⠉⢿⣄⠉⠳⠦⣄⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⡤⠶⠚⠉⢹⡇⠀⣸⡿⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠻⣦⣬⣿⣦⡀⠀⠀⠉⠙⠛⠓⠒⠒⠒⠒⠒⠚⠛⠛⠉⠉⠀⠀⠀⠀⢀⣿⣧⡾⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡏⠙⠿⠶⣤⣤⣀⣀⣀⣀⡀⠀⠀⠀⠀⠀⣀⣀⣀⣠⣤⣾⣿⣁⣀⡼⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣟⠀⠀⠀⠀⠈⠉⠙⡟⠙⡛⠛⠛⠛⠛⠋⠉⠉⠉⠉⠀⠀⣿⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⢷⣀⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠙⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣿⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⣿⣀⠀⠀⠀⠀⠀⠀⢀⣼⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⡿⣿⠶⠶⠶⠶⣾⠿⣍⠙⠻⠷⣶⣶⣶⣤⣴⡶⢶⣾⣿⡁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⠛⠛⠦⠤⠤⠤⠿⢀⣿⠀⠀⠀⣯⠘⠧⣤⣤⡤⠜⠃⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣾⠆⠀⠀⠀⠀⠀⠀⢸⡟⠀⠀⢀⣾⠆⠀⠀⠀⠀⠀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡿⠃⠀⠀⠀⠀⠀⠀⠀⠈⣿⠀⠀⣼⠟⠀⠀⠀⠀⠀⠀⠀⠀⢻⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⣦⣀⠀⠀⠀⠀⠀⠀⠀⠀⣸⡇⢼⣇⡀⠀⠀⠀⠀⠀⠀⠀⠀⣸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠙⠛⠛⠒⠶⠶⠖⠚⠛⠋⠀⠀⠙⠛⠳⠶⠤⠤⠴⠶⠖⠛⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⡀⢀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ --}}
<body>
    <div class="marquee">
        <span id="song-name">♪ MACINTOSH PLUS - FLORAL SHOPPE - 02 リサフランク420 - 現代のコンピュー ♪</span>
    </div>
    {{-- <audio id="musica" src="{{asset('audio/Macintosh Plus - ブート.mp3')}}" autoplay loop hidden></audio> --}}
    <audio id="musica" src="{{asset('audio/MACINTOSH PLUS - FLORAL SHOPPE - 02 リサフランク420 - 現代のコンピュー.mp3')}}" autoplay loop hidden></audio>
    <header>
        <div class="respiracion">
            Blog.html
        </div>
    </header>
    <div class="respiracion" style="font-family:'Times New Roman', Times, serif">
        Art Gallery 7yuu
    </div>

    <a href="Home" style="color:#FFFFFF; top:65px; white-space: nowrap; position: fixed; left:20px;">return</a>
    <a href="" style="color:#FFFFFF; top:50px; white-space: nowrap; position: fixed; left:20px;">reset</a>
    <h1 class="fg gf">0IvGZmqxIEJrRDCeDQVoXvuAOKti28q9P4PbD3h1BXY=</h1>
    <section class="titulo">
        <h1>⋆·˚ ༘ *Arte conteporaneo⋆·˚ ༘ *</h1>
    </section>
    <br>
    <hr>
    <section class="info">
        <h1>¿Qué es el arte conteporaneo?</h1>
    </section>
    <hr>
    
    <section class="contenido_2">
        <h1 class="fg">NoOo7koYqFkzykUL/TnWWE0+2xCpRu2lKY3eaFNQuv14zSoOOimoNP4Y7ULAHeGn9ctiBE4x5exVGqo7xYWdlA==</h1>
        <h1 class="high_letter">芸術とは何ですか？(¿Que es el arte?)</h1>
        <h2 class="high_letter_2 gf">El arte es una expresión de la creatividad de los seres humanos, que se manifiesta en obras que pueden ser apreciadas por los sentidos. El concepto de arte tiene varios significados y, durante siglos, artistas, filósofos, críticos y pensadores de diversas disciplinas han ofrecido muy diversas definiciones.</h2>
    </section>
    <h1 class="fg">C3bZqzIq63ckOoJiX2hb8YewXmYswRN8g/93yvBdiUQ=</h1>
    <section class="contenido">
        <h2>Se le considera arte conteporaneo a las pinturas creadas a partir del siglo XX</h2>
        <h1 class="fg gf">IBXJn/yV4bE2XwU6PRiJdZyo0JAm4UQ8D0mBi6coZN4=</h1>
        <h2>Contempla las manifestaciones y estilos artisticos más recientes</h2>
        <h2 class="high_letter_h2">La delimitación histórica de este movimiento varía dependiendo de cada historiador, al punto que para algunos no existe una distinción real entre arte moderno y arte contemporáneo.</h2>
    </section>

    <section class="contenido_2">

    </section>
    <img class="arte_conteporaneo" src="https://cdn.culturagenial.com/es/imagenes/baloon-dog-jeff-koons.jpg" alt="g67" style="position: absolute; left:1364px; top:1143px;"> <h1 class="fg">BbyuvWXvAZCevFvLyQQrADMz4H3LD37WP5Nk5fTi0KE=</h1>
    <br>

    <img class="arte_conteporaneo" src="IMG/image45.jpg" alt="g1">
    <h1 class="fg gf">K9HAc54Z3tAYGApGHo/cgINzHQnki6PiBYjMu7Te6kI=</h1>
    <img class="arte_conteporaneo" src="https://img.europapress.es/fotoweb/fotonoticia_20191023134318_1024.jpg" alt="g5">
    <br><h1 class="fg">Z3B2XLNep4lhUt/xnW7PSSku2/Crcej6LB87eWX4ylw</h1>  <img class="arte_conteporaneo" src="https://img.freepik.com/premium-vector/original-abstract-digital-painting-human-face_88791-6139.jpg?w=826" alt="g2">
    <img class="arte_conteporaneo" src="https://th.bing.com/th/id/R.2c820be5758be6fdab431a402a08ac27?rik=Am0L%2fLtF3r7VGg&riu=http%3a%2f%2f3.bp.blogspot.com%2f-_W9L5bLFKCY%2fT1mRm4nah-I%2fAAAAAAAAKN4%2fx2uK-DPNh94%2fs640%2fFrancoisNielly1600.jpeg&ehk=0pl014nAiFNiRy%2bqtAsg8gFpQAE70TCac4v0MrsqHh4%3d&risl=&pid=ImgRaw&r=0" alt="g3">
    <h1 class="fg">sA3Gb+pAlQMgWwdtUuPmOPpJZQ2Ky1bUuTYQW/uFXgw=</h1>

    <section class="titulo" style="position: absolute; left:690px; top:1690px;">
        <h1>⋆·˚ ༘ *Arte abstracto⋆·˚ ༘ *</h1>
    </section>
    <section class="info" style="position: absolute; left:95px; top:1545px;">
        <h1>¿Qué es el arte abstracto?</h1>
    </section>

    <section class="contenido" style="position: absolute; left:30px; top:2345; color:#000 font-family:'Times New Roman', Times, serif">
        <h1>El arte abstracto es una forma de expresión que propone un lenguaje basado en formas, colores, líneas, gestos y texturas, en lugar de representar figuras concretas del mundo visible (como lo hace el arte figurativo).</h1>
    </section>
    <br>
    <img style="position: absolute; left:920px; top:1878px; border: 4px solid #000; padding: 10px; width:400px; height:600px;" src="https://cultivarte.mx/wp-content/uploads/2024/09/71VyD1hrggS._AC_UF8941000_QL80_.jpg" alt="g98">
    <br>
    <img style="position: absolute; left:560px; top:1968px; border: 4px solid #000; padding: 10px; width: 400px; width: 400px;" src="https://i.pinimg.com/originals/57/dc/9b/57dc9b574de5990e7485f7050ef733ec.jpg" alt="g76">
    <img style="position: absolute; left:64px; top:1943px; border: 4px solid #000; padding: 10px; width:400px; height:600px;" src="https://i.pinimg.com/736x/70/cf/a5/70cfa504af08d5cb7e79654832fd7792.jpg" alt="g23">
    <img style="position: absolute; left:498px; top:2268px; border: 4px solid #000; padding: 10px; width: 400px; width: 400px;" src="https://pinturaenoleo.com/wp-content/uploads/2014/12/Abstractos.jpg" alt="g8">

    <h1 class="fg gf" style="position: absolute; left:598px; top:1px;">no/EQa+CusXBHrjyjPxFMK3w4bpxZi4WnO7oi05Qh3U=</h1>
    <h1 class="fg gf" style="position: absolute; left:132px; top:234px;">8DfK1j7f2bLrLhJ+ln8BHZLxFRdXGeL5u0AcplUW09k=</h1>
    <footer class="respiracion" style="background-color:#5eb196; position: absolute; left:1600px; top:1702px; font-family:'Courier New', Courier, monospace; float:right; width:200px; font-size:15px;">
        <h1>Desarrollado por SKPEPS &copy; Todos los Derechos Reservados</h1>
    </footer>
</body>
</html>