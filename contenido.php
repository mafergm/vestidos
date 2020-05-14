<html>

<head>
<link rel="stylesheet" type="text/css" href="Diseños.css" />
<link rel="stylesheet" type="text/css" href="estilo2.css" />
<title>Vestidos</title>
</head>

<body class="vet">
<div id="tdo">
<div id="contenido">
<header class="head2" align="center">
<h1 class="dress">VESTIDOS DE NOVIA</h1>
</header>
</div>

<nav>
<a href="index.html">Regresar a Inicio</a>
</nav>

 <div class = "limpiar"></div>

    
     <?php
         if(isset($_GET['producto']))
         {
            include ('inicio.php');
            $con= new Conexion();
            $producto=$_GET['producto'];
            $precio=$_GET['precio'];

            $query="INSERT INTO `carro`(`Producto`, `Precio`) VALUES ('$producto', '$precio');";
            $consulta=$con->query($query);
            $con->close;
         }
     ?>
     <table align = "center">
     <tr>
     <td><p>Carrito de Compras</p></td>
     </tr>
     <?php
          
         $con= new Conexion();
         $query="SELECT * FROM `carro` WHERE 1;";
         $pro=$con->query($query);
         $con->close();

         while($row=mysqli_fetch_assoc($pro))
         {
             echo "
             <tr>
             <td><p>".$row['producto']."</p></td>
             <td><p>".$row['precio']."</p></td>
             </tr>
             ";
         }

     ?>


 </table>

<article>
<p class="art"><strong>Dirección</strong> 4ta Avenida 18-30 Zona 10, Esquina Con Boulevard Los Próceres, 
Ciudad de Guatemala<br /><strong>Horario</strong> Lunes a Sábado 08:30 A 19:00 Horas Domingo
12:00 A 18:00 Horas<br /><strong>Teléfono</strong> +502 2505 3000</p>
</article>

<section>

<table>
<tr align="center">
<td id="vestido1"><img src="1.jpg" width="180px" height="300px" alt=""/><p><strong>Precio</strong> $350<br />
<strong>Marca</strong> Maggie Sottero</p><p><a href="?producto= Maggie Sottero Dress&precio=350">Agregar al carrito</a></p></td>

<td id="vestido2"><img  src="2.jpg" width="220px" height="300px"alt=""/><p><strong>Precio</strong> $400<br />
<strong>Marca</strong> Morilee</p><p><a href="?producto=Morilee Dress&precio=400">Agregar al carrito</a></td>

<td id="vestido3"><img src="3.jpg" width="180px" height="300px"alt=""/><p><strong>Precio</strong> $450<br />
<strong>Marca</strong> Mon Cherri Bridals</p><p><a href="?producto=Mon Cherri Bridals Dress&precio=450">Agregar al carrito</a></td>
</tr>
</table>

<table>
<tr>
<td id="vestido4"><img src="4.jpg" width="200px" height="300px"alt=""/><p><strong>Precio</strong> $700<br />
<strong>Marca</strong> Sophia Tolli</p><p><a href="?producto=Sophia Tolli&precio=700">Agregar al carrito</a></td>

<td id="vestido5"><img src="5.jpeg" width="200px" height="300px"alt=""/><p><strong>Precio</strong> $750<br />
<strong>Marca</strong> Allure Bridals</p><p><a href="?producto=Allure Bridals&precio=750">Agregar al carrito</a></td>
</tr>
</table>

</section>

<br /><br />

<aside align="center">
<h2 class="page">Visita la siguiente página para más vestidos de novia</h2>
<a  href="http://www.blessingsco.com/boda"><strong>BLESSINGS CO</strong></a>
<br /><br />
<img id ="fondo" src="aside.jpg" width="220px" height="300px" alt=""/>
</aside>

 <div class = "limpiar"></div>

<footer align="center">
<p class="fit">Dara Catú & Fernanda García</p>
</footer>

</div>
</body>
</html>