<?php 
session_start();
$obj=new OperacionesBd;
echo $email=$_POST['e'];
echo $contrasena=$_POST['c'];


if (empty($_POST['e'])||empty($_POST['c'])) {
	echo "Debe proporcionar sus datos";

}

else{
$sql="SELECT id_personas, id_rol, nombre FROM personas WHERE email='$email' AND passsword='$contrasena'";
$resultado=$obj->mostrardatos($sql);
foreach ( $resultado as $columna) {
	echo $idusuario=$columna['id_personas'];
	echo $rol=$columna['id_rol'];
	echo $nom=$columna['nombre'];
}
$total_registro=count($resultado);
if ($total_registro==1) {


$_SESSION['id_persona']=$idusuario;
$_SESSION['rol']=$rol;
$_SESSION['nombre']=$nom;	

?>
<script type="text/javascript">
	window.location.href="dashboard.php";
</script>

	<?php
}
else{
	echo "Los datos son incorrectos";
}

}


?>