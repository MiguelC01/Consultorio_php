<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="img/png" href="icon2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            height: 700px;
            display: flex;
        }
        .left {
            width: 300px;
            background-color: lightblue;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(8px);
    background-color: rgba(0, 128, 255, 0.5);
            color: white;
            border-radius: 5px;
        }
        .right {
            width: 1200px;
            background-color: ultramarine;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Roboto', sans-serif;
            -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(8px);
    background-color:white;
            color: #00a2ff;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            width: 60%;
            
    margin-top: 40px;
    border: none;
    border-radius: 3px;
    font-size: 14px;
    background: #00a2ff;
    font-weight: 600;
    cursor: pointer;
    color: white;
    outline: none;
        }
    </style>
</head>
<body background="tecno.jpg">
    <div class="container">
        <div class="left">
            <img src="icon2.png" width="100px" height="100px" />
            <button type="button" onclick="location.href='iniciomedico.php'">🏠 Inicio</button>
            <button type="button" onclick="location.href='formulario_consulta.php'">🩹 Nueva consulta</button>
            <button type="button" onclick="location.href='citas.php'">🕑 Citas</button>
            <button type="button" onclick="location.href='pacientes.php'">🤕 Pacientes</button>
            <button type="button" onclick="location.href='formulario_expe.php'">📁 Registrar expediente</button>
            <button type="button" onclick="location.href='medicamento.php'">📦 Inventario</button>
            <button type="button" onclick="location.href='index.php'">❌ Cerrar sesión</button>
        </div>
        <div class="right">
        <div id="addmedicamento" class="mx-auto">
        <form action="medicamento_funcion.php" method="POST">
    
            <div class="mb-3">
                <label for="nombre" class="form-label">Producto:</label>
                <input type="text" class="form-control"  placeholder="Nombre" name="nombre">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad:</label>
                <input type="text" class="form-control"  placeholder="Cantidad total" name="inventario">
            </div>
            <div class="form-check mb-3">
                
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
        </div>
    </div>
</body>
</html>
