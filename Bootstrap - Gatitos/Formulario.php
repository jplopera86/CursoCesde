<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            Gatitos
        </title>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
    </head>
    <body>
        <header>
            <!-- barra de navegación con Image and text -->
            <nav class="navbar navbar-light barra-nav">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Gatitos
                </a>
            </nav>
        </header>
        <section>
            <div class="container registro">
                <form>
                    <div class="row">
                        <div class="col">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
                        </div>
                        <div class="col">
                            <label for="apellido">
                                Apellido
                            </label>
                            <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" name="Apellido">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="pais">
                                País
                            </label>
                            <input type="text" class="form-control" placeholder="Ingrese país" id="pais" name="pais">
                        </div>
                        <div class="col">
                            <label for="departamento">
                                Departamento
                            </label>
                            <input type="text" class="form-control" placeholder="Ingrese departamento" id="departamento" name="departamento">
                        </div>
                        <div class="col">
                            <label for="ciudad">
                                Ciudad
                            </label>
                            <input type="text" class="form-control" placeholder="Ingrese ciudad" id="ciudad" name="ciudad">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="telefono">
                                Teléfono
                            </label>
                            <input type="text" class="form-control" placeholder="Ingrese teléfono" id="telefono" name="telefono">
                        </div>
                        <div class="col">
                            <label for="correo">
                                Correo
                            </label>
                            <input type="email" class="form-control" placeholder="Ingrese correo" id="correo" name="correo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-enviar">
                        Completar Registro
                    </button>
                </form>
            </div>
        </section>
        <?php
            // put your code here
        ?>
        <footer>
            <div class="container-fluid style-footer">
                &copy derechos reservados
            </div>
        </footer>
        <script src="js/jquery-3.3.1.min.js">
            
        </script>
        <script src="js/popper.min.js">
            
        </script>
        <script src="js/bootstrap.min.js">
            
        </script>
    </body>
</html>
