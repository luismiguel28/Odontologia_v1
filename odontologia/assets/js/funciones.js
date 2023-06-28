var intervaloMostrarTime;
function mostrartime(op, c1) {

    var parametro = { "c1": c1 }
    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: parametro,

    })
        .done(function (response) {
            switch (op) {

                case 1:
                    $('#contenido2').html(response);
                    datat();

                    intervaloMostrarTime = setTimeout(function () {
                        mostrartime(1, 18);
                    }, 3600000);
                    break;
            }


        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });
}

function validar(c1) {

    clearTimeout(intervaloMostrarTime);

    var parametro = { "c1": c1 }
    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: parametro,

    })
        .done(function (response) {
            switch (c1) {
                case 1:

                    $('#contenido').html(response);
                    break;
                case 3:
                    $('#contenido2').html(response);
                    calendar();
                    break;
                case 4:
                    $('#contenido2').html(response);
                    datat();
                case 5:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 7:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 8:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 9:
                    $('#contenido2').html(response);
                    datat();
                    break;
                //validar 10 nosotros 
                case 10:
                    $('#contenido').html(response);
                    break;
                case 11:
                    $('#contenido').html(response);
                    break;
                case 12:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 13:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 16:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 17:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 18:
                    $('#contenido2').html(response);
                    datat();
                    break;
                case 19:
                    $('#contenido2').html(response);
                    break;
            }
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });

}

function visual(id,c1) {

      var para={
           'c1':c1,
           'id':id
      }
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: para,

    })
        .done(function (response) {
            $('#consulta').html(response);
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });
}

function visualisarp(c) {


    console.log(c);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: c,

    })
        .done(function (response) {
            $('#horas').html(response);
            var c = document.getElementById("cerra");
            c.style.display = "block";
            var d = document.getElementById("agre");
            d.style.display = "block";
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });
}
function datat() {
    $('#miTabla').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.11.2/i18n/es_es.json"
        },
        "lengthMenu": [[6, 10, 25, 50, -1], [6, 10, 25, 50, "Todos"]],
        "pageLength": 6,


    });
}

function name(num) {

    switch (num) {
        case 1:
            document.getElementById("namee").innerHTML = "Agregar cita";
            validar(3);
            break;
        case 2:
            document.getElementById("namee").innerHTML = "Mis citas";
            validar(16);
            break;
        case 3:
            document.getElementById("namee").innerHTML = "Citas programadas";
            validar(17);
            break;
        case 4:
            document.getElementById("namee").innerHTML = "Resepcion";
            mostrartime(1, 18);
            break;
        case 5:
            document.getElementById("namee").innerHTML = "Usuarios";
            validar(7);
            break;
        case 6:
            document.getElementById("namee").innerHTML = "Areas";
            validar(8);
            break;
        case 7:
            document.getElementById("namee").innerHTML = "Personal";
            validar(9);
            break;
        case 8:
            document.getElementById("namee").innerHTML = "Pacientes";
            validar(12);
            break;
        case 9:
            document.getElementById("namee").innerHTML = "Antecedentes familiares";
            validar(13);
            break;
        case 10:
            document.getElementById("namee").innerHTML = "Historial de consulta";
            break;
        case 11:
            document.getElementById("namee").innerHTML = "Lista de examenes";
            break;
        case 12:
            document.getElementById("namee").innerHTML = "Lista de tratamientos";
            break;
        case 13:
            document.getElementById("namee").innerHTML = "Lista de antecedentes";
            break;
        case 14:
            document.getElementById("namee").innerHTML = "Lista de diagnostico";
            break;
        case 15:
            document.getElementById("namee").innerHTML = "Consulta";
            validar(19)
            break;
        case 16:
            document.getElementById("namee").innerHTML = "Configuraciones";

            break;
        case 17:
            document.getElementById("namee").innerHTML = "Eventos";
            validar(5);
            break;

    }
}

