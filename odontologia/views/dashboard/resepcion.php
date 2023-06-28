<?php
session_start();
?>
<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
       
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class="  py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Motivo</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $idcita = $_SESSION['id_persona'];
                    $obj = new OperacionesBd;
                    $fechaActual = date("Y-m-d");
                    date_default_timezone_set('America/Mexico_City');
                    $horaActual = date("H:i");
                   
                    $sql = "SELECT id_cita, id_persona,CONCAT(personas.nombre, ' ', personas.apellidos) as nom,  descripcioncita, Fecha_cita,id_hora, DATE_FORMAT(horario.horario, '%H:%i') 
                           as horario, cita.estado from cita,horario,personas where personas.id_personas=cita.id_persona and cita.id_hora=horario.id_horario and (cita.estado = 0 OR cita.estado = 4 ) ";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $doc = $col['id_cita'];
                        $id = $col['id_persona'];
                        $nom = $col['descripcioncita'];
                        $ape = $col['Fecha_cita'];
                        $idh = $col['id_hora'];
                        $hora = $col['horario'];
                        $e = $col['estado'];
                        $no = $col['nom'];
                    ?>
                        <tr>
                            <td><?php echo $no ?></td>
                            <td><?php echo $ape ?></td>
                            <td><?php echo $hora ?></td>
                            <td><?php echo $nom ?></td>
                            <td style=" text-align: center; font-size: 15pt;">
                            <?php  if($e==0){ ?>
                                    <a href="javascript:eliminar(8, 6, 28,<?php echo $doc ?>)"> <b style="color: #ff0000;"><i class="bi bi-x-circle-fill"></i></b></a>
                                    <a href="javascript:eliminar(8, 6, 27,<?php echo $doc ?>)"> <b style="color: #19c37d;"><i class="bi bi-check-circle-fill"></i></b></a>
                            <?php } else {
                                echo 'Atendiendo';
                            }    ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>