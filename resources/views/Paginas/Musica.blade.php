<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Musica.css')}}">
    <link rel="icon" href="IMG/1732234196059.png" type="image/x-icon">
    <title>Music.html</title>
</head>
{{-- ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣀⣀⠀⠀⠀⠀⣤⠟⡇⠀⠀⠀⠀⠀⠀⣠⣶⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⣀⣼⣿⡃⠀⠀⢀⡾⡃⠀⣿⠀⠀⠀⠀⢠⡼⠋⢸⡆⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠹⠟⠋⠁⣰⡟⣠⡇⠀⢻⡀⠀⢀⣴⠏⢀⡀⠘⣷⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣰⠟⣶⣿⡇⠠⠸⣧⣠⠟⠁⢀⣾⡇⠀⣿⠀⠀⠀⠀⠀⠀⠀
⠐⣧⡀⠀⠀⠀⣸⠏⢾⠿⣿⡇⠀⠀⠙⠃⠀⢠⣾⣿⡇⠀⣿⡆⠀⠀⢀⣀⠀⠀
⠀⠀⠙⢦⣀⡾⢿⣶⣮⣅⡀⠀⠀⠀⠀⠀⠀⠀⠙⠿⠅⠀⢹⣇⣠⠶⠛⠛⠀⠀
⠀⢠⣄⣀⣹⡇⠘⣿⣿⣿⠿⠆⠀⠒⢻⣾⣶⣶⣤⡀⠀⣠⣼⡟⠃⠀⠀⠀⠀⠀
⠀⠀⠀⢀⣸⣧⠀⠀⠀⠀⠰⡆⠀⠀⠈⠿⣿⡿⡟⠻⠞⢯⣼⣇⣀⠀⠀⠀⠀⠀
⠀⠠⡾⠛⠁⠘⠷⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡾⠁⠀⠉⠛⠶⣤⣀⡀
⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠛⣿⣶⣶⣶⣶⣶⣶⠶⠛⠙⢷⣄⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⡟⠙⠛⠛⠛⢻⣇⠀⠀⠀⠀⠉⠳⣦⡄⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⠀⠀⡆⠀⢻⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⡇⠀⠀⠀⡇⠀⠀⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⢀⡾⢸⠇⠀⠀⠀⣷⠀⠀⢹⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣀⣤⠴⠞⠛⠛⡆⠀⠀⠀⢸⣆⠀⢸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⣾⣋⢀⣀⣠⣴⣾⠇⠀⠀⣰⠟⠙⠶⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠈⠉⠉⢁⡴⠋⠀⠀⣠⡾⠃⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⣿⣤⣤⡴⠟⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ --}}
<body>
    <div class="marquee">
        <span id="song-name">♪ Macintosh Plus - ブート ♪</span>
    </div>
    <audio src="audio/Macintosh Plus - ブート.mp3" autoplay loop hidden></audio>
    <header>
        <div class="respiracion" style="position: absolute; left:1340px; top:-60px; font-family:'Times New Roman', Times, serif">
            Music.html
        </div>
    </header>
    <div class="respiracion_f" style="font-family: 'Times New Roman', Times, serif">
        Music Galley 8yuu
    </div>

    <a href="Home" style="color:#2600ff; top:65px; white-space: nowrap; position: fixed; left:20px;">return</a>
    <a href="" style="color:#2600ff; top:50px; white-space: nowrap; position: fixed; left:20px;">reset</a>

    <section class="titulo">
        <h1>¿Qué es el Vaporwave?</h1>
    </section>
    <img src="https://th.bing.com/th/id/OIP.KCUghiM-zfszfinPkvoQfQHaLH?rs=1&pid=ImgDetMain" style="position: absolute; width:350px; height:500px; left:1599px top:905px; border: 4px solid #000; padding: 10px;" alt="">
    <img class="music_art" src="IMG/david-sculpture-4.jpg" style="position: absolute; width:300px; height:400px; left:889px; top:905px;"  alt="David_2">
    <section class="info" style="position: absolute; left:20px; top:587px;">
        <h1>El Vaporwave es uno de los tipos de aesthetic que podemos encontrar en redes sociales como Instagram y también, Tumbrl, 
            una corriente artística que nació representando con nostalgia un pasado futurista que nunca existió.</h1>
    </section>
    <img src="https://tendenzias.com/wp-content/uploads/2020/11/Que-es-Vaporwave-estetica-letras-istock-600x338.jpg" style="position: absolute; top:1047px; left:211px; width:560px; height:350px; border: 4px solid #000; padding: 10px;" alt="">
    <section class="info" style="position: absolute; left:60px; top:787px;">
        <h1>El Vaporwave tiene como estilo estético caracteres ASCII o los ideogramas japoneses, pero también el uso masivo de colores violetas, palmeras californianas 
            y símbolos del pasado como bustos de mármol o gráficos de Windows 98 o Windows Vista.</h1>
    </section>

    <section class="titulo" style="position: absolute; left:1540px; top:503px;">
        <h1>Estilo de musica</h1>
    </section>

    <section class="info" style="position: absolute;  left:1520px; top:705px;">
        <h1>Se podria decir que el album que empezó todo el estilo Vaporwave fue el album: <a href="https://www.youtube.com/watch?v=oJmmTJ-kQYo">MACINTOSH PLUS</a>.</h1>
    </section>

    <section class="info" style="position: absolute; left:1250px; top:992px;">
        <h1>Se basa en el uso de samples de canciones pop, jazz, funk, elevator music, e incluso jingles publicitarios de los 80 y 90. Estos samples se desaceleran, se distorsionan y se añaden efectos como eco y reverb.</h1>
    </section>

    <section class="info" style="position: absolute; top:1470px; left:1086px;">
        <h1>Algunas de los albunes más populares son:</h1>
        <h1 style="text-align: right; color: aliceblue; font-family:'Times New Roman', Times, serif; font-size:22px;">1.- Far Side Virtual - James Ferraro (2011)</h1>
        <h1 style="text-align: right; color: aliceblue; font-family:'Times New Roman', Times, serif; font-size:22px;">2.- ECO VIRTUAL - Eco Virtual (2013)</h1>
        <h1 style="text-align: right; color: aliceblue; font-family:'Times New Roman', Times, serif; font-size:22px;">3.- Skeleton - 骨架的 (Honzawa Tek) (2012)</h1>
        <h1 style="text-align: right; color: aliceblue; font-family:'Times New Roman', Times, serif; font-size:22px;">4.- Blank Banshee 0 - Blank Banshee (2012)</h1>
    </section>
    
    <a href="https://www.youtube.com/watch?v=pd-uSm8ittU"><img src="https://f4.bcbits.com/img/a1645558106_10.jpg" style="color:#FFFFFF; position:absolute; top:1600px; left:572px; height: 350px; widht:350px; border-radius:12px" alt="Far Side Virtual - James Ferraro (2011)"></a>
    <a href="https://www.youtube.com/@EcoVirtual"><img src="https://f4.bcbits.com/img/a0902382915_10.jpg" style="color:#FFFFFF; position:absolute; top:1600px; left:972px; height: 350px; widht:350px; border-radius:12px" alt="ECO VIRTUAL - Eco Virtual (2013)"></a>
    <a href="https://www.youtube.com/watch?v=8RGLbFS1Y5I"><img style="color:#FFFFFF; position:absolute; top:2000px; left:572px; height: 350px; widht:350px; border-radius:12px" src="https://archive.org/download/honekateki-zip/cover.jpg" alt="Skeleton - 骨架的 (Honzawa Tek) (2012)"></a>
    <a href="https://www.youtube.com/watch?v=8oBbJg_PqbU"><img style="color:#FFFFFF; position:absolute; top:2000px; left:972px; height: 350px; widht:350px; border-radius:12px" src="https://i.discogs.com/ykYu3zXIqCOCkqQtAqP7Kk4118lX0d4i_InvMAPnl3I/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9SLTExNjMz/MjM2LTE2NDQ2MDU2/NzAtNjk3MC5qcGVn.jpeg" alt="Blank Banshee 0 - Blank Banshee (2012)"></a>

</body>
</html>