function calendar() {
    const monthsBr = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
    const tabledays = document.getElementById('dias');

    function GetDaysCalendar(mes, ano) {
        document.getElementById('mes').innerHTML = monthsBr[mes];
        document.getElementById('ano').innerHTML = ano;

        // este arreglo me almacena la fecha de cada uno de los dias mostrados en la cuadricula
        // var dft=[];
        let firsDayOfWeek = new Date(ano, mes, 1).getDay() - 1;
        let getLasDayThisMonth = new Date(ano, mes + 1, 0).getDate();
        for (var i = -firsDayOfWeek, index = 0; i < (42 - firsDayOfWeek); i++, index++) {

            let dt = new Date(ano, mes, i);
            let lt = new Date();
            var dateString = dt.toISOString().substring(0, 10);
            let dk = new Date(ano, mes, i).toLocaleDateString();

            let dp = new Date(ano, mes, i + 1);
            let dtnow = new Date();
            let dayTable = tabledays.getElementsByTagName('td')[index];
            dayTable.setAttribute("data-fecha", dateString);

            //dk me retorna el mes y ano de cada fecha  y lo estoy almacenande en el arreglo dft
            //  dft.push(dk);

            dayTable.classList.remove('mes-anterior');
            dayTable.classList.remove('proximo-mes');
            dayTable.classList.remove('dia-actual');
            dayTable.classList.remove('event');
            dayTable.classList.remove('event2');
            dayTable.classList.remove('jo');
            dayTable.classList.remove('dia-pasado');
            dayTable.innerHTML = dt.getDate();

            if (dp < lt) {
                dayTable.classList.add('dia-pasado');
                dayTable.classList.add('event');
            }
            if (dt > lt) {


                dayTable.classList.add('jo');
                dayTable.classList.add('event2');

            }
            var parametro = {
                "c1": 6,
                "c2": 4
            }
            $.ajax({
                type: 'POST',
                url: 'controller/controller.php',
                data: parametro,
                success: function (response) {

                    var arreglo3 = $.parseJSON(response);

                    arreglo3.forEach((numero) => {
                        let fe = new Date('"' + numero.fechaev + '"');

                        if (dt.getFullYear() == fe.getFullYear() && dt.getMonth() == fe.getMonth() && dt.getDate() == fe.getDate()) {
                            dayTable.classList.remove('jo');
                            dayTable.classList.remove('event2');
                            dayTable.classList.add('dia-pasado');
                            dayTable.classList.add('event');
                        }

                    });
                }

            })
            if (dt.getFullYear() == dtnow.getFullYear() && dt.getMonth() == dtnow.getMonth() && dt.getDate() == dtnow.getDate()) {
                dayTable.classList.add('dia-actual');
                dayTable.classList.add('event2');
            }
            if (i < 1) {
                dayTable.classList.add('mes-anterior');
            }
            if (i > getLasDayThisMonth) {
                dayTable.classList.add('proximo-mes');
            }
        }
        // tomo el arreglo de fechas y las embio ala siguiente funcion 
        // fecha(dft);
    }


    let now = new Date();
    let mes = now.getMonth();
    let ano = now.getFullYear();
    GetDaysCalendar(mes, ano);


    const boton_proximo = document.getElementById('btn_prev');
    const boton_anterior = document.getElementById('btn_next');

    var tabla = document.getElementById("tabla");

    boton_proximo.onclick = function () {
        mes--;
        if (mes < 0) {
            mes = 11;
            ano--;
        }
        GetDaysCalendar(mes, ano);

    }

    boton_anterior.onclick = function () {
        mes++;
        if (mes > 11) {
            mes = 0;
            ano++;
        }
        GetDaysCalendar(mes, ano);
    }

    /* dayTable.addEventListener('click', () => {
         const fecha = dayTable.getAttribute('data-fecha');
         console.log(fecha);
       });*/

    /*  const celda =  document.getElementById("tabla").querySelector('.trd');
      celda.addEventListener('click', function() {
        const valor = celda.dataset.fecha;
        console.log(valor+"h");
      });*/

    var tabla = document.getElementById('tabla');

    tabla.addEventListener('click', function (evento) {
        if (evento.target.nodeName === 'TD') {

            const valor = evento.target.dataset.fecha;


            let fechant = new Date("'" + valor + "'");
            let fechaact = new Date();

            fechant.setHours(0, 0, 0, 0);
            fechaact.setHours(0, 0, 0, 0);

            if (fechant < fechaact) {
                const modal = new bootstrap.Modal(document.getElementById('ventana-modal'));
                modal.show();
            } else {
                var parametro = {
                    "c1": 6,
                    "c2": 4,
                    "fecha": valor
                }

                $.ajax({
                    type: 'POST',
                    url: 'controller/controller.php',
                    data: parametro,
                    success: function (response) {

                        var arreglo3 = $.parseJSON(response);
                        const fechasCoincidentes = [];
                        arreglo3.forEach((numero) => {
                            let fe = new Date('"' + numero.fechaev + '"');
                            if (fechant.getFullYear() == fe.getFullYear() && fechant.getMonth() == fe.getMonth() && fechant.getDate() == fe.getDate()) {
                                const fecha = numero.fechaev;
                                const motivo = numero.motivo;

                                const datos = { fecha, motivo };
                                fechasCoincidentes.push(datos);
                            }

                        });
                        //   console.log(fechasCoincidentes)
                        const nombres = fechasCoincidentes.map(fechas => fechas.motivo);
                        if (fechasCoincidentes.length > 0) {


                            const mensaje = `<i style="color: #f6dc0d; font-size: 16pt;" class="bi bi-exclamation-triangle"></i><b style="color: #f6dc0d; font-size: 14pt;"> ${nombres.join()}</b>`;
                            $('#ventana-modal2').modal('show').find('.motivo').html(mensaje);
                        }
                        else {
                            var p = { 'c1': 14, 'fecha': valor }
                            $.ajax({
                                type: 'POST',
                                url: 'controller/controller.php',
                                data: p,
                                success: function (response) {

                                    var c = document.getElementById("cerra");
                                    c.style.display = "none";
                                    var d = document.getElementById("agre");
                                    d.style.display = "none";

                                    $('#ventana-modal3').modal('show');
                                    $('#horas').html(response);
                                    document.getElementById("fechaseleccionada").innerHTML = "Fecha seleccionada: " + valor;

                                }
                            })
                        }
                    }

                })

            }
        }
    });





}

