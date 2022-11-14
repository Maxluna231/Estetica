<!-- Define que el documento esta bajo el estandar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        
        <title> Formulario de Acceso </title>    
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        <!-- Link hacia el archivo de estilos css -->
        <link rel="stylesheet" href="../css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <script type="text/javascript">
        
        </script>
        
    </head>
    
    <body>
    
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form action="<?=base_url('index.php/Usuario/pasa')?>" method="POST" >
                        <label for="usuario">Correo</label>
                        <input class="input-box" id="CorreoElectronico" type="email" name="CorreoElectronico" placeholder="Correo" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="Contrasenia" required>
                        
                        <button type="submit" title="Ingresar" name="Ingresar">Acceder</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="index.php/RegistrosC/FormularioRegistros">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="#">« Volver</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>