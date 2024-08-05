<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: #343a40;
            color: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-container {
            margin-top: 2rem;
            background-color: #343a40;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-4">Consulta de Usuarios</h1>
        <div class="row justify-content-center mt-4">
            <form class="col-lg-6 form-container text-center" id="FormularioUsuario">
                <div class="row">
                    <div class="col">
                        <label for="usuario" class="form-label">Nombre del usuario:</label>
                        <input type="text" id="usuario" class="form-control" required>
                    </div>

                    <div class="col">
                        <label for="nombre" class="form-label">Usuario:</label>
                        <input type="text" id="nombre" class="form-control" required>
                    </div>

                </div>
                <div class="row card-body" id="Resultado">
                    <div class="col">
                        <label for="Pais" class="form-label">Selecciona un país:</label>
                        <select id="Pais" class="form-select">
                            <option value="">Seleccione un país</option>
                        </select>
                    </div>
                    <div class="col">
                        <p class="card-text mt-2">
                            <strong>Nombre del Usuario</strong> <input type="text" id="NombreUsario" class="form-control mb-2" readonly>
                        </p>
                    </div>
                    <div class="col">
                        <p class="card-text mt-2">
                            <strong>Código de área del país:</strong> <input type="text" id="Telefono" class="form-control" readonly>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="correo" class="form-label">Correo del usuario:</label>
                        <input type="email" id="correo" class="form-control" placeholder="correo@gmail.com" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3" id="BtnEnviar">Consultar</button>
            </form>
        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>