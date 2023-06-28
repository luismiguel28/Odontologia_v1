<?php

 $_POST['id'];

?>

<div class="container">
    <ul class="nav nav-tabs" id="pestanas">
        <li class="nav-item">
            <a class="nav-link active" id="pestaña1" data-toggle="tab" href="#contenido1">Datos paciente</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pestaña0" data-toggle="tab" href="#contenido0">Historia Medica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña3" data-toggle="tab" href="#contenido3">Historia Estomatogica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña4" data-toggle="tab" href="#contenido4">Examen Extraoral</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña5" data-toggle="tab" href="#contenido5">Examen Intraoral</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña8" data-toggle="tab" href="#contenido8">Examen de Oclucion</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña6" data-toggle="tab" href="#contenido6">Odontograma</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pestaña7" data-toggle="tab" href="#contenido7">Diagnostico</a>
        </li>
    </ul>
    <div class="tab-content" id="contenidoPestanas">
        <div class="tab-pane fade show active" id="contenido1" style="text-align: left; ">
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Datos paciente</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">No. Documento:</label>
                        <input type="text" disabled class="form-control" id="" value="67477644">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre completo:</label>
                        <input type="text" disabled class="form-control" id="" value="Aracely Martinez">
                    </div>
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Fecha de nacimiento:</label>
                        <input type="text" disabled class="form-control" id="" value="28-09-1999">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Domicilio:</label>
                        <input type="text" disabled class="form-control" id="" value="Tamazunchale SLP">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" disabled class="form-control" id="" value="4831317299">
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
        </div>
        <div class="tab-pane fade" id="contenido0">
            <!-- Contenido de la pestaña 3 -->
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Historia Medica</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6 mt-3">
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Su estado de salud es bueno?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="p1s" value="1">
                            <label class="form-check-label" for="p1s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="p1n" value="0">
                            <label class="form-check-label" for="p1">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Esta embarazada?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="p2s" value="1">
                            <label class="form-check-label" for="p2s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions1" id="p2n" value="0">
                            <label class="form-check-label" for="p2n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Esta tomando algun medicamento?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="p3s" value="1">
                            <label class="form-check-label" for="p3s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="p3n" value="0">
                            <label class="form-check-label" for="p3n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Tiene problemas de cuagulacion?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="p4s" value="1">
                            <label class="form-check-label" for="p4s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="p4n" value="0">
                            <label class="form-check-label" for="p4n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Ha padecido epatitis o tuberculosis?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="p5s" value="1">
                            <label class="form-check-label" for="p5s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions4" id="p5n" value="0">
                            <label class="form-check-label" for="p5n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Enfermedades cardiacas?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="p6s" value="1">
                            <label class="form-check-label" for="p6s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions5" id="p6n" value="0">
                            <label class="form-check-label" for="p6n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Padece asma?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="p7s" value="0">
                            <label class="form-check-label" for="p7s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions6" id="p7n" value="1">
                            <label class="form-check-label" for="p7n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Esta siendo tratado por su medico?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="p8s" value="0">
                            <label class="form-check-label" for="p8s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions7" id="p8n" value="1">
                            <label class="form-check-label" for="p8n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Es alergico a algun medicamento?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="p10s" value="0">
                            <label class="form-check-label" for="p10s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions8" id="p10n" value="1">
                            <label class="form-check-label" for="p10n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Le han aplicado anastesico?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="p11s" value="option1">
                            <label class="form-check-label" for="p11s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions9" id="p11n" value="option2">
                            <label class="form-check-label" for="p11n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Ha tenido intervenciones QX?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="p12s" value="option1">
                            <label class="form-check-label" for="p12s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions10" id="p12n" value="option2">
                            <label class="form-check-label" for="p12n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Es usted diabetico?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="p13s" value="option1">
                            <label class="form-check-label" for="p13s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions11" id="p13n" value="option2">
                            <label class="form-check-label" for="p13n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Ha sufrido convulsiones?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="p14s" value="option1">
                            <label class="form-check-label" for="p14s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions12" id="p14n" value="option2">
                            <label class="form-check-label" for="p14n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Ha sufrido tranfuciones sanguineas?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="p15s" value="option1">
                            <label class="form-check-label" for="p15s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions13" id="p15n" value="option2">
                            <label class="form-check-label" for="p15n">No</label>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
            <!-- Aquí puedes agregar tus campos y elementos HTML para capturar y mostrar los datos -->
        </div>
        <div class="tab-pane fade" id="contenido3">
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Historia Estomatogica</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="  row mb-3 mt-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Ha tenido accidentes que afecten sus dientes?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions16" id="h1s" value="1">
                            <label class="form-check-label" for="h1s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions16" id="h1n" value="0">
                            <label class="form-check-label" for="h1">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Le sangran las encias?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions17" id="h2s" value="1">
                            <label class="form-check-label" for="h2s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions17" id="h2n" value="0">
                            <label class="form-check-label" for="h2n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿padese bruxismo?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions18" id="h3s" value="1">
                            <label class="form-check-label" for="h3s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions18" id="h3n" value="0">
                            <label class="form-check-label" for="h3s">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿ha padecido herpes?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions19" id="h4s" value="1">
                            <label class="form-check-label" for="h4s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions19" id="h4n" value="0">
                            <label class="form-check-label" for="h4n">No</label>
                        </div>
                    </div>
                    <div class="  row mb-3">
                        <div class=" col-sm-9">
                            <label for="recipient-name" class="border px-3">¿Se cepilla los dientes?</label>
                        </div>
                        <div style="text-align: right; " class=" col-sm-3">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions20" id="h5s" value="1">
                            <label class="form-check-label" for="h5s">Sí</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions20" id="h5n" value="0">
                            <label class="form-check-label" for="h5n">No</label>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
        </div>
        <div class="tab-pane fade" id="contenido4" style="text-align: left; ">
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Examen Extraoral</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Peso actual:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Talla:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Estado general:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">ATM:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Ganglios y otras masas :</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Musculatura fasial :</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
        </div>
        <div class="tab-pane fade" id="contenido5">
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Examen Intraoral</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Labios:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Vestibulo:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Paladar:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Lengua:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Orofaringe:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Piso de boca:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Proceso Alveolares:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
        </div>
        <div class="tab-pane fade" id="contenido8">
            <div class="row mt-3 mb-3 ">
                <h4 style="text-align: center; ">Examen de Oclucion</h4>
                <div class=" col-sm-3"></div>
                <div class=" col-sm-6">
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Relacion molar:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Relacion canina:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3 ">
                        <label for="recipient-name" class="col-form-label">Sobremordida horizontal:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Sobremordida vertical:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Mordida bruxismo:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Observaciones:</label>
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class=" col-sm-3"></div>
            </div>
            <!-- Aquí puedes agregar tus campos y elementos HTML para capturar y mostrar los datos -->
        </div>
        <div class="tab-pane fade" id="contenido6">




        <style>
        .odontograma {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .cuadrante h2 {
            margin: 0;
            font-size: 18px;
        }

        .diente {
            width: 35px;
            height: 35px;
            border: 1px solid #75beff;
            border-radius: 10%;
            color: #75beff;
            display: inline-block;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 5px;
            text-align: center;
        }

        .diente:hover {
            background-color: #ccc;
        }

        .diente.modificado {
            background-color: #f8db8d;
        }

        .diente.extraido {
            background-color: #ff5757;
            color: white;
        }

        .a {
            color: #278316;
        }

        .b{
            color: #b80202;
        }

        .c {
            color: #033c86;
        }
        .d {
            color: #5313a7;
        }
        .e {
            color: #8e1090;
        }
        .f {
            color: #a71380;
        }
        .diente.g {
            background-color: #278316;
            color: white;
        }

        .diente.h{
            background-color: #b80202;
            color: white;
        }

        .diente.i {
            background-color: #033c86;
            color: white;
        }
        .diente.j {
            background-color: #5313a7;
            color: white;
        }
        .diente.k {
            background-color: #8e1090;
            color: white;
        }
        .diente.l {
            background-color: #cb487f;
            color: white;
        }
        .izquierda {
            text-align: right;
        }

        .derecho {
            text-align: left;
        }
    </style>
    <div class="container-fluid  mt-4">
        <div class="odontograma">
            <div class="cuadrante izquierda">
                <div class="diente">18</div>
                <div class="diente">17</div>
                <div class="diente">16</div>
                <div class="diente">15</div>
                <div class="diente">14</div>
                <div class="diente">13</div>
                <div class="diente">12</div>
                <div class="diente">11</div>
            </div>
            <div class="cuadrante derecho">
                <div class="diente">21</div>
                <div class="diente">22</div>
                <div class="diente">23</div>
                <div class="diente">24</div>
                <div class="diente">25</div>
                <div class="diente">26</div>
                <div class="diente">27</div>
                <div class="diente">28</div>
            </div>

            <div class="cuadrante izquierda">
                <div class="diente" style="border-radius: 50%;">55</div>
                <div class="diente" style="border-radius: 50%;">54</div>
                <div class="diente" style="border-radius: 50%;">53</div>
                <div class="diente" style="border-radius: 50%;">52</div>
                <div class="diente" style="border-radius: 50%;">51</div>
            </div>
            <div class="cuadrante derecho">
                <div class="diente" style="border-radius: 50%;">61</div>
                <div class="diente" style="border-radius: 50%;">62</div>
                <div class="diente" style="border-radius: 50%;">63</div>
                <div class="diente" style="border-radius: 50%;">64</div>
                <div class="diente" style="border-radius: 50%;">65</div>
            </div>
            <div class="cuadrante izquierda">
                <div class="diente" style="border-radius: 50%;">85</div>
                <div class="diente" style="border-radius: 50%;">84</div>
                <div class="diente" style="border-radius: 50%;">83</div>
                <div class="diente" style="border-radius: 50%;">82</div>
                <div class="diente" style="border-radius: 50%;">81</div>
            </div>
            <div class="cuadrante derecho">
                <div class="diente" style="border-radius: 50%;">71</div>
                <div class="diente" style="border-radius: 50%;">72</div>
                <div class="diente" style="border-radius: 50%;">73</div>
                <div class="diente" style="border-radius: 50%;">74</div>
                <div class="diente" style="border-radius: 50%;">75</div>
            </div>
            <div class="cuadrante izquierda">
                <div class="diente">48</div>
                <div class="diente">47</div>
                <div class="diente">46</div>
                <div class="diente">45</div>
                <div class="diente">44</div>
                <div class="diente">43</div>
                <div class="diente">42</div>
                <div class="diente">41</div>
            </div>
            <div class="cuadrante derecho">
                <div class="diente">31</div>
                <div class="diente">32</div>
                <div class="diente">33</div>
                <div class="diente">34</div>
                <div class="diente">35</div>
                <div class="diente">36</div>
                <div class="diente">37</div>
                <div class="diente">38</div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-2">
                <h6>diente ausente<i class="bi bi-circle-fill px-2 a"></i></h6> 
            </div>
            <div class="col-sm-2">
                <h6>caries<i class="bi bi-circle-fill px-2 b"></i></h6>
            </div>
            <div class="col-sm-2">
                <h6>corona buen estado<i class="bi bi-circle-fill px-2 c"></i></h6>
            </div>
            <div class="col-sm-2">
                <h6>corona mal estado<i class="bi bi-circle-fill px-2 d"></i></h6>
            </div>
            <div class="col-sm-2">
                <h6>obturacion en mal estado<i class="bi bi-circle-fill px-2 e"></i></h6>
            </div>
            <div class="col-sm-2">
                <h6>fractura de corona <i class="bi bi-circle-fill px-2 f"></i></h6>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalEstadoDiente" tabindex="-1" aria-labelledby="modalEstadoDienteLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEstadoDienteLabel">Estado del diente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="estadoDiente" class="form-label">Selecciona el estado del diente:</label>
                        <select id="estadoDiente" class="form-select">
                            <option value="g">diente ausente</option>
                            <option value="h">caries</option>
                            <option value="i">corona buen estado</option>
                            <option value="j">corona mal estado</option>
                            <option value="k">obturacion en mal Estado/option>
                            <option value="l">fractura de corona</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="guardarEstadoDiente">Guardar</button>
                        <button type="button" class="btn btn-danger" id="eliminarEstadoDiente">Eliminar estado</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table mt-5" id="tablaEstadosDientes">
            <thead>
                <tr>
                    <th scope="col">Diente</th>
                    <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se agregarán las filas de la tabla -->
            </tbody>
        </table>
        <script>
            const dientesSeleccionados = {};
            const dientes = document.querySelectorAll('.diente');
            dientes.forEach(diente => {
                diente.addEventListener('click', () => {
                    dienteSeleccionado = diente;
                    $('#modalEstadoDiente').modal('show');
                });
            });
            guardarEstadoDiente.addEventListener('click', () => {
                if (dienteSeleccionado) {
                    const estadoSeleccionado = estadoDiente.value;
                    const numeroDiente = dienteSeleccionado.innerText;

                    // Actualizar el estado del diente seleccionado
                    dienteSeleccionado.classList.remove('sano', 'picado', 'cirugia');
                    dienteSeleccionado.classList.add(estadoSeleccionado);


                    // Agregar o actualizar el estado en el registro
                    dientesSeleccionados[numeroDiente] = estadoSeleccionado;

                    // Actualizar la tabla
                    actualizarTablaEstadosDientes();

                    $('#modalEstadoDiente').modal('hide');
                    dienteSeleccionado = null;
                }
            });

            eliminarEstadoDiente.addEventListener('click', () => {
                if (dienteSeleccionado) {
                    const numeroDiente = dienteSeleccionado.innerText;

                    // Eliminar el estado del diente del registro
                    delete dientesSeleccionados[numeroDiente];

                    // Actualizar la tabla
                    actualizarTablaEstadosDientes();

                    // Restablecer el estado del diente seleccionado
                    dienteSeleccionado.classList.remove('sano', 'picado', 'cirugia');

                    $('#modalEstadoDiente').modal('hide');
                    dienteSeleccionado = null;
                }
            });

            function actualizarTablaEstadosDientes() {
                const tablaEstadosDientes = document.getElementById('tablaEstadosDientes');
                const tbody = tablaEstadosDientes.getElementsByTagName('tbody')[0];

                // Limpiar el contenido actual de la tabla
                tbody.innerHTML = '';

                // Recorrer los dientes seleccionados y agregar filas a la tabla
                for (const numeroDiente in dientesSeleccionados) {
                    



                    var estado;
                    const estadoDiente = dientesSeleccionados[numeroDiente];
                    if(estadoDiente=='g'){
                        estado="diente ausente"
                    }
                    else if(estadoDiente=='h'){
                        estado="caries"
                    }
                    else if(estadoDiente=='i'){
                        estado="corona buen estado"
                    }
                    else if(estadoDiente=='j'){
                        estado="corona mal estado"
                    }
                    else if(estadoDiente=='k'){
                        estado="obturacion en mal estado"
                    }
                    else if(estadoDiente=='l'){
                        estado="fractura de corona"
                    }
                    const fila = document.createElement('tr');
                    const celdaNumeroDiente = document.createElement('td');
                    const celdaEstadoDiente = document.createElement('td');

                    celdaNumeroDiente.innerText = numeroDiente;
                    celdaEstadoDiente.innerText = estado;

                    fila.appendChild(celdaNumeroDiente);
                    fila.appendChild(celdaEstadoDiente);

                    tbody.appendChild(fila);
                }
            }

        </script>

    </div>




        </div>
    </div>
    <!--<button class="btn btn-primary" id="guardarDatos">Guardar</button> -->
</div>



<script>
    $(document).ready(function() {
        // Habilita la funcionalidad de las pestañas
        $('#pestanas a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });

        // Captura y muestra los datos al presionar el botón de guardar
        $('#guardarDatos').on('click', function() {
            // Aquí puedes utilizar JavaScript/jQuery para capturar los datos ingresados por el usuario
            // y realizar las acciones necesarias para mostrarlos o procesarlos sin guardarlos en la base de datos
        });
    });
</script>