<?php
if (isset($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
    echo "Hola, $nombre. ¡Te amo más que a todas las estrellas del cielo!";
} else {
    echo '<form method="post">
            <label for="nombre">¿Cómo te llamas?</label>
            <input type="text" id="nombre" name="nombre">
            <button type="submit">¡Dímelo!</button>
            </form>';
}
