<!DOCTYPE html>
<html lang="ES-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Final</title>
    <link rel="stylesheet" href="{{asset('css/DeadByDaylight.css')}}">
</head>
{{-- ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣤⣤⡤⡤⣤⣤⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢄⡤⠞⠋⠁⠀⠀⠀⠀⠀⠀⠈⠉⠿⣦⣤⠶⠦⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⢀⣴⠞⢋⡽⠋⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⡇⠀⠀⠙⢶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⣰⠟⠁⠀⠘⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⢷⡀⠀⠀⠉⠓⠦⣤⣤⣤⣤⣤⣤⣄⣀⠀⠀⠀
⠀⠀⠀⠀⣠⠞⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣴⣷⡄⠀⠀⢻⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠻⣆⠀
⠀⠀⣠⠞⠁⠀⠀⣀⣠⣏⡀⠂⢠⣶⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠹⠿⡃⠀⠀⠀⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⡆
⢀⡞⠁⠀⣠⠶⠛⠉⠉⠉⠙⢦⡸⣿⡿⠀⠀⠀⡄⢀⣀⣀⡶⠀⠀⠀⢀⡄⣀⠀⣢⠟⢦⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣸⠃
⡞⠀⠀⠸⠁⠀⠀⠀⠀⠀⠀⠀⢳⢀⣠⠀⠀⠀⠉⠉⠀⠀⣀⠀⠀⠀⢀⣠⡴⠞⠁⠀⠀⠈⠓⠦⣄⣀⠀⠀⠀⠀⣀⣤⠞⠁⠀
⣧⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣼⠀⠁⠀⢀⣀⣀⡴⠋⢻⡉⠙⠾⡟⢿⣅⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠙⠛⠉⠉⠀⠀⠀⠀
⠘⣦⡀⠀⠀⠀⠀⠀⠀⣀⣤⠞⢉⣹⣯⣍⣿⠉⠟⠀⠀⣸⠳⣄⡀⠀⠀⠙⢧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠈⠙⠒⠒⠒⠒⠚⠋⠁⠀⡴⠋⢀⡀⢠⡇⠀⠀⠀⠀⠃⠀⠀⠀⠀⠀⢀⡾⠋⢻⡄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⡇⠀⢸⡀⠸⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⠀⠀⢠⡇⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⣇⠀⠀⠉⠋⠻⣄⠀⠀⠀⠀⠀⣀⣠⣴⠞⠋⠳⠶⠞⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠳⠦⢤⠤⠶⠋⠙⠳⣆⣀⣈⡿⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀ --}}
<body>
    <header>
        <h2 class="Titulo">Estas son mis builds preferidas para mis asesinos mas jugados en Dead by Dead By Daylight</h2>
    </header>

    <h2 class="Subtitulo">Espero te guste!</h2>
    <h2>PD: Clickea en las Perks y en el asesino para saber que hacen!, ESTAN EN INGLES!</h2>
    <section class="Background">

        <a class="Recuadro" href="Pblog">Volver</a>

        <section>
            <h2>The MasterMind
                <a href="https://deadbydaylight.fandom.com/wiki/Albert_Wesker">
                    <img class="Image"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/8/87/K29_charSelect_portrait.png">
                </a>
            </h2>
        </section>

        <section class="Builds">
            <a href="https://deadbydaylight.fandom.com/wiki/Enduring">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/9/94/IconPerks_enduring.png"
                    alt="Enduring">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Scourge_Hook:_Pain_Resonance">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/7/79/IconPerks_scourgeHookPainResonance.png"
                    alt="ScourgeHookPainResonance">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Dead_Man%27s_Switch">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/c/c3/IconPerks_deadMansSwitch.png"
                    alt="DeadMansSwitch">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Grim_Embrace">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/1/1c/IconPerks_grimEmbrace.png"
                    alt="GrimEmblance">
            </a>

        </section>

        <section>
            <h2>The SkullMerchant
                <a href="https://deadbydaylight.fandom.com/wiki/Adriana_Imai">
                    <img class="Image"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/5/58/K31_charSelect_portrait.png">
                </a>
            </h2>
        </section>

        <section class="Builds">
            <a href="https://deadbydaylight.fandom.com/wiki/Hex:_Undying">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/f/fe/IconPerks_hexUndying.png"
                    alt="Undying">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Deadlock">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/d/d3/IconPerks_deadlock.png"
                    alt="DeadLock">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Hex:_Ruin">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/a/a2/IconPerks_hexRuin.png"
                    alt="Ruin">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/No_Way_Out">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/b/bb/IconPerks_noWayOut.png"
                    alt="NoWayOut">
            </a>

        </section>

        <section>
            <h2> The Trickster
                <a href="https://deadbydaylight.fandom.com/wiki/Ji-Woon_Hak">
                    <img class="Image"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/3/3e/K23_charSelect_portrait.png">
                </a>
                
            </h2>
        </section>

        <section class="Builds">
            <a href="https://deadbydaylight.fandom.com/wiki/Enduring">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/9/94/IconPerks_enduring.png"
                    alt="Enduring">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Scourge_Hook:_Pain_Resonance">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/7/79/IconPerks_scourgeHookPainResonance.png"
                    alt="ScourgeHookPainResonance">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Dead_Man%27s_Switch">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/c/c3/IconPerks_deadMansSwitch.png"
                    alt="DeadMansSwitch">
            </a>

            <a href="https://deadbydaylight.fandom.com/wiki/Grim_Embrace">
                <img class="Perk"
                    src="https://static.wikia.nocookie.net/deadbydaylight_gamepedia_en/images/1/1c/IconPerks_grimEmbrace.png"
                    alt="GrimEmblance">
            </a>

        </section>
    </section>
    </section>
</body>
<section>
    <footer>
        Todos los derechos reservados &copy; 2024 <br>
        Desarrollado por: SKPEPS
    </footer>
</section>

</html>