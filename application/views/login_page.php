<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso de Usuarios</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>

<body>

    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">
            <img src="img/cover.png" alt="">
            <h1>Bienvenido !</h1>
            <h3>Actualmente tienes una cuenta ?</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
            <a href="index.php/CambioPass/CambioPassV">Se te olvido la contraseña?</a>
        </div>
        <div id="left-form" class="form fade-in-element">


            <form action="<?php echo base_url(); ?>index.php/user/login" method="post" class="elementor-element elementor-element-953c566 animated-fast elementor-widget elementor-widget-text-editor animated fadeInUp">
                <center><img src="img/logo1.jpeg" redonded alt="" width="260"></center>
                <input type="email" name="CorreoElectronico" class="input-box" placeholder="Correo" required>
                <input type="password" name="Contrasenia" class="input-box" placeholder="Contraseña" required>
                <input type="submit" name="login-btn" class="btn" value="Ingresar">
            </form>


            <?php
				if($this->session->flashdata('error')){
					?>
            <div class="alert alert-danger text-center" style="margin-top:20px;">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php
				}
			?>
            <a href="" right="50px">¿Se te olvido la contraseña?</a>
        </div>

    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPyrWju5ipIipYD8-RxAzHyqSFGrtwZIbh53mW0dlZXCOyk7ZZLzgezHf4o11Zdd7X2f4&usqp=CAU"
                alt="">
            <h1>Bienvenido !</h1>
            <h3><b> No tienes una cuenta ?</b></h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Crear Cuenta</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>Alta de Usuario</h1>
            <form action="<?=base_url('index.php/RegistrosC/FormularioRegistros')?>" method="post">
                <input type="text" name="Nombre" class="input-box" placeholder="Nombre" required>
                <input type="text" name="ApellidoPaterno" class="input-box" placeholder="Primer Apellido" required>
                <input type="text" name="ApellidoMaterno" class="input-box" placeholder="Segundo Apellido" required>
                <input type="email" name="CorreoElectronico" class="input-box" placeholder="Correo" required>
                <input type="password" name="Contrasenia" class="input-box" placeholder="Contraseña" required>
                <input type="submit" name="signup-btn" class="btn" value="Aceptar">
            </form>
            <?php
				if($this->session->flashdata('true')){
					?>
            <div class="alert alert-danger text-center" style="margin-top:20px;">
                <?php echo $tempdata = array('newuser' => TRUE, 'message' => 'Thanks for joining!'); ?>
            </div>
            <?php
				}
			?>
        </div>
    </section>

    <script src="js/main.js"></script>

</body>

</html>