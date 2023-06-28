<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="modal(6)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class="  py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>No. Documento</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Area</th>
                        <th>Especialidad</th>
                        <th>Contrato</th>
                        <th>Rol</th>
                        <th>Correo</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = " SELECT id_personas, no_documento,nombre,apellidos,id_rol,area.nombrea,email,fecha_contrato,especialidad,estado 
                                 FROM personas,area where id_rol != 1 and area.id_area= personas.id_area and estado=1;";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $doc = $col['no_documento'];
                        $idr = $col['id_personas'];
                        $nom = $col['nombre'];
                        $ape = $col['apellidos'];
                        $area = $col['nombrea'];
                        $email = $col['email'];
                        $rol = $col['id_rol'];
                        $fe = $col['fecha_contrato'];
                        $esp = $col['especialidad'];
                        $est = $col['estado'];
                    ?>
                        <tr>
                            <td><?php echo $doc ?></td>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $ape ?></td>
                            <td><?php echo $area ?></td>
                            <td><?php echo $esp ?></td>
                            <td><?php echo $fe ?></td>
                            <td><?php if ($rol == 1) {
                                    echo "Paciente";
                                } else if ($rol == 2) {
                                    echo "Administrador";
                                } else if ($rol == 3) {
                                    echo "Asistente";
                                } else if ($rol == 4) {
                                    echo "Doctor";
                                }  ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php if ($est == 0) {
                                    echo "INACTIVO";
                                } else if ($est == 1) {
                                    echo "ACTIVO";
                                } ?></td>
                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:eliminar(5, 6, 22,<?php echo $idr ?>)"><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <a href="javascript:agregarmod(5, 6, 13,<?php echo $idr ?>)" class="px-3"><i class=" icoact  bi bi-pencil-square" style="color: green;"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal formulario -->

<div class="modal fade " id="pers2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Personal</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formper">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class="form-control" id="u1">
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
                        <label for="recipient-name" class="col-form-label">Area:</label>
                        <select class="form-control" id="u4"> </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Especialidad:</label>
                        <input type="email" class="form-control" id="u5">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Contrato:</label>
                        <input type="date" disabled class="form-control" id="u6">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Rol:</label>
                        <select class="form-control" id="u7">
                            <option><-- Selecciona un rol ->></option>
                            <option value="2">Administrador</option>
                            <option value="3">Asistente</option>
                            <option value="4">Doctor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Correo</label>
                        <input type="text" class="form-control" id="u8">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="u9">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                    <input type="hidden" class="form-control" id="u10">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="actualizar(5,6,21,'formper')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade " id="pers" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formper2">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class=" numerosale form-control" id="wu1">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="wu2">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="wu3">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="wu4">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="wu5">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="wu6">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="wu7">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Rol:</label>
                        <select class="form-control" id="wu8">
                            <option><-- Selecciona un rol ->></option>
                            <option value="2">Administrador</option>
                            <option value="3">Asistente</option>
                            <option value="4">Doctor</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Area:</label>
                        <select class="form-control" id="wu12"> </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de contrato:</label>
                        <input type="date" disabled class="form-control" id="uw13">
                    </div>

                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Especialidad:</label>
                        <input type="text" class="form-control" id="uw14">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="wu9">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="wu10">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirmar Password:</label>
                        <input type="password" class="form-control" id="wu11">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="agregar(6,6,20,'formper2')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>