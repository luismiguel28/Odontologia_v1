
<?php

$obj = new OperacionesBd;
$action = $_POST['c2'];

switch ($action) {
                //Agregar Eventos
        case 1:

                $fecha = $_POST['d1'];
                $motivo = $_POST['d2'];
                $sql = "INSERT INTO eventos(fechaev, motivo ) values
                 ('$fecha','$motivo')";
                $obj->guardardatos($sql);
                echo 'guardado correctamente';
                break;
                //Eliminar Eventos
        case 2:

                $idev = $_POST['idc'];
                $sql = "DELETE FROM eventos where idev=$idev";
                $obj->eliminardatos($sql);
                echo 'Eliminado correctamente';
                break;

                //mostrar eventos
        case 3:
                $obj = new OperacionesBd;
                $idev = $_POST['id'];
                $sql = "SELECT 	idev, fechaev, motivo FROM eventos where idev=$idev ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;
                break;
                //Mostrar agenda en calendario
        case 4:

                $obj = new OperacionesBd;
                $sql = "SELECT 	idev, fechaev, motivo FROM eventos ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;

                break;

                //Actualizar Eventos
        case 5:
                $fecha = $_POST['fecha'];
                $motivo = $_POST['motivo'];
                $id = $_POST['id'];
                $obj = new OperacionesBd;
                $sql = "UPDATE eventos set  fechaev='$fecha', motivo='$motivo' where idev='$id'  ";
                $obj->actualizadatos($sql);
                echo "Actualizado evento";
                break;

                //Agregar Roles
        case 6:

                $rol = $_POST['r1'];
                $sql = "INSERT INTO roles(nom_rol) values  ('$rol')";
                $obj->guardardatos($sql);
                echo 'guardado correctamente';
                break;

                //Eliminar Roles

        case 7:

                $idr = $_POST['idc'];
                $sql = "DELETE FROM roles where id_rol=$idr";
                $obj->eliminardatos($sql);
                echo 'Eliminado correctamente';
                break;

                //Mostrar Roles
        case 8:
                $obj = new OperacionesBd;
                $idr = $_POST['id'];
                $sql = "SELECT  id_rol, nom_rol FROM roles where id_rol=$idr ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;
                break;

                //Actualizar Eventos
        case 9:
                $id = $_POST['r1'];
                $rol = $_POST['r2'];
                $obj = new OperacionesBd;
                $sql = "UPDATE roles set  nom_rol='$rol' where id_rol='$id' ";
                $obj->actualizadatos($sql);
                echo "Actualizado rol";
                break;

                //Desplegable rol
        case 10:
                $obj = new OperacionesBd;
                $sql = "SELECT  id_area, nombrea FROM area ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;
                break;
                //Agregar persona y usuario
        case 11:

                $u1 = $_POST['u1'];
                $u2 = $_POST['u2'];
                $u3 = $_POST['u3'];
                $u4 = $_POST['u4'];
                $u5 = $_POST['u5'];
                $u6 = $_POST['u6'];
                $u7 = $_POST['u7'];
                $u8 = $_POST['u8'];
                $u9 = $_POST['u9'];
                $u10 = $_POST['u10'];
                $u11 = $_POST['u11'];
                $u12 = $_POST['u11'];
                $u13 = $_POST['u11'];
                $u14 = $_POST['u11'];
                $obj = new OperacionesBd;
                if ($u10 == $u11) {
                        $sql = "INSERT INTO personas(no_documento,nombre, apellidos, direccion, email, telefono, fe_nacimiento,id_rol,passsword,estado) 
                        VALUES ('$u1', '$u2', '$u3', '$u4', '$u5', '$u6',$u7,$u8,$u10,$u9)";
                        $obj->guardardatos($sql);
                } else {
                        echo "Error en la contrasena";
                }

                break;
                //eliminar persona usuario
        case 12:

                echo $idr = $_POST['idc'];
                $sql = "DELETE FROM personas where id_personas=$idr";
                $obj->eliminardatos($sql);
                echo 'Eliminado correctamente';
                break;
        case 13:
                //rellenar modal usuarios
                $idr = $_POST['id'];
                $obj = new OperacionesBd;
                $sql = "SELECT id_personas u14, no_documento u1,nombre u2, apellidos u3, direccion u4, 
                        email u5, telefono u6, fe_nacimiento u7 ,id_rol u8,passsword u10,estado u9,id_area u11,
                        fecha_contrato u12, especialidad u13
                        from personas where id_personas=$idr ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;
                break;
                //actualizar usuarios personas 
        case 14:

                echo  $u1 = $_POST['au1'];
                echo  $u2 = $_POST['au2'];
                echo  $u3 = $_POST['au3'];
                echo  $u4 = $_POST['au4'];
                echo  $u5 = $_POST['au5'];
                echo  $u6 = $_POST['au6'];
                echo  $u7 = $_POST['au7'];
                echo  $u8 = $_POST['au8'];
                echo  $u9 = $_POST['au9'];
                echo  $u10 = $_POST['au10'];
                echo  $u11 = $_POST['au11'];
                echo  $u12 = $_POST['au12'];
                if ($u8 == '1') {
                        $obj = new OperacionesBd;
                        if ($u10 == $u11) {

                                $sql = "UPDATE personas set  no_documento='$u1',nombre='$u2',apellidos='$u3',direccion='$u4',email='$u5',telefono='$u6' ,
                        fe_nacimiento='$u7',id_rol='$u8',estado='$u9', passsword='$u10', id_area=NULL,
                        fecha_contrato=NULL, especialidad=NULL where id_personas='$u12'";
                                $obj->actualizadatos($sql);
                        } else {
                                echo "Error en la contrasena";
                        }
                } else {
                        echo  $u13 = $_POST['au13'];
                        echo  $u14 = $_POST['au14'];
                        echo  $u15 = $_POST['au15'];

                        $sql2 = "UPDATE personas set  no_documento='$u1',nombre='$u2',apellidos='$u3',direccion='$u4',email='$u5',telefono='$u6' ,
                        fe_nacimiento='$u7',id_rol='$u8',estado='$u9', passsword='$u10', id_area='$u13',
                        fecha_contrato='$u14', especialidad='$u15' where id_personas='$u12'";
                        $obj->actualizadatos($sql2);
                }


                break;
                // Agregar areas
        case 15:
                $a1 = $_POST['a1'];
                $a2 = $_POST['a2'];
                $a3 = $_POST['a3'];
                $sql = "INSERT INTO area(nombrea, descripciona,estadoa ) values
                 ('$a1','$a2','$a3')";
                $obj->guardardatos($sql);
                echo 'guardado correctamente';

                break;
                //Eliminar Areas
        case 16:
                $idev = $_POST['idc'];
                $sql = "DELETE FROM area where id_area=$idev";
                $obj->eliminardatos($sql);
                echo 'Eliminado correctamente';
                break;
                //Mostrar Areas
        case 17:
                $obj = new OperacionesBd;
                $idr = $_POST['id'];
                $sql = "SELECT  id_area a4 ,nombrea a1, descripciona a2, estadoa a3  FROM area where id_area=$idr ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;


                break;
                //Actualizar Area
        case 18:
                $u1 = $_POST['a4'];
                $u2 = $_POST['a5'];
                $u3 = $_POST['a6'];
                $u4 = $_POST['a7'];
                $obj = new OperacionesBd;
                $sql = "UPDATE area set  nombrea='$u1', descripciona='$u2', estadoa='$u3' where id_area='$u4' ";
                $obj->actualizadatos($sql);
                echo "Actualizado rol";
                break;
                //mostrar numeros de documetos 
        case 19:
                $obj = new OperacionesBd;
                $sql = "SELECT 	no_documento FROM personas ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;

                break;
        case 20:

                $u1 = $_POST['wu1'];
                $u2 = $_POST['wu2'];
                $u3 = $_POST['wu3'];
                $u4 = $_POST['wu4'];
                $u5 = $_POST['wu5'];
                $u6 = $_POST['wu6'];
                $u7 = $_POST['wu7'];
                $u8 = $_POST['wu8'];
                $u9 = $_POST['wu9'];
                $u10 = $_POST['wu10'];
                $u11 = $_POST['wu11'];
                $u12 = $_POST['wu12'];
                $u13 = $_POST['uw13'];
                $u14 = $_POST['uw14'];

                $obj = new OperacionesBd;
                if ($u10 == $u11) {
                        $sql = "INSERT INTO personas(no_documento,nombre, apellidos, direccion, email, telefono, 
                                            fe_nacimiento,id_rol,passsword,estado,id_area,fecha_contrato, especialidad) 
                                            VALUES ('$u1', '$u2', '$u3', '$u4', '$u5', '$u6','$u7','$u8','$u10','$u9','$u12','$u13','$u14')";
                        $obj->guardardatos($sql);
                        echo 'guardado correctamente';
                } else {
                        echo "Error en la contrasena";
                }

                break;
                //actualizar personal

        case 21:
                echo  $u1 = $_POST['u1'];
                echo  $u2 = $_POST['u2'];
                echo  $u3 = $_POST['u3'];
                echo  $u4 = $_POST['u4'];
                echo  $u5 = $_POST['u5'];
                echo  $u6 = $_POST['u6'];
                echo  $u7 = $_POST['u7'];
                echo  $u8 = $_POST['u8'];
                echo  $u9 = $_POST['u9'];
                echo  $u10 = $_POST['u10'];


                $sql = "UPDATE personas set  no_documento='$u1',nombre='$u2',apellidos='$u3',
                                       id_area=$u4,especialidad='$u5' ,fecha_contrato='$u6',id_rol='$u7',email='$u8',
                                       estado='$u9' where id_personas='$u10'";
                $obj->actualizadatos($sql);
                echo "datos actualizado";

                break;


                //eliminar persona usuario\
        case 22:

                echo $idr = $_POST['idc'];
                $sql = "UPDATE personas set  estado=0 where id_personas='$idr'";

                $obj->eliminardatos($sql);
                echo 'bajado correctamente';
                break;

        case 23:
                echo  $u1 = $_POST['au1'];
                echo  $u2 = $_POST['au2'];
                echo  $u3 = $_POST['au3'];
                echo  $u4 = $_POST['au4'];
                echo  $u5 = $_POST['au6'];
                echo  $u6 = $_POST['au7'];
                echo  $u10 = $_POST['au12'];

                $sql = "UPDATE personas set  no_documento='$u1',nombre='$u2',apellidos='$u3',
                        direccion='$u4',telefono='$u5' ,fe_nacimiento='$u6'
                       where id_personas='$u10'";
                $obj->actualizadatos($sql);
                echo "datos actualizado";

                break;
                // ver antecedentes
        case 24:
                $obj = new OperacionesBd;
                $idr = $_POST['id'];
                $sql = "SELECT p.no_documento, p.nombre,p.apellidos, IFNULL(af.descripcion, 'NULL') AS antecedente_familiar, 
                        IFNULL(ap.descripcion , 'NULL')AS antecedente_personal FROM personas p LEFT JOIN antecedentes af ON p.id_personas = af.id_personas 
                        AND af.tipo_antecedente = 0 LEFT JOIN antecedentes ap ON p.id_personas = ap.id_personas AND ap.tipo_antecedente = 1 
                        WHERE p.id_personas=af.id_personas; ";
                $resultado = $obj->mostrardatos($sql);

                $my_arreglo = json_encode($resultado);

                echo $my_arreglo;
                break;


                // agregar cita 
        case 25:
                $a1 = $_POST['u1'];
                $a2 = $_POST['u2'];
                $a3 = $_POST['u3'];
                $a4 = $_POST['u4'];
                $sql = "INSERT INTO cita(id_persona, descripcioncita,Fecha_cita,id_hora,estado ) values
                         ('$a4','$a3','$a1','$a2',0)";
                $obj->guardardatos($sql);
                echo 'guardado correctamente';

                break;
                //Eiminar cita 
        case 26:
                $idev = $_POST['idc'];
                $sql = "DELETE FROM cita where id_cita=$idev";
                $obj->eliminardatos($sql);
                echo 'Eliminado correctamente';
                break;
                //actualizar estado atendiendo 
        case 27:
                $idev = $_POST['idc'];
                $sql = "UPDATE cita set  estado=4 where id_cita='$idev'";
                $obj->actualizadatos($sql);
                echo 'Accion realizada correctamente';
                break;
        case 28:
                //actualizar estado no asistio  
                $idev = $_POST['idc'];
                $sql = "UPDATE cita set  estado=2 where id_cita='$idev'";
                $obj->actualizadatos($sql);
                echo 'Accion realizada correctamente';
                break;
}




?>