function modal(a) {
    switch (a) {
        case 1:
            const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
            modal.show();
            break;
        case 2:
            const modal2 = new bootstrap.Modal(document.getElementById('rol1'));
            modal2.show();
            break;
        case 3:
            const modal3 = new bootstrap.Modal(document.getElementById('usu1'));
            modal3.show();
            /*   var objeto = {
                   no: 1
               };
               selects(objeto);*/
            var numeroDocumentoGenerado = generarNumeroDocumento();
            console.log(numeroDocumentoGenerado);


            break;
        case 4:
            const modal4 = new bootstrap.Modal(document.getElementById('area1'));
            modal4.show();
            break;
        case 5:
            const modal5 = new bootstrap.Modal(document.getElementById('usu3'));
            modal5.show();
            var objeto = {
                no: 1
            };
            selects(objeto);

            var inputFecha = document.getElementById("uw13");

            // Obtener la fecha actual
            var fechaActual = new Date();

            // Formatear la fecha en el formato requerido por el input de tipo "date" (AAAA-MM-DD)
            var formatoFecha = fechaActual.toISOString().split('T')[0];

            // Establecer el valor del input con la fecha actual
            inputFecha.value = formatoFecha;

            var numeroDocumentoGenerado = generarNumeroDocumento();
            console.log(numeroDocumentoGenerado);
            break;
        case 6:
            const modal6 = new bootstrap.Modal(document.getElementById('pers'));
            modal6.show();
            var objeto = {
                no: 1
            };
            selects(objeto);

            var inputFecha = document.getElementById("uw13");

            // Obtener la fecha actual
            var fechaActual = new Date();

            // Formatear la fecha en el formato requerido por el input de tipo "date" (AAAA-MM-DD)
            var formatoFecha = fechaActual.toISOString().split('T')[0];

            // Establecer el valor del input con la fecha actual
            inputFecha.value = formatoFecha;

            var numeroDocumentoGenerado = generarNumeroDocumento();
            console.log(numeroDocumentoGenerado);
            break;
            break;
        case 7:
            const modal7 = new bootstrap.Modal(document.getElementById('pa1'));
            modal7.show();
            var numeroDocumentoGenerado = generarNumeroDocumento();
            console.log(numeroDocumentoGenerado);
            break;
        case 8:
            const modal8 = new bootstrap.Modal(document.getElementById('modal'));
            modal8.show();
            break;


    }
}

