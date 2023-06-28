<?php session_start();

$fecha = $_POST['fecha'];
$id = $_POST['id'];


?>
<form id="Agregarcita" style="text-align: left;">
    <div class="mb-3">
        <label for="recipient-name" class="col-form-label">Fecha:</label>
        <span><?php echo $fecha; ?></span>
        <input type="hidden" value="<?php echo $fecha ;?>" disabled class="numerosale form-control" id="u1">
    </div>
    <?php

    $obj = new OperacionesBd;
    $s = "SELECT  DATE_FORMAT(horario, '%H:%i') AS horario FROM `horario` where id_horario = $id";
    $resultado = $obj->mostrardatos($s);
    $horario = $resultado[0]['horario'];

    ?>
    <div class="mb-3">
        <label for="recipient-name" class="col-form-label">hora:</label>
        <span><?php echo $horario; ?></span>
        <input type="hidden" value="<?php echo $id; ?>" disabled class="form-control" id="u2">
    </div>
    <div class="mb-3">
        <label for="recipient-name" class="col-form-label">Descripcion:</label>
        <input type="text" class="form-control" id="u3">
    </div>

    
    <input type="hidden" value="<?php echo  $_SESSION['id_persona']; ?>" class="form-control" id="u4">

</form>