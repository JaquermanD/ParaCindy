<?php
function expresarAmor($sentimientos) {
    shuffle($sentimientos); //Randomizer
    $mensaje = "Te amo ";
    foreach ($sentimientos as $sentimiento) {
        $mensaje .= $sentimiento . ", ";
    }
    $mensaje .= "y mucho más Lunita✨🌙.";
    return $mensaje;
}

$misSentimientos = ["con locura", "con pasión", "con ternura", "con todo mi ser"];
echo expresarAmor($misSentimientos);