function selects(q) {
    switch (q.no) {
        // agregar usuarios
        case 1:

            parametros = {
                "c1": 6,
                "c2": 10
            }
            $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: parametros,
                success: function (response) {
                    $('#wu12').empty();
                    var arreglo = $.parseJSON(response);
                    const select = document.getElementById('wu12');
                    var option = document.createElement('option');
                    option.text = 'Elige un Area';
                    select.appendChild(option);
                    arreglo.forEach(opcion => {
                        const option = document.createElement('option');
                        option.value = opcion.id_area;
                        option.text = opcion.nombrea;
                        select.appendChild(option);
                    });
                },
                error: function () {
                    console.log("Error en la llamada Ajax");
                },
                complete: function () {
                    console.log("Llamada Ajax completada");
                }
            });

            break;
        //Actualizar usuarios select
        case 2:
            parametros = {
                "c1": 6,
                "c2": 10
            }
            $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: parametros,
                success: function (response) {
                    $('#au8').empty();
                    var arreglo = $.parseJSON(response);
                    const select = document.getElementById('au8');
                    arreglo.forEach(opcion => {
                        const option = document.createElement('option');
                        option.value = opcion.id_rol;
                        option.text = opcion.nom_rol;
                        select.appendChild(option);
                    });

                    var select4 = document.getElementById("au8");
                    for (var i = 0; i < select4.options.length; i++) {
                        var option = select4.options[i];
                        console.log(option)
                        if (option.value === q.idu) {
                            option.selected = true;
                        }
                    }
                },
                error: function () {
                    console.log("Error en la llamada Ajax");
                },
                complete: function () {
                    console.log("Llamada Ajax completada");
                }
            });

            break;
        //Actualizar usuarios estado
        case 3:
            var select2 = document.getElementById("au9");
            for (var i = 0; i < select2.options.length; i++) {
                var option = select2.options[i];
                if (option.value === q.idu) {
                    option.selected = true;
                }
            }
            break;
        //actualizar area estado
        case 4:
            var select4 = document.getElementById("a6");
            for (var i = 0; i < select4.options.length; i++) {
                var option = select4.options[i];
                if (option.value === q.idu) {
                    option.selected = true;
                }
            }
            break;

        case 5:
            var select2 = document.getElementById("au8");
            for (var i = 0; i < select2.options.length; i++) {
                var option = select2.options[i];
                if (option.value === q.idu) {
                    option.selected = true;
                }

            }

        case 6:
            parametros = {
                "c1": 6,
                "c2": 10
            }
            $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: parametros,
                success: function (response) {
                    $('#au13').empty();
                    var arreglo = $.parseJSON(response);
                    const select = document.getElementById('au13');
                    var option = document.createElement('option');
                    option.text = 'Elige un Area';
                    select.appendChild(option);
                    arreglo.forEach(opcion => {
                        const option = document.createElement('option');
                        option.value = opcion.id_area;
                        option.text = opcion.nombrea;
                        select.appendChild(option);
                    });
                },
                error: function () {
                    console.log("Error en la llamada Ajax");
                },
                complete: function () {
                    console.log("Llamada Ajax completada");
                }
            });

            break;

        case 7:
            parametros = {
                "c1": 6,
                "c2": 10
            }
            $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: parametros,
                success: function (response) {
                    $('#au13').empty();
                    var arreglo = $.parseJSON(response);
                    const select = document.getElementById('au13');
                    arreglo.forEach(opcion => {
                        const option = document.createElement('option');
                        option.value = opcion.id_area;
                        option.text = opcion.nombrea;
                        select.appendChild(option);
                    });

                    var select4 = document.getElementById("au13");
                    for (var i = 0; i < select4.options.length; i++) {
                        var option = select4.options[i];
                        console.log(option)
                        if (option.value === q.idu) {
                            option.selected = true;
                        }
                    }
                },
                error: function () {
                    console.log("Error en la llamada Ajax");
                },
                complete: function () {
                    console.log("Llamada Ajax completada");
                }
            });
            break;

        case 8: {
            var select2 = document.getElementById("u7");
            for (var i = 0; i < select2.options.length; i++) {
                var option = select2.options[i];
                if (option.value === q.idu) {
                    option.selected = true;
                }

            }
        }
            break;

        case 9:
            var select2 = document.getElementById("u9");
            for (var i = 0; i < select2.options.length; i++) {
                var option = select2.options[i];
                if (option.value === q.idu) {
                    option.selected = true;
                }
            }
            break;

        case 10:
            parametros = {
                "c1": 6,
                "c2": 10
            }
            $.ajax({
                type: "POST",
                url: "controller/controller.php",
                data: parametros,
                success: function (response) {
                    $('#u4').empty();
                    var arreglo = $.parseJSON(response);
                    const select = document.getElementById('u4');
                    arreglo.forEach(opcion => {
                        const option = document.createElement('option');
                        option.value = opcion.id_area;
                        option.text = opcion.nombrea;
                        select.appendChild(option);
                    });

                    var select4 = document.getElementById("u4");
                    for (var i = 0; i < select4.options.length; i++) {
                        var option = select4.options[i];
                        console.log(option)
                        if (option.value === q.idu) {
                            option.selected = true;
                        }
                    }
                },
                error: function () {
                    console.log("Error en la llamada Ajax");
                },
                complete: function () {
                    console.log("Llamada Ajax completada");
                }
            });
            break;

    }
}

