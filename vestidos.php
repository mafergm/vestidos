
<?php

$usuario=array("Dara", "Fernanda", "Carol", "carlos", "Niurka");
$contra=array(123,456,789,321,654);

$estado=false;

$nombre=$_POST['nombre'];
$password=$_POST['contraseña'];

$variab=count($usuario);

for($m=0; $m<$variab; $m++)
{
 if($usuario[$m]==$nombre && $contra[$m]==$password)
 {
  $estado=true;
 }

}

if($estado)
{
 header("location:ventas.html");
}

else
{
 header("location:index.html");
}

?>