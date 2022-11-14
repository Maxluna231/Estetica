<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>

    body {
background-color:black;
    } 
.contenedor {
    background-color:rgb(5,5,3);
    padding: -40px;
}

.contenedor1 {
    background-color:rgb(5,5,3);
    padding: 1px;
}

.contenedor1 {
    background-color:rgb(5,5,3);
    padding: 1px;
}
#color-name {
    font-family:Bold;
    color:purple;
    padding: 20px;
    text-indent:150px;
    text-shadow: 1px 1px 1px red;
    font-size: 25px;
    right: 15px;
}

#color-name2 {
    font-family:Arial;
    color:aqua;
    text-indent:140px;
    font-size: 20px;
    right: 25px;
}


#linea{
    font-family:Bold;
    text-indent:1px;
    font-size: 90px;
  
}

#linea1{
    font-family:Bold;
    text-indent:1px;
    font-size: 100px;
    right: 25px;
}
.nav-items {
  display: flex;
}

.img-fluid{
    width: 150px;
height: 120px;
display: block;
position: relative;
top: -100px;
right: 20px

}
    </style>
    
</head>
<body>

<div class="contenedor-responsive">
    
<ul>
	<h1 id="color-name" >ESTETICA TORRES</h1>
    <ul class="nav-items">
    
    <a id="color-name2" href="Inicio">Pagina inicio </a>
    <a id="color-name2" href="#">Servicios </a>
    <a id="color-name2" href="#">Tratamiento </a>
    <a id="color-name2" href="#">Informacion</a>
    <a id="color-name2" > Servicios</a>

     </ul>
     
     <image class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTebYhuV-1xuZH1V-xAaR3v7M0uKLr3nKd88g&usqp=CAU">

     <div id="linea" class="contenedor-responsive">
<a class="btn btn-dark"  href="#" role="button">MANICURE</a>
<a class="btn btn-dark"  href="#" role="button">MAQUILLAJE</a>
<a class="btn btn-dark"  href="#" role="button">PEDIOCURE</a>
</div>

<div id="linea1"class="contenedor-responsive">
<a class="btn btn-dark"  href="#" role="button">CORTES</a>
<a class="btn btn-dark"  href="#" role="button">DEPILACION</a>
<a class="btn btn-dark"  href="#" role="button">MASAJES</a>
</div>

</div>

</body>
</html>

