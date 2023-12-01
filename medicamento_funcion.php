<?php
require_once 'DB.php';

// Crear una instancia de la clase DB
$db = new DB('root', '', 'localhost', 'login');

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$inventario = $_POST['inventario'];
// Verificar si se enviaron los datos
if ( $nombre != "" && $inventario != "") {
    // Crear un array con los datos del medicamento
    $medicamentoData = [
        'nombre' => $nombre,
        'inventario' => $inventario
    ];
    // Guardar el medicamento en la base de datos
    $resultado = $db->insert('medicamento', $medicamentoData);

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
