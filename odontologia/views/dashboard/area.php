<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="modal(4)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class=" py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = "SELECT 	id_area, nombrea, descripciona,estadoa FROM area ";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $id = $col['id_area'];
                        $area = $col['nombrea'];
                        $descr = $col['descripciona'];
                        $est = $col['estadoa'];
                    ?>
                        <tr>
                            <td><?php echo $area ?></td>
                            <td><?php echo $descr ?></td>
                            <td><?php if($est == 0){  echo "Inactivo"; } else if ($est==1){echo "Activo";}?></td>
                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:eliminar(4, 6, 16,<?php echo $id ?>)"><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <a href="javascript:agregarmod(4, 6, 17,<?php echo $id ?>)" class="px-3"><i class=" icoact  bi bi-pencil-square" style="color: green;"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal formulario -->

<div class="modal fade" id="area1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Agregar Area</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formarea">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="a1">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="a2">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="a3">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="agregar(4,6,15,'formarea')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="area2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="   modal-header  ">
                <h5 class=" titulo modal-title" id="exampleModalLabel">Actualizar Evento</h5>
                <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
            <div class="modal-body">
                <form id="formarea2">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" class="form-control" id="a4">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="a5">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Estado:</label>
                        <select class="form-control" id="a6">
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                    <input type="hidden" class="form-control" id="a7">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
                <button type="button" onclick="actualizar(4,6,18,'formarea2')" class="btn btn-success" data-bs-dismiss="modal">Actualizar</button>
            </div>
        </div>
    </div>