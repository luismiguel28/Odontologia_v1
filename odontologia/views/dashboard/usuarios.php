<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="modal(3)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
                <button type="button" onclick="modal(5)" class="btn " style="background-color: #ffc107; color:white;"><b>AGREGAR PERSONAL</b></button>
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
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Fecha de nacimiento</th>
                        <th>Rol</th>
                        <th>Password</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = "SELECT id_personas, nombre, apellidos, direccion,email,telefono, fe_nacimiento,no_documento,id_rol,passsword,estado 
                            from personas";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $doc = $col['no_documento'];
                        $id = $col['id_personas'];
                        $nom = $col['nombre'];
                        $ape = $col['apellidos'];
                        $dir = $col['direccion'];
                        $email = $col['email'];
                        $tel = $col['telefono'];
                        $nac = $col['fe_nacimiento'];
                        $rol = $col['id_rol'];
                        $pass = $col['passsword'];
                        $est = $col['estado'];
                    ?>
                        <tr>
                            <td><?php echo $doc ?></td>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $ape ?></td>
                            <td><?php echo $dir ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $tel ?></td>
                            <td><?php echo $nac ?></td>
                            <td><?php if ($rol == 1) {
                                    echo "Paciente";
                                } else if ($rol == 2) {
                                    echo "Administrador";
                                } else if ($rol == 3) {
                                    echo "Asistente";
                                } else if ($rol == 4) {
                                    echo "Doctor";
                                }  ?></td>
                            <td><?php echo $pass ?></td>
                            <td><?php if ($est == 0) {
                                    echo "INACTIVO";
                                } else if ($est == 1) {
                                    echo "ACTIVO";
                                } ?></td>
                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:eliminar(3, 6, 12,<?php echo $id ?>)"><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <a href="javascript:agregarmod(3, 6, 13,<?php echo $id ?>)" class="px-3"><i class=" icoact  bi bi-pencil-square" style="color: green;"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal formulario -->

<div class="modal fade " id="usu1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Usuario</h5>
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
                <button type="button" onclick="agregar(3,6,11,'formusu')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade " id="usu3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Usuario</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formusu2">
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
                <button type="button" onclick="agregar(5,6,20,'formusu2')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade " id="usu2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formusu3">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class="form-control" id="au1">
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
                        <label for="recipient-name" class="col-form-label">Correo:</label>
                        <input type="email" class="form-control" id="au5">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="au6">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="au7">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Rol:</label>
                        <select class="form-control" id="au8" onclick="mostrarinput()">
                            <option><-- Selecciona un rol ->></option>
                            <option value="1">Paciente</option>w
                            <option value="2">Administrador</option>
                            <option value="3">Asistente</option>
                            <option value="4">Doctor</option>
                        </select>
                    </div>
                    <div id="campos-doctor" style="display: none;">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Area:</label>
                            <select class="form-control" id="au13"> </select>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha de contrato:</label>
                            <input type="date" disabled class="form-control" id="au14">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Especialidad:</label>
                            <input type="text" class="form-control" id="au15">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="au9">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" id="au10">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Confirmar Password:</label>
                        <input type="password" class="form-control" id="au11">
                    </div>
                    <input type="hidden" class="form-control" id="au12">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="actualizar(3,6,14,'formusu3')" class="btn btn-success" data-bs-dismiss="modal">Actualizar</button>
            </div>
        </div>
    </div>
</div>