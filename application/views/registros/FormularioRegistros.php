<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>


    <div class="container-add">
        <form accion="<?=base_url('index.php/RegistrosC/FormularioRegistros')?>" method="POST">

            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="Nombre" require>
            </div>
            <div class="mb-3">
                <label for="ApellidoPaterno" class="form-label">Primer Apellido:</label>
                <input type="text" class="form-control" name="ApellidoPaterno" require>
            </div>
            <div class="mb-3">
                <label for="ApellidoMaterno" class="form-label">Segundo Apellido:</label>
                <input type="text" class="form-control" name="ApellidoMaterno" require>
            </div>
            <div class="mb-3">
                <label for="Correo" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="CorreoElectronico" require>
            </div>
            <div class="mb-3">
                <label for="Contrasenia" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" name="Contrasenia" require>
            </div>

            <input type="submit">
        </form>
        <img src="usuario/imagenes/fondo_difuminado_login.jpg" width="300" heigth="400">
    </div>
</body>

</html>