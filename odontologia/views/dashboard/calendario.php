
<body>

    <div class="">
        <div class="conte">

            <div class="table-responsive border mt-4 px-4" style="background-color: white; border-radius: 20px; ">
                <table class="table table-responsive table-bordered mt-3 mb-4" id="tabla">
                    <thead>
                        <tr class="text-center " style="  border-color: transparent;">
                            <th colspan="1"> <a class="btn-ant fs-3 "  id="btn_prev"><i class="bi bi-calendar2-heart-fill"></i></a></th>
                            <th colspan="5">
                                <div class="row">
                                    <div class="col-6 text-end" ><h2 class=" mt-2 mes fs-3" id="mes"> Marzo</h2> </div>
                                    <div class="col-6 text-start"> <h2 class=" mt-2 mes fs-3" id="ano"> 2023</h2></div>
                                </div>
                            </th>
                            <th colspan="1"> <a class=" btn-pro fs-3 " id="btn_next"><i class=" bi bi-arrow-right-circle"></i></a></th>
                        </tr>
                        <tr class="text-center" style=" background-color: #ffcecf;">
                            <th class="c border" >D</th>
                            <th class="c border">L</th>
                            <th class="c border">M</th>
                            <th class="c border">M</th>
                            <th class="c border">J</th>
                            <th class="c border">V</th>
                            <th class="c border">S</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="dias">
                        <tr>
                            <td  class="d "></td>
                            <td class="d  "></td>
                            <td class="d "></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>

                        </tr>
                        <tr>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                        </tr>
                        <tr>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d"></td>
                            <td class="d">6</td>
                            <td class="d">7</td>
                        </tr>
                        <tr>
                            <td class="d">1</td>
                            <td class="d">2</td>
                            <td class="d">3</td>
                            <td class="d">4</td>
                            <td class="d">5</td>
                            <td class="d">6</td>
                            <td class="d">7</td>
                        </tr>
                        <tr>
                            <td class="d">1</td>
                            <td class="d">2</td>
                            <td class="d">3</td>
                            <td class="d">4</td>
                            <td class="d">5</td>
                            <td class="d">6</td>
                            <td class="d">7</td>
                        </tr>
                        <tr>
                            <td class="d">1</td>
                            <td class="d">2</td>
                            <td class="d">3</td>
                            <td class="d">4</td>
                            <td class="d">5</td>
                            <td class="d">6</td>
                            <td class="d">7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1"  id="ventana-modal">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header " style="border: white;" >
        <h5 class="modal-title"></h5>
        <button  type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body text-center"   >
        <p style=" color: #34a853; font-size: 14pt;"><b style=" color: #c71c12;">No se puede agendar una cita en un dia anterior del actual.</b> Seleccione otro dia</p>
      </div>
      <div class="modal-footer" style="height: 50px; border: white;">
      </div>
      
    </div>
  </div>
</div>



<div class="modal" tabindex="-1"  id="ventana-modal2">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header " style="border: white;" >
        <h5 class="modal-title"></h5>
        <button  type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close" ></button>
      </div>
      <div class="modal-body text-center"   >
      <p style="color: #34a853; font-size: 14pt;"><b style=" color: #c71c12;">No se puede agendar una cita en un dia inhábil.</b> Seleccione otro dia</p>
          <div class="motivo"></div>
         </div>
      <div class="modal-footer" style="height: 50px; border: white;">
      </div>
      
    </div>
  </div>
</div>
</body>

<!-- Modal formulario -->

<div class="modal fade" id="ventana-modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="   modal-header  ">
        <h5 class=" titulo modal-title" id="exampleModalLabel"  >Agregar Cita</h5>
        <button type="button" class="  btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       
      </div>
      <div class="modal-body">
        
          <div class="mb-3" style="text-align: center;" id="horas">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class=" btn btn-danger " data-bs-dismiss="modal" id="cerra">Cerrar</button>
        <button type="button" id="agre" onclick="agregar(8,6,25,'Agregarcita')"  class="btn btn-success" data-bs-dismiss="modal">Agregar</button>
      </div>
    </div>
  </div>
</div>