function mostrarinput() {

    var tipoSelect = document.querySelector('#au8');
    var camposDoctor = document.getElementById('campos-doctor');
    var especialidadInput = document.querySelector('#au13');
    var experienciaInput = document.getElementById('au15');
    var fechaInput = document.getElementById('au14');

    tipoSelect.addEventListener('change', () => {
        if (tipoSelect.value === '2' || tipoSelect.value === '3' || tipoSelect.value === '4') {
            camposDoctor.style.display = 'block';
            especialidadInput.required = true;
            experienciaInput.required = true;
            fechaInput.required = true;
            var inputFecha = document.getElementById("au14");
            var fechaActual = new Date();
            var formatoFecha = fechaActual.toISOString().split('T')[0];
            inputFecha.value = formatoFecha;
            console.log("hol");
        } else {
            camposDoctor.style.display = 'none';
            especialidadInput.required = false;
            experienciaInput.required = false;

        }
    });
}

function login(c1, e, c) {

    var parametro = {
        "e": e,
        "c": c,
        "c1": c1
    }
    $.ajax({
        type: 'POST',
        url: 'controller/controller.php',
        data: parametro,
        success: function (response) {
            $("#messageerror").html(response);
        }

    })

}

function agregar(op, idop, ida, form) {


    var formulario = document.getElementById(form);

    // Crear un objeto para almacenar los datos del formulario
    var datosFormulario = {};

    // Recorrer los campos del formulario y agregarlos al objeto
    for (var i = 0; i < formulario.elements.length; i++) {
        var campo = formulario.elements[i];
        var nombreCampo = campo.id;
        var valorCampo = campo.value;

        // Agregar el campo al objeto solo si tiene un valor
        if (valorCampo !== '') {
            datosFormulario[nombreCampo] = valorCampo;
        }
    }
    datosFormulario.c1 = idop;
    datosFormulario.c2 = ida;
    console.log(datosFormulario);

    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: datosFormulario,

    })
        .done(function (response) {
            switch (op) {
                case 1:
                    alert(response);
                    validar(5);
                    break;
                case 2:
                    alert(response);
                    validar(4);
                    break;
                case 3:
                    alert(response);
                    validar(7);
                    break;
                case 4:
                    alert(response);
                    validar(8);
                    break;
                case 5:
                    alert(response);
                    validar(7);
                    break;
                case 6:
                    alert(response);
                    validar(9);
                    break;
                case 7:
                    alert(response);
                    validar(12);
                    break;
                case 8:
                    alert(response);
                    break;

            }

        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });



}

