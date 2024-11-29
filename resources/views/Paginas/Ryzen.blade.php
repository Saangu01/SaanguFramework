<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryzen Resultados</title>
    <link rel="stylesheet" href="CSS/Ryzen.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/PcBuilder.png" type="image/x-icon">
</head>
{{-- ⠀⠀⠀⡸⠉⠀⠀⠀⠀⢈⠉⠉⠉⠻⠍⠉⡙⠫⠋⢝⠨⡉⡹⠉⠁⠀⠀⠀⠀
⠀⢀⠒⠁⠀⠄⠀⠀⢠⠃⠀⢰⠈⡀⠀⠈⡈⢂⠀⡈⢳⣹⠁⠀⠀⠀⠀⠀⠀
⠀⡈⠀⢠⠌⠀⠀⠀⡌⠀⡘⣿⠀⠃⢸⠀⡇⣸⠀⡇⠆⢿⠀⠀⠀⠀⠀⠀⠀
⠀⠁⠀⡘⢀⠖⠀⣐⣇⠆⠃⢿⠀⡄⢸⣆⣳⣏⢀⡇⡼⣸⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⢀⡌⠀⣰⣿⠿⣾⣾⠧⢆⣇⢏⠿⢧⣾⠮⡗⡷⢹⡄⠀⠀⠀⠀⠀⠀
⠀⠄⣠⠎⠀⢴⠘⠄⠏⢹⣿⠁⠀⠋⠀⠓⣿⡏⡿⣵⡃⣾⣿⣄⠀⠀⠀⠀⠀
⠀⠈⡇⠀⡌⠀⠆⢪⠢⠀⠀⠀⠀⠀⠰⡀⠀⠀⣼⣟⣿⣿⣿⣿⣷⣄⣄⣀⣠
⠀⠀⠸⣄⢧⢂⠈⣤⢦⡀⠀⠀⠀⠀⠘⠁⢠⣾⣞⢹⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⡛⠪⣣⡣⡘⡇⡙⠀⠀⠀⠛⠀⢀⣽⡿⣼⣾⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠉⠀⠈⠉⠢⢼⣿⠝⠞⠓⣄⡀⠀⢀⣴⣿⣻⣿⢻⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠈⠝⠀⠀⠀⠈⠻⢿⡏⣿⣿⣿⣷⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠀⠈⡄⠀⠀⠀⠀⢈⡙⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠐⢶⠆⠀⠀⠠⡀⠀⠀⠀⡆⢻⡆⠈⠛⠿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠈⢈⢫⠃⠀⠀⢰⠀⠁⠢⡤⠰⠀⡇⠀⠀⢀⠬⠛⢿⣿⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠀⠀⢸⡖⠒⢤⣌⣢⡰⠀⣠⠒⠁⠀⠀⠀⠉⣿⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠀⠀⡀⠘⡀⠀⠙⢻⣧⣾⣻⠀⠀⠀⠀⢀⡔⢻⣿⣿⣿⣿⣿⣿
⠀⠀⠀⠀⠀⠀⢀⠃⠀⢡⢠⣼⡿⣿⣿⠛⡿⠂⠀⢀⡿⠂⠘⣿⣿⣿⣿⣿⣿ --}}
<body>
    <header>
        <h1>Los resultados de tu PC Ryzen son:</h1>
    </header>

    <section class="ResultadosRyzen">
        <p id="selectedProcesador">Procesador seleccionado:</p>
        <p id="selectedGrafica">Gráfica seleccionada:</p>
        <p id="selectedFuente">Fuente de poder seleccionada:</p>
        <p id="totalPrecio">El precio total de todos los componentes es:</p>
    </section>

    <script>
        const componentes = {

            "Ryzen_9_5950X": 8899,
            "Ryzen_9_5900X": 6349,
            "Ryzen_9_3950X": 8899,
            "Ryzen_9_3900X": 8242,
            "Ryzen_7_5800X": 3779,
            "Ryzen_7_3700X": 5474,
            "Ryzen_7_2700X": 4866,
            "Ryzen_5_5600X": 3530,
            "Ryzen_5_3600": 2167,
            "Ryzen_5_2600": 3339,

            "AMD_Radeon_RX_6900_XT": 14849,
            "AMD_Radeon_RX_6800_XT": 13438,
            "AMD_Radeon_RX_6700_XT": 8513,
            "AMD_Radeon_RX_Vega_64": 5439,
            "AMD_Radeon_RX_Vega_56": 5549,

            "Corsair_RM850x": 2695,
            "Corsair_RM750x": 2228,
            "Corsair_TX850M": 1910,
            "Corsair_TX750M": 1833,
            "EVGA_SuperNOVA_850_G3": 4000,
            "EVGA_SuperNOVA_750_G3": 2142,
            "EVGA_SuperNOVA_850_G5": 3200,
            "EVGA_SuperNOVA_750_G5": 3200,
            "Seasonic_Focus_Plus_850_Gold": 2787,
            "Seasonic_Focus_Plus_750_Gold": 2150,
            "Seasonic_Prime_850_Platinum": 3515,
            "Seasonic_Prime_750_Titanium": 2150,
            "Thermaltake_Toughpower_850W": 2039,
            "Thermaltake_Toughpower_750W": 2569,
            "Thermaltake_Smart_700W": 1474,
        };

        function actualizarResultados(procesador, grafica, fuente) {
            if (componentes.hasOwnProperty(procesador) && componentes.hasOwnProperty(grafica) && componentes.hasOwnProperty(fuente)) {
                const total = componentes[procesador] + componentes[grafica] + componentes[fuente];

                document.getElementById('selectedProcesador').textContent = `Procesador seleccionado: ${procesador}`;
                document.getElementById('selectedGrafica').textContent = `Gráfica seleccionada: ${grafica}`;
                document.getElementById('selectedFuente').textContent = `Fuente de poder seleccionada: ${fuente}`;
                document.getElementById('totalPrecio').textContent = `El precio total de todos los componentes es: ${total}`;
            } else {
                console.error('Uno o más componentes seleccionados no son válidos.');
                document.getElementById('totalPrecio').textContent = 'No se pudo calcular el precio total.';
            }
        }

        const procesadorSeleccionado = "Ryzen_9_5950X";
        const graficaSeleccionada = "AMD_Radeon_RX_6900_XT";
        const fuenteSeleccionada = "Corsair_RM850x";

        actualizarResultados(procesadorSeleccionado, graficaSeleccionada, fuenteSeleccionada);
    </script>
</body>
</html>



