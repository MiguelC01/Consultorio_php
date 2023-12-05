<?php
require_once 'DB.php';

// Crear una instancia de la clase DB
$db = new DB('root', '', 'localhost', 'consultoriotec');

// Obtener datos del formulario
$nombre = $_POST['medicamento'];
$inventario = $_POST['inventario'];
// Verificar si se enviaron los datos
if ( $nombre != "" && $inventario != "") {
    // Crear un array con los datos del medicamento
    $medicamentoData = [
        'medicamento' => $nombre,
        'inventario' => $inventario
    ];
    // Guardar el medicamento en la base de datos
    $resultado = $db->insert('medicamentos', $medicamentoData);

    if ($resultado) {
        echo '<script>
        window.location="medicamento.php"
        </script>
        ';

    } else {
        echo "Hubo un error al guardar los datos.";
    }
} else {
    echo "Por favor, complete todos los campos del formulario.";
}
?>
