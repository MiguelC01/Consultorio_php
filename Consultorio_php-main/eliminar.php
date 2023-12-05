<?php
// Verificar si se recibió un ID de medicamento
if (isset($_POST['medicamento_id'])) {
    // Obtener el ID del medicamento desde el formulario
    $medicamento_id = $_POST['medicamento_id'];

    // Aquí deberías incluir la lógica para eliminar el medicamento de la base de datos
    // Puedes usar tu clase DB para realizar la operación de eliminación

    // Supongamos que tu clase DB tiene un método llamado 'delete'
    // y tu tabla de medicamentos se llama 'medicamentos'
    require_once 'DB.php'; // Asegúrate de incluir tu clase DB

    $db = new DB("root", "", "localhost", "consultoriotec");

    // Lógica para eliminar el medicamento
    $data = array('id' => $medicamento_id);
    $result = $db->delete('medicamentos', $data);

    if ($result) {
        echo 'Medicamento eliminado correctamente.';
    } else {
        echo 'Error al eliminar el medicamento.';
    }
} else {
    echo 'ID de medicamento no proporcionado.';
}
?>