function agregarmod(op, idop, ida, id) {

    var parametro = {
        "c1": idop,
        "c2": ida,
        "id": id
    }
    console.log(parametro)

    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: parametro,

    })
        .done(function (response) {
            var arreglo = $.parseJSON(response);

            switch (op) {
                case 1:
                    const modal = new bootstrap.Modal(document.getElementById('exampleModal2'));
                    modal.show();
                    document.getElementById("motivo").value = arreglo[0].motivo;
                    document.getElementById("fecha").value = arreglo[0].fechaev;
                    document.getElementById("id").value = arreglo[0].idev;
                    break;

                case 2:
                    const modal2 = new bootstrap.Modal(document.getElementById('rol2'));
                    modal2.show();
                    document.getElementById("r2").value = arreglo[0].id_rol;
                    document.getElementById("r3").value = arreglo[0].nom_rol;
                    break;

                case 3:
                    if (arreglo[0].u8 == 1) {
                        const modal3 = new bootstrap.Modal(document.getElementById('usu2'));
                        var miSelect = document.getElementById("au13");
                        modal3.show();
                        document.getElementById("campos-doctor").style.display = "none";
                        document.getElementById("au1").value = arreglo[0].u1;
                        document.getElementById("au2").value = arreglo[0].u2;
                        document.getElementById("au3").value = arreglo[0].u3;
                        document.getElementById("au4").value = arreglo[0].u4;
                        document.getElementById("au5").value = arreglo[0].u5;
                        document.getElementById("au6").value = arreglo[0].u6;
                        document.getElementById("au7").value = arreglo[0].u7;
                        document.getElementById("au10").value = arreglo[0].u10;
                        document.getElementById("au12").value = arreglo[0].u14;
                        var objeto = {
                            no: 5,
                            idu: arreglo[0].u8
                        }
                        selects(objeto);
                        var objeto2 = {
                            no: 3,
                            idu: arreglo[0].u9
                        }
                        selects(objeto2);
                        var objeto3 = {
                            no: 6
                        }
                        selects(objeto3);
                        document.getElementById("au14").value = "";
                        document.getElementById("au15").value = "";
                        miSelect.selectedIndex = 0;

                    }
                    else {
                        const modal3 = new bootstrap.Modal(document.getElementById('usu2'));
                        var miSelect = document.getElementById("au13");
                        modal3.show();
                        document.getElementById("campos-doctor").style.display = "block";
                        document.getElementById("au1").value = arreglo[0].u1;
                        document.getElementById("au2").value = arreglo[0].u2;
                        document.getElementById("au3").value = arreglo[0].u3;
                        document.getElementById("au4").value = arreglo[0].u4;
                        document.getElementById("au5").value = arreglo[0].u5;
                        document.getElementById("au6").value = arreglo[0].u6;
                        document.getElementById("au7").value = arreglo[0].u7;
                        document.getElementById("au10").value = arreglo[0].u10;
                        document.getElementById("au14").value = arreglo[0].u12;
                        document.getElementById("au15").value = arreglo[0].u13;
                        document.getElementById("au12").value = arreglo[0].u14;
                        var objeto = {
                            no: 5,
                            idu: arreglo[0].u8
                        }
                        selects(objeto);
                        var objeto2 = {
                            no: 3,
                            idu: arreglo[0].u9
                        }
                        selects(objeto2);
                        var objeto3 = {
                            no: 7,
                            idu: arreglo[0].u11
                        }
                        selects(objeto3);
                    }
                    break;

                case 4:
                    const modal4 = new bootstrap.Modal(document.getElementById('area2'));
                    modal4.show();
                    document.getElementById("a4").value = arreglo[0].a1;
                    document.getElementById("a5").value = arreglo[0].a2;
                    document.getElementById("a7").value = arreglo[0].a4;
                    var objeto = {
                        no: 4,
                        idu: arreglo[0].a3
                    }
                    selects(objeto);
                    break;

                case 5:
                    const modal5 = new bootstrap.Modal(document.getElementById('pers2'));
                    modal5.show();
                    console.log(response)
                    document.getElementById("u1").value = arreglo[0].u1;
                    document.getElementById("u2").value = arreglo[0].u2;
                    document.getElementById("u3").value = arreglo[0].u3;
                    document.getElementById("u5").value = arreglo[0].u13;
                    document.getElementById("u6").value = arreglo[0].u12;
                    document.getElementById("u8").value = arreglo[0].u5;//correo
                    document.getElementById("u10").value = arreglo[0].u14;//id
                    //rol
                    var objeto = {
                        no: 8,
                        idu: arreglo[0].u8
                    }
                    selects(objeto);
                    //est
                    var objeto2 = {
                        no: 9,
                        idu: arreglo[0].u9
                    }
                    selects(objeto2);
                    //
                    var objeto3 = {
                        no: 10,
                        idu: arreglo[0].u11
                    }
                    selects(objeto3);
                    break;

                case 6:
                    console.log(response)
                    const modal6 = new bootstrap.Modal(document.getElementById('pa2'));
                    modal6.show();

                    document.getElementById("au1").value = arreglo[0].u1;
                    document.getElementById("au2").value = arreglo[0].u2;
                    document.getElementById("au3").value = arreglo[0].u3;
                    document.getElementById("au4").value = arreglo[0].u4;
                    document.getElementById("au6").value = arreglo[0].u6;
                    document.getElementById("au7").value = arreglo[0].u7;
                    document.getElementById("au12").value = arreglo[0].u14;
                    break;

                case 7:
                    console.log(response);
                    document.getElementById("no").innerHTML = "<strong>Numero de documento: </strong>" + arreglo[0].no_documento;
                    document.getElementById("n").innerHTML = "<strong>Nombre: </strong>" + arreglo[0].nombre;
                    document.getElementById("a").innerHTML = "<strong>Apellidos: </strong>" + arreglo[0].apellidos;

                    document.getElementById("per").value = arreglo[0].antecedente_personal;
                    document.getElementById("fam").value = arreglo[0].antecedente_familiar;
                    var h = document.getElementById("hola");
                    h.addEventListener('click', () => {
                        funtionholaxd()
                    })
                    break;
            }

        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });



}


