<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Galeria</h3>
    <?php
    require_once 'src/ClienteDAO.php';
    $clientes = ClienteDAO::listar();

    foreach ($clientes as $clientes){

    
    ?>
</body>
</html>