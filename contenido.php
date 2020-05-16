<!doctype html>

<head>

<link rel="stylesheet" type="text/css" href="Dise�os.css" />
<link rel="stylesheet" type="text/css" href="estilo2.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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

 <div id="cco" align="center">
<article>
<p class="art"><strong>Direccion</strong> 4ta Avenida 18-30 Zona 10, Esquina Con Boulevard Los Proceres, 
Ciudad de Guatemala<br /><strong>Horario</strong> Lunes a Sabado 08:30 A 19:00 Horas Domingo
12:00 A 18:00 Horas<br /><strong>Telefono</strong> +502 2505 3000</p>
</article>
</div>

 <hr />
        <br />
     <?php
         if(isset($_GET['Producto']))
         {
            include ('inicio.php');
            $con= new Conexion();
            $producto=$_GET['Producto'];
            $precio=$_GET['Precio'];

            $query="INSERT INTO `carro`(`Producto`, `Precio`) VALUES ('$producto', '$precio');";
            $consulta=$con->query($query);
            $con->close();
         
         ?>
         <table align = "center">
             <tr>
             <td><p><strong><h1>Carrito de Compras</h1></strong></p></td>
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
                     <td>
                        <p>".$row['Producto']."</p>
                     </td>

                     <td>
                        <p>".$row['Precio']."</p>
                     </td>
                 </tr>
                 ";
             }
             ?>
          </table>
             <?php
          }
     ?>
     <hr />
        <br />

<section>

<div class="card" style="width: 19rem;">
  <img src="1.jpg"  width="300px" height="400px" alt="">
  <div class="card-body">
    <h5 class="card-title">Vestido de Boda</h5>
    <p class="card-text"><strong>Precio</strong> $350<br /> <strong>Marca</strong> Maggie Sottero</p>
    <a href="?Producto= Maggie Sottero Dress&Precio=350" class="btn btn-primary">Agregar al carrito</a>
  </div>
</div>

<div class="card" style="left: 19rem;">
  <img src="2.jpg"  width="300px" height="400px" alt="">
  <div class="card-body">
    <h5 class="card-title">Vestido de Boda</h5>
    <p class="card-text"><strong>Precio</strong> $400<br /> <strong>Marca</strong> Morilee</p>
    <a href="?Producto=Morilee Dress&Precio=400" class="btn btn-primary">Agregar al carrito</a>
  </div>
</div>

<div class="card" style="width: 19rem;">
  <img src="3.jpg"  width="300px" height="400px" alt="">
  <div class="card-body">
    <h5 class="card-title">Vestido de Boda</h5>
    <p class="card-text"><strong>Precio</strong> $450<br /> <strong>Marca</strong> Mon Cherri Bridals</p>
    <a href="?Producto=Mon Cherri Bridals Dress&Precio=450" class="btn btn-primary">Agregar al carrito</a>
  </div>
</div>

<div class="card" style="left: 19rem;">
  <img src="4.jpg"  width="300px" height="400px" alt="">
  <div class="card-body">
    <h5 class="card-title">Vestido de Boda</h5>
    <p class="card-text"><strong>Precio</strong> $700<br /> <strong>Marca</strong> Sophia Tolli</p>
    <a href="?Producto=Sophia Tolli&Precio=700" class="btn btn-primary">Agregar al carrito</a>
  </div>
</div>

<div class="card" style="width: 19rem;">
  <img src="5.jpeg"  width="300px" height="400px" alt="">
  <div class="card-body">
    <h5 class="card-title">Vestido de Boda</h5>
    <p class="card-text"><strong>Precio</strong> $750<br /> <strong>Marca</strong> Allure Bridals Tolli</p>
    <a href="?Producto=Allure Bridals&Precio=750" class="btn btn-primary">Agregar al carrito</a>
  </div>
</div>

</section>

<br /><br />

<aside align="center">
<h2 class="page">Visita la siguiente pagina para mas vestidos de novia</h2>
<a  href="http://www.blessingsco.com/boda"><strong>BLESSINGS CO</strong></a>
<br /><br />
<img id ="fondo" src="aside.jpg" width="210px" height="250px" alt=""/>
</aside>

 <div class = "limpiar"></div>
  <hr />
<footer align="center">
<p class="fit">Dara Catu & Fernanda Garcia</p>
</footer>

</div>
</body>
</html>