<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
    body {
        background-color: black;
    }

    .contenedor-responsive {

        padding: 50px;
    }


    #color {
        background-color: rgb(10, 10, 10);
        padding: 1px;
        height: 160px;

    }

    #color-name {
        font-family: Bold;
        color: purple;
        padding: 20px;
        text-indent: 150px;
        text-shadow: 1px 1px 1px red;
        font-size: 30px;

    }

    #color-name2 {
        font-family: Bold;
        color: aqua;
        text-indent: 140px;
        font-size: 23px;
        right: 25px;
        display: flex;
    }


    #linea {
        font-family: Bold;
        text-indent: 1px;
        font-size: 10px;
        right: 25px;
        top: -100px;


    }

    #linea1 {
        font-family: Bold;
        text-indent: 1px;
        font-size: 100px;
        right: 49px;
        position: relative;
        top: -100px;
        right: 30px;
    }

    .nav-items {
        display: flex;
    }

    .img-fluid {
        width: 170px;
        height: 120px;
        display: block;
        position: relative;
        top: -99px;
        right: 20px;

    }

    #contacto {
        color: rgb(4, 247, 235);
    }

    #movimiento {
        width: 220px;
        height: 150px;
        display: block;
        position: relative;
        top: -107px;
        right: -479px;

    }

    #imagen1 {
        width: 260px;
        height: 140px;
        display: block;
        position: relative;
        top: -180px;
        right: -70px;
    }

    </style>

</head>

<body>

    <div id="color" class="contenedor-responsive">

        <h1 id="color-name">ESTETICA TORRES</h1>
        <ul class="nav-items">

            <a id="color-name2" href="Inicio">Pagina inicio </a>
            <a id="color-name2" href="#">Servicios </a>
            <a id="color-name2" href="#">Tratamiento </a>
            <a id="color-name2" href="#">Informacion</a>
            <a id="color-name2"> Servicios</a>
        </ul>
        <image class="img-fluid"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTebYhuV-1xuZH1V-xAaR3v7M0uKLr3nKd88g&usqp=CAU">
    </div>

    <div class="imagen1" id="linea" class="contenedor-responsive">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">

                <a class="btn btn-dark" href="#" role="button">MANICURE</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-dark" href="#" role="button">MAQUILLAJE</a>
            </li>


            <li class="nav-item">
                <a class="btn btn-dark" href="#" role="button">PEDIOCURE</a>
            </li>
        </ul>

    </div>

    <div class="imagen1" class="contenedor-responsive">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <img class="imagen1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoP22AxPpxHwOTCr5iff74G2KFIYMVlpJ-nQ&usqp=CAU">
            </li>
            <li class="nav-item">
                <img class="imagen1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpHd0HZCWSU4Qb1Xss71P3L_-gYawD0UaacQ&usqp=CAU">
            <li class="nav-item">
            </li>
            <li class="nav-item">
                <img class="imagen1"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDXjj9rVU-_d48QW1634oJqe18jhbJXksSCQ&usqp=CAU">
            </li>

    </div>

    <div id="linea1" class="contenedor-responsive">
        <ul class="nav nav-pills nav-fill">

            <li class="nav-item">
                <a class="btn btn-dark" href="#" role="button">CORTES</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-dark" href="#" role="button">DEPILACION</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-dark" href="#" role="button">MASAJES</a>
            </li>
        </ul>
    </div>

    <div class="imagen1" class="contenedor-responsive">
        <ul class="nav nav-pills nav-fill">
            <li  class="nav-item">
                <img id="imagen1"class="imagen"
                    src="data:image/jpeg;base64,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">
            </li>
            <li id="imagen1" class="nav-item">
                <img class="imagen1"
                    src="data:image/jpeg;base64,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">
            </li>
            <li  id="imagen1" class="nav-item">
                <img class="imagen1"
                    src="data:image/jpeg;base64,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">

            </li>
        </ul>
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