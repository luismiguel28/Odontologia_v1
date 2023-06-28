<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="modal(7)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class="  py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>No. Documento</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Fecha de nacimiento</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = "SELECT  `id_personas`,`nombre`,`apellidos`,`direccion`,`telefono`,`no_documento`,`fe_nacimiento` FROM `personas` where id_rol=1 and estado=1; ";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $doc = $col['no_documento'];
                        $id = $col['id_personas'];
                        $nom = $col['nombre'];
                        $ape = $col['apellidos'];
                        $dir = $col['direccion'];
                        $tel = $col['telefono'];
                        $nac = $col['fe_nacimiento'];
                    ?>
                        <tr>
                            <td><?php echo $doc ?></td>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $ape ?></td>
                            <td><?php echo $dir ?></td>
                            <td><?php echo $tel ?></td>
                            <td><?php echo $nac ?></td>

                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:eliminar(6, 6, 22,<?php echo $id ?>)"><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <a href="javascript:agregarmod(6, 6, 13,<?php echo $id ?>)" class="px-3"><i class=" icoact  bi bi-pencil-square" style="color: green;"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<div class="modal fade " id="pa1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Paciente</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formusu">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class="numerosale form-control" id="u1">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="u2">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="u3">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="u4">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="u5">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="u6">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="u7">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="hidden" disabled id="u8" value="1">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="u9">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="u10">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirmar Password:</label>
                        <input type="password" class="form-control" id="u11">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="agregar(7,6,11,'formusu')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade " id="pa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Actualizar Paciente</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formusu2">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class="numerosale form-control" id="au1">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="au2">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="au3">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="au4">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="au6">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="au7">
                    </div>
                    <input type="hidden" class="form-control" id="au12">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="actualizar(6,6,23,'formusu2')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>