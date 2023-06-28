<?php
session_start();
?>
<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="validar(3)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class="  py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Motivo</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $idcita = $_SESSION['id_persona'];
                    $obj = new OperacionesBd;
                    $sql = "SELECT id_cita, id_persona,CONCAT(personas.nombre, ' ', personas.apellidos) as nom,  descripcioncita, Fecha_cita,id_hora, DATE_FORMAT(horario.horario, '%H:%i') 
                           as horario, cita.estado from cita,horario,personas where personas.id_personas=cita.id_persona and cita.id_hora=horario.id_horario and cita.estado=0";
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
                            <td><?php if ($e == 1) {
                                    echo 'Atendido';
                                } else if ($e == 0) {
                                    echo 'Por Atender';
                                } else if ($e == 2) {
                                    echo 'No Asistio';
                                } ?></td>
                            <td style=" text-align: center; font-size: 15pt;">
                                <?php if ($e == 0 || $e == 4 ) { ?>
                                    <a href="javascript:eliminar(7, 6, 26,<?php echo $doc ?>)"><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <?php } else if ($e == 1) { ?>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="No puedes realizar cambios. atendido">
                                        <b style="color: #19c37d;"><i class="bi bi-check-circle-fill"></i></b>
                                    </span>
                                    <script>
                                        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                                        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                                            return new bootstrap.Popover(popoverTriggerEl)
                                        })
                                    </script>
                                <?php } else if ($e == 2) { ?>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-content="No puedes realizar cambios. no asistes">

                                        <b style="color: #ff0000;"><i class="bi bi-x-circle-fill"></i></b>
                                    </span>
                                    <script>
                                        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
                                        var popoverList = popoverTriggerList.map(function(popoverTriggerEl) {
                                            return new bootstrap.Popover(popoverTriggerEl)
                                        })
                                    </script>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>