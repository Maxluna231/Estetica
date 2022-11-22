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
     <link href="http://localhost/proyecto-estetica/plantilla/css/Formulario.css" rel="stylesheet">
</head>

<body>
<div id="color" class="contenedor-responsive">
    <ul>
        <h1 id="color-name">ESTETICA TORRES</h1>
        <ul class="nav-items">

            <a id="color-name2" href="Inicio">Pagina inicio </a>
            <a id="color-name2" href="#">Servicios </a>
            <a id="color-name2" href="Tratamiento">Tratamiento </a>
            <a id="color-name2" href="#">Informacion</a>
            <a id="color-name2"> Servicios</a>
        </ul>
        <image class="img-fluid"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTebYhuV-1xuZH1V-xAaR3v7M0uKLr3nKd88g&usqp=CAU">
    </div>

    <div class="container-add">
        <form accion="<?=base_url('index.php/RegistrosC/FormularioRegistros')?>" method="POST">

            <div class="mb-3">
                <label for="Nombre" id="nombre" class="form-label">Nombre:</label>
                <input type="text" id="espacio" class="form-control" name="Nombre" require>
            </div>
            <div class="mb-3">
                <label for="ApellidoPaterno" id="nombre" class="form-label">Primer Apellido:</label>
                <input type="text" id="espacio"class="form-control" name="ApellidoPaterno" require>
            </div>
            <div class="mb-3">
                <label for="ApellidoMaterno" id="nombre" class="form-label">Segundo Apellido:</label>
                <input type="text" id="espacio" class="form-control" id="nombre" name="ApellidoMaterno" require>
            </div>

            <div class="mb-3">
                <label for="Contrasenia"id="nombre" class="form-label">Contraseña:</label>
                <input type="password" id="espacio" class="form-control" name="Contrasenia" require>
            </div>
            <div class="mb-3">
                <label for="Contrasenia"id="nombre" class="form-label">Confirmar Contraseña:</label>
                <input type="password" id="espacio" class="form-control" name="Contrasenia" require>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" id="nombre" class="form-label">Correo Electronico:</label>
                <input type="email" id="espacio" class="form-control" name="CorreoElectronico" placeholder="name@example.com"require>
            </div>
            
<center>
                           <input id="botton"type="submit">
</center>
        </form>
      
    </div>
    <div id="color" class="contenedor-responsive">
        <p id="contacto">DIRECCION </p>
        <p id="contacto">Ciudad: Teziutlan</p>
        <p id="contacto">Direccion: Av.centro N*178</p>
        <p id="contacto">Codigo Postal: 73800</p>

        <div id="movimiento" class="contenedor-responsive">
            <ul id="movimiento">
                <li class="nav-item">
                    <p id="contacto">CONTACTO</p>
                    <p id="contacto">Telefono: 231-197-11-20</p>
                    <p id="contacto">Correo electronico: esteticatorres@gmail.com</p>
                    <p id="contacto">FACEBOOK: esteticatorres</p>
                </li>
        </div>
    </div>
</body>

</html>