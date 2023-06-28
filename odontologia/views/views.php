<?php


$idop = $_POST['c1'];
switch ($idop) {
  case 1:
    //formulario login
    include('inicio/login.php');
    break;
  case 2:
    //formulario iniciar
    include('inicio/sesion.php');
    break;
  case 3:
    //calendario
    include('dashboard/calendario.php');

    break;
  case 4:
    // Roles de usuarios
    include('dashboard/roles.php');
    break;
  case 5:
    //crud de eventos 
    include('dashboard/crudevent.php');
    break;
  case 6:
    //operaciones agregar eliminar actualizar
    include('dashboard/cruddb.php');
    break;
  case 7:
    //Usuarios
    include('dashboard/usuarios.php');
    break;
  case 8:
    //Areas
    include('dashboard/area.php');
    break;
  case 9:
    //Personal
    include('dashboard/personal.php');
    break;
  case 10:
    //Nosotros index
    include('inicio/nosotros.php');
    break;
  case 11:
     //cuida idex
     include('inicio/proteje.php');
    break;
  case 12:
      //pacientes
      include('dashboard/pacientes.php');
    break;
  case 13:   
      //antecedentes 
      include('dashboard/antecedentes.php');

    break;
    // ver fechas
  case 14:
    include('dashboard/verhoras.php');
    break;
    // guardar cita
  case 15:
    include('dashboard/guardarcita.php');
    break;
  //vermiscitas
  case 16:
    include('dashboard/miscitas.php');
    break;
  //ver citas 
  case 17:
   include('dashboard/citas_prgramadas.php');
   break;
  //resepcion
  case 18:
    include('dashboard/resepcion.php');
     break;
  //consulta
  case 19:
    include('dashboard/consulta.php');
     break;
  case 20:
    include('dashboard/reconsulta.php');
}
