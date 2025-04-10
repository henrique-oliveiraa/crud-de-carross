<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>

<body>
    <fieldset>

    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid" >
    <a class="navbar-brand" href="#" >Registros de Carros</a>
  </div>
</nav>


        <form action="/Carro/form/save" method="post">

            <input type="hidden" name="id" readonly value="<?= $model->id ?>">

            <label for="marca">Marca do Carro:</label>
            <input type="text" id="Marca" name="Marca" value="<?= $model->Marca ?>">

            <label for="nomeCarro">Nome do Carro:</label>
            <input type="text" id="nomeCarro" name="nomeCarro" value="<?= $model->nomeCarro ?>">

            <label for="Quilometro">Quilometragem do Carro:</label>
            <input type="number" id="Quilometros" name="Quilometros" value="<?= $model->Quilometros ?>">

            <label for="Ano">Ano:</label>
            <input type="number" id="Ano" name="Ano" value="<?= $model->Ano ?>">

            <button type="submit">Salvar</button>

        </form>

        <style>

    .label .input {
        margin-top: -20px;
}

        </style>



    </fieldset>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>
</html>