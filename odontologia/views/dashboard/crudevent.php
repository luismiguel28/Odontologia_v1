<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="modal(1)" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class=" py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Motivo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = "SELECT 	idev, fechaev, motivo FROM eventos ";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $id = $col['idev'];
                        $fecha = $col['fechaev'];
                        $motivo = $col['motivo'];
                    ?>
                        <tr>
                            <td><?php echo $fecha ?></td>
                            <td><?php echo $motivo ?></td>
                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:eliminar(1, 6, 2,<?php echo $col['idev'] ?>)" ><i class=" icode bi  bi-trash3-fill" style="color: red;"></i></a>
                                <a href="javascript:agregarmod(1, 6, 3,<?php echo $id ?>)" class="px-3"  ><i class=" icoact  bi bi-pencil-square" style="color: green;"></i></a>
                            </td>
                        </tr>
                    <?php } ?>       
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal formulario -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="   modal-header  ">
        <h5 class=" titulo modal-title" id="exampleModalLabel"  >Agregar Evento</h5>
        <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       
      </div>
      <div class="modal-body">
        <form id="formevent">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input type="date" class="form-control" id="d1">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Motivo:</label>
            <input type="text" class="form-control" id="d2">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="agregar(1,6,1,'formevent')" class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="   modal-header  ">
        <h5 class=" titulo modal-title" id="exampleModalLabel"  >Actualizar Evento</h5>
        <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       
      </div>
      <div class="modal-body">
        <form id="crudform">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Fecha:</label>
            <input type="date" class="form-control" id="fecha">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Motivo:</label>
            <input type="text" class="form-control" id="motivo">
          </div>
            <input type="hidden" class="form-control" id="id">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button"  class=" btn btn-danger " data-bs-dismiss="modal">Cerrar</button>
        <button type="button"  onclick="actualizar(1,6,5,'crudform')" class="btn btn-success" data-bs-dismiss="modal">Actualizar</button>
      </div>
    </div>
  </div>
</div>