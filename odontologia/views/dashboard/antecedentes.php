<div class=" border mt-4 bg-white rounded-3">
    <div class="  px-4 py-4">
        <div class="w-100   mb-4" style="border-bottom: 1px solid #bbbec5; ">
            <div class="btn-group mb-3  " role="group" aria-label="Basic mixed styles example">
                <button type="button" onclick="" class="btn " style="background-color: #00bbe6; color:white;"><b>AGREGAR NUEVO</b></button>
            </div>
        </div>
        <div class=" table-responsive py-1 px-1 ">
            <table id="miTabla" class="  py-3 table table-striped table-bordered w-100">
                <thead>
                    <tr>
                        <th>No. Documento</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Antecedentes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $obj = new OperacionesBd;
                    $sql = "SELECT DISTINCT antecedentes.id_personas, personas.no_documento, personas.nombre, personas.apellidos FROM 
                            antecedentes, personas where antecedentes.id_personas= personas.id_personas; ";
                    $resultado = $obj->mostrardatos($sql);
                    foreach ($resultado as $col) {
                        $doc = $col['no_documento'];
                        $id = $col['id_personas'];
                        $nom = $col['nombre'];
                        $ape = $col['apellidos'];
                    ?>
                        <tr>
                            <td><?php echo $doc ?></td>
                            <td><?php echo $nom ?></td>
                            <td><?php echo $ape ?></td>
                            <td style=" text-align: center; font-size: 15pt;"><a href="javascript:modal(8); agregarmod(7, 6, 24,<?php echo $id ?>) "><i class=" icode bi bi-file-text" style="color: #707070;">hh</i></a>
                            </td>
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


<div class="modal" id="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Antecedentes</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body container-fluid">
        <div id="paciente"> 
            <ul class="list-unstyled mb-3 mb-md-0">
                <li id="no"> </li>
                <li id="n">
                    
                    <p ></p>
                </li>
                <li id="a">
                    
                    
                </li>
            </ul>
        </div>
        <br>
        <h6>Antecedentes Personales</h6>
        <div id="personales">
            <textarea id="per" class="form-control" disabled style=" border:none; "> </textarea>
        </div>
        <h5></h5>
        <h6>Antecedentes Familiares</h6>
        <div id="familiares">
        <textarea id="fam" class="form-control" disabled style=" border:none; "></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary"  id="hola">Close</button>
      </div>
    </div>
  </div>
</div>