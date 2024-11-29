<!DOCTYPE html>
<html lang="ES-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Playlist Favoritas</title>
    <link rel="stylesheet" href="{{asset('css/Music.css')}}">
</head>
{{-- ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡴⠶⢦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⠏⣀⣀⣠⣼⣷⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣰⠿⣿⣿⠟⠻⣿⡏⢹⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⣤⠿⠿⠒⠚⠛⠉⠉⠉⢷⣤⣤⣤⠤⠤⠤⠤⣄⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⣀⣼⣁⣄⣀⣀⣀⣀⣤⣤⠴⣶⡿⠋⠻⣆⣀⣠⡴⣾⣿⠀⠀⠀⠀⠀
⠀⠀⠀⢠⡴⠚⠛⠉⠉⠉⢨⡿⠋⢙⣿⣍⣉⣡⣤⡤⠾⢿⣷⣟⠋⣹⠟⠳⠴⣿⡟⠀⠀⡀⠀⠀
⠀⠀⠀⠸⣟⣻⣷⡒⢓⣿⣿⠛⢫⡿⠻⣭⣉⣼⠛⠳⣴⠟⠀⠈⠙⢉⣀⣤⣾⠋⣠⡴⠚⠃⠀⠀
⠀⠀⠀⠀⠈⠻⢤⣿⣟⣁⣈⣻⣋⣀⣀⣀⣉⣁⣀⣤⣤⡤⠶⠶⢿⠛⠉⢠⣽⣿⡁⠀⢀⣀⣠⠀
⠀⠀⠀⠀⠒⠒⠒⠲⠦⣽⣯⡉⠉⠉⣿⣟⠀⠀⠀⣿⡀⠀⠀⢰⣿⡶⠀⠈⣷⠾⢿⡋⠉⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣀⣰⣯⣬⡝⠀⠘⠿⠿⠀⠀⢶⣟⣻⠓⠀⠀⠉⠁⠀⠀⠀⠀⠈⢷⡄⠀⠀⠀
⠀⠀⠀⠀⠚⠋⠉⠁⣿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢷⡀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢠⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣧⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣸⣧⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀
⠀⠀⠀⠀⠀⠀⠀⣿⠟⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢿⠀
⠀⠀⠀⠀⠀⠀⢰⡏⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇
⠀⠀⠀⠀⠀⠀⢸⣷⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣧
⠀⠀⠀⠀⠀⠀⢸⡟⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢻
⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸
⣠⣤⣄⠀⠀⠀⠸⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸
⢻⡿⠻⣦⡀⠀⠀⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡟
⠈⢻⣶⣿⠿⣦⡀⠸⣇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠃
⠀⠀⠙⠻⣤⣿⡟⠹⣿⣦⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⠏⠀
⠀⠀⠀⠀⠀⠉⠛⠒⠛⠿⢷⣄⡀⠀⠀⠀⠀⢰⡄⢠⡆⠀⠀⠀⣤⠀⢰⡄⠀⠀⢀⣠⡾⠋⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠉⠙⠛⠛⠛⠛⠳⠞⠛⠛⠛⠓⠻⠶⠟⠛⠛⠉⠉⠁⠀⠀⠀⠀ --}}
<body>
    <audio src="audio/LemKuuja - DONTHOLDBACK - LemKuuja (youtube).mp3" autoplay loop hidden></audio>
    <header>
        <a class="Recuadro" href="Pblog">Volver</a>
        <h1>Mis Playlists Favoritas!</h1>
        <h2>Por fin llegaste!</h2>
        <h2>Yo creo que a todo el mundo le gusta la musica, y esta pagina no es la excepcion estas son mis canciones y playlist favoritas</h2>
    </header>

    <section class="Playlist">
        <p>CHESSECAKE+</p>
        <h1>Este es uno de mis albunes favoritos de <a href="https://es.wikipedia.org/wiki/Vaporwave">VAPORWAVE</a><iframe src="https://open.spotify.com/embed/album/2W1BtAraV5SGikigCgD8qO" width="800" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe></iframe></h1>
    </section>

    <br>

    <section class="Playlist">
        <p>Los Retros</p>
        <h1>Este es uno de mis artistas favoritos en este momento <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/0qraFJK6boYSp4ZMMX4PzG?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></h1>
    </section>

    <br>

    <section class="Playlist">
        <p>Depresion Sonora</p>
        <h1>Uno de mis artistas favoritas en los ultimos 6 Meses <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/2oCrGFAUJwBVFaaIM8c0AO?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></h1> 
    </section>

    <br>

    <section class="Playlist">
        <p>SKPEPS</p>
        <h1>Por ultimo pero no menos importante: Mi Playlist Personal</h1>
        <h1>Mezcla de TODO lo que amo ❤️ <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0CPwz41klp5xphNsHNXx2N?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe></h1>
    </section>

    <section>
        <footer>
            Todos los derechos reservados &copy; 2024 <br>
            Desarrollado por: SKPEPS
        </footer>
    </section>

    <h1>Eso es todo de mi blog espero que te haya gustado</h1>
</body>
</html>

