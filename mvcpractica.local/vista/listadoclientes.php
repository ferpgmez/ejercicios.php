<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <title>Listado clientes</title>
    </head>
    <body>
        <header>
            <h2>Listado clientes</h2>
        </header>
        <section>
            <?php require_once 'modelo/clientes.php'?>
            <?php require_once 'modelo/conexion.php'?>
            <?php require_once 'controlador/cliente/controladorcliente.php'?>
            <?php foreach($clientes as $cliente) {?>
            <?php echo $cliente->id_cliente;?> -
            <?php echo $cliente->nombre;?>
            <?php echo $cliente->apellidos;?>
            <?php echo $cliente->direccion;?>
            <?php echo $cliente->poblacion;?>
            <?php echo $cliente->codigopostal;?>
            <?php echo $cliente->telefono;?>
            <?php echo $cliente->email;}?>
            
        <section>
    </body>
</html>