//ESTA PAGINA DEBE DE USARSE SOLO CON FINES INFORMATIVOS, LOS PRECIOS PODRIAN ASEMEJARSE A LOS DE LA REALIDAD
//LOS PRECIOS NO SON REALES, SON ESTIMADOS, ES DECIR QUE NO SON EXACTOS POR LO QUE PUEDE HABER DESFACES DE PRECIOS
const preciosProcesadoresIntel = {
    "Intel_Core_i9_11900K": 5758,
    "Intel_Core_i9_10900K": 7298,
    "Intel_Core_i9_9900K": 12211,
    "Intel_Core_i9_10900KF": 7298,
    "Intel_Core_i9_10850K": 6645,
    "Intel_Core_i7_11700K": 5474,
    "Intel_Core_i7_10700K": 5373,
    "Intel_Core_i7_9700K": 4506,
    "Intel_Core_i7_10700": 5578,
    "Intel_Core_i7_8700K": 4891,
    "Intel_Core_i5_12600K": 2540,
    "Intel_Core_i5_11600K": 2549,
    "Intel_Core_i5_10600K": 3310,
    "Intel_Core_i5_11400": 2549,
    "Intel_Core_i5_10400F": 2798,
    "Intel_Core_i5_9600K": 2550,
    "Intel_Core_i5_8600K": 3884
};

const preciosProcesadoresRyzen = {
    "Ryzen_9_5950X": 8899,
    "Ryzen_9_5900X": 6349,
    "Ryzen_9_3950X": 8899,
    "Ryzen_9_3900X": 8242,
    "Ryzen_7_5800X": 3779,
    "Ryzen_7_3700X": 5474,
    "Ryzen_7_2700X": 4866,
    "Ryzen_5_5600X": 3530,
    "Ryzen_5_3600": 2167,
    "Ryzen_5_2600": 3339
};

const preciosGraficas = {
    "NVIDIA_GeForce_RTX_3090": 21952,
    "NVIDIA_GeForce_RTX_3080": 22988,
    "NVIDIA_GeForce_RTX_3070": 20500,
    "NVIDIA_GeForce_RTX_3060_Ti": 5919,
    "NVIDIA_GeForce_RTX_2080_Ti": 9132,
    "NVIDIA_GeForce_RTX_2080_Super": 8325,
    "NVIDIA_GeForce_RTX_2070_Super": 15913,
    "NVIDIA_GeForce_RTX_2060_Super": 15913,
    "NVIDIA_GeForce_GTX_1660_Ti": 5116,
    "NVIDIA_GeForce_GTX_1660_Super": 5116,
    "NVIDIA_GeForce_GTX_1650_Super": 5549,
    "NVIDIA_GeForce_GTX_1080_Ti": 5869,
    "NVIDIA_GeForce_GTX_1080": 2222,
    "NVIDIA_GeForce_GTX_1070_Ti": 2222,
    "NVIDIA_GeForce_GTX_1070": 2222,
    "NVIDIA_GeForce_GTX_1060_6GB": 2222,
    "AMD_Radeon_RX_6900_XT": 14849,
    "AMD_Radeon_RX_6800_XT": 13438,
    "AMD_Radeon_RX_6700_XT": 8513,
    "AMD_Radeon_RX_Vega_64": 5439,
    "AMD_Radeon_RX_Vega_56": 5549
};

const preciosFuentes = {
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
    "Thermaltake_Smart_700W": 1474
};

function calcularPrecioIntel() {
    var procesador = document.getElementById('Intel-Core').value;
    var grafica = document.getElementById('Nvidia-Graphics').value;
    var fuente = document.getElementById('Power-Supply').value;

    var precioProcesador = obtenerPrecioProcesadorIntel(procesador);
    var precioGrafica = obtenerPrecioGrafica(grafica);
    var precioFuente = obtenerPrecioFuente(fuente);

    var precioTotal = precioProcesador + precioGrafica + precioFuente;

    mostrarPrecio("precioIntel", precioTotal);
}

function calcularPrecioRyzen() {
    var procesador = document.getElementById('Ryzen-Core').value;
    var grafica = document.getElementById('AMD-Graphics').value;
    var fuente = document.getElementById('Power-Supply').value;

    var precioProcesador = obtenerPrecioProcesadorRyzen(procesador);
    var precioGrafica = obtenerPrecioGrafica(grafica);
    var precioFuente = obtenerPrecioFuente(fuente);

    var precioTotal = precioProcesador + precioGrafica + precioFuente;

    mostrarPrecio("precioRyzen", precioTotal);
}

function obtenerPrecioProcesadorIntel(procesador) {
    return preciosProcesadoresIntel[procesador] || 0;
}

function obtenerPrecioProcesadorRyzen(procesador) {
    return preciosProcesadoresRyzen[procesador] || 0;
}

function obtenerPrecioGrafica(grafica) {
    return preciosGraficas[grafica] || 0;
}

function obtenerPrecioFuente(fuente) {
    return preciosFuentes[fuente] || 0;
}

function mostrarPrecio(idElemento, precio) {
    document.getElementById(idElemento).textContent = "El precio total de los componentes seleccionados es: $" + precio;
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('calcularIntel').addEventListener('click', calcularPrecioIntel);
    document.getElementById('calcularRyzen').addEventListener('click', calcularPrecioRyzen);
});
