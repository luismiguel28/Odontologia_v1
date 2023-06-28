<?php

$fecha = $_POST['fecha'];
?>
<h6 style="text-align: center;" id="fechaseleccionada"></h6> <br>
<?php



$obj = new OperacionesBd;
$s = "SELECT  DATE_FORMAT(horario, '%H:%i') AS horario,`id_horario` FROM `horario`";
$resultado = $obj->mostrardatos($s);
foreach ($resultado as $col) {
    $doc = $col['horario'];
    $id = $col['id_horario'];
    $sql = "SELECT COUNT(*) AS num_citas FROM cita ,horario WHERE cita.id_hora=horario.id_horario and Fecha_cita='$fecha' and horario.id_horario=$id; ";
    $resultado2 = $obj->mostrardatos($sql);

    if ($resultado2) {
         $fila = $resultado2[0]['num_citas'];
        if ($fila > 0) {
        ?>
            <button type="button mb-3"  disabled  class="btn " style="background-color: red; color:white;"><b> <?php echo $doc ?> </b></button><br><br>
        <?php
        } else {
        ?>
            <button type="button mb-3" onclick="var l = {'c1': 15 ,'fecha':'<?php  echo $fecha?>','id':<?php echo $id?> } ; visualisarp(l);" class="btn " style="background-color: #0da30d; color:white;"><b> <?php echo $doc ?> </b></button><br><br>
<?php
        }
    }
}

?>