<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EjemploMVC</title>
        <style>
            * {
                box-sizing: border-box;
            }

            input[type=text] {
                width:100%;
                padding: 12px;
                border: 4px solid #33ccff;
                border-radius: 4px;
                resize: vertical;
            }

            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
            }

            input[type=submit] {
                background-color: #33ccff;
                color: white;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
                float: right;
            }

            .container {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }

            .row:after {
                content: "";
                display: table;
                clear: both;
            }
        </style>
        <body>
            <header>
                <h2>Clientes</h2>
            </header>
            <div class="container">
                <form action="controladorcliente.php" method="POST">
                    <div class="row">
                        <div class="col-25">
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="nombre">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="apellidos">Apellidos</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="apellidos">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="direccion">Direccion</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="direccion">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="poblacion">Poblacion</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="poblacion">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="codigopostal">Codigo postal</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="codigopostal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="telefono">Telefono</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="telefono">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="email">Correo electronico</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="email">
                        </div>
                    </div>
                    <div class="row">
                        <input type="text" name="enviar" value="submit">
                    </div>
                </form>
            </div>
        </body>
    </head>
</html>