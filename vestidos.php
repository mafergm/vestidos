
<?php

    include('usuarios.php')

    $vdr = new validar;

    $usuarios=$_POST['usuario'];
    $password=$_POST['contraseña'];

    $result=$vdr->validars($usuarios, $password);

    var_dump($result);

    if($result->num_rows == 1)
    {
     header("location:ventas.html");
    }

    else
    {
     header("location:index.html");
    }

?>