function actualizar(op, idop, ida, form) {


    var formulario = document.getElementById(form);

    // Crear un objeto para almacenar los datos del formulario
    var datosFormulario = {};

    // Recorrer los campos del formulario y agregarlos al objeto
    for (var i = 0; i < formulario.elements.length; i++) {
        var campo = formulario.elements[i];
        var nombreCampo = campo.id;
        var valorCampo = campo.value;

        // Agregar el campo al objeto solo si tiene un valor
        if (valorCampo !== '') {
            datosFormulario[nombreCampo] = valorCampo;
        }
    }
    datosFormulario.c1 = idop;
    datosFormulario.c2 = ida;
    console.log(datosFormulario);


    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: datosFormulario,

    })
        .done(function (response) {

            switch (op) {
                case 1:
                    alert(response);
                    validar(5);
                    break;
                case 2:
                    alert(response);
                    validar(4);
                    break;
                case 3:
                    console.log(response)
                    alert(response);
                    validar(7);
                    break;
                case 4:
                    alert(response);
                    validar(8);

                    break;
                case 5:
                    alert(response);
                    validar(9);

                    break;
                case 6:
                    alert(response);
                    validar(12);

                    break;

            }

        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });



}

function eliminar(op, idop, ida, idc) {



    var parametro = {
        "c1": idop,
        "c2": ida,
        "idc": idc
    }
    console.log(parametro)




    // console.log(c1);
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: parametro,

    })
        .done(function (response) {
            switch (op) {
                case 1:
                    alert(response);
                    validar(5);
                    break;
                case 2:
                    alert(response);
                    validar(4);
                    break;
                case 3:
                    console.log(response)
                    alert(response);
                    validar(7);
                    break;
                case 4:
                    console.log(response)
                    alert(response);
                    validar(8);
                    break;
                case 5:
                    console.log(response)
                    alert(response);
                    validar(9);
                    break;
                case 6:
                    console.log(response)
                    alert(response);
                    validar(12);
                    break;
                case 7:
                    console.log(response)
                    alert(response);
                    validar(16);
                    break;
                case 8:
                    console.log(response)
                    alert(response);
                    validar(16);
                    break;
            }
        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("complete");
        });


}


// Genera un número de documento de 8 dígitos
function generarNumeroDocumento() {
    var numeroDocumento = "";
    var longitud = 8;

    do {
        // Genera un número de documento aleatorio
        numeroDocumento = generarNumeroAleatorio(longitud);
    } while (existeNumeroDocumento(numeroDocumento));

    return numeroDocumento;
}
// Genera un número aleatorio de la longitud especificada
function generarNumeroAleatorio(longitud) {
    var numeroAleatorio = "";

    for (var i = 0; i < longitud; i++) {
        var digito = Math.floor(Math.random() * 10);
        numeroAleatorio += digito;
    }

    return numeroAleatorio;
}

// Verifica si el número de documento existe en la base de datos
function existeNumeroDocumento(numeroDocumento) {

    parametros = {
        "c1": 6,
        "c2": 19
    }
    $.ajax({
        type: "POST",
        url: "controller/controller.php",
        data: parametros,
        success: function (response) {


            var arreglo = $.parseJSON(response);
            console.log(arreglo)
            for (var i = 0; i < arreglo.length; i++) {

                if (arreglo[i].no_documento === numeroDocumento) {
                    generarNumeroDocumento();

                }
            }

            var inputs = document.getElementsByClassName('numerosale');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].value = numeroDocumento;
            }
        },
        error: function () {
            console.log("Error en la llamada Ajax");
        },
        complete: function () {
            console.log("Llamada Ajax completada");
        }
    });




}







