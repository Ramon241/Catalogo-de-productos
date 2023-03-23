<?php session_start(); include("./Herramientas/conexion.php"); ?>
<!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><title>CATALOGO DE PRODUCTOS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/36a0ef65f2.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./Herramientas/Style.css"></head><body>

<script>     
function v_i(event){
let leer = new FileReader();
let l_imagen = document.getElementById('imagen');
leer.onload = ()=> { if(leer.readyState == 2){ l_imagen.src = leer.result;}}
leer.readAsDataURL(event.target.files[0]);}
</script>

<!-- BARRA DE NAVEGACION -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" style="background-color: crimson !important;">
<div class="container-fluid"><a class="navbar-brand"><strong style="font-size: 80%;">COLMADO ROSA - CATALOGO</strong></a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav me-auto mb-2 mb-md-0"><li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal_cart" style="cursor:pointer;">
<div id="m1"><strong><i class="fa-sharp fa-solid fa-plus"></i> Nuevo producto</strong></div></a></li></ul></div></div></nav><br><br>
<!-- FIN BARRA DE NAVEGACION -->

<!-- AGREGAR PRODUCTO -->
<div class="modal fade" class="klk1" id="modal_cart" tabindex="-1"  aria-hidden="true">
<div class="modal-dialog"><div class="modal-content klk"><div class="modal-header">
<h4 class="modal-title" id="exampleModalLabel" style="margin-left: auto;">Agregar un nuevo producto</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div><div class="modal-body">
<form  action="./Herramientas/nuevop.php" method="post" enctype="multipart/form-data" >  
<div><center><div><img name="imagen" id="imagen" src="" alt="" width="65%">
<input type="file" value="Buscar" id="foto" required style="width:65%" class="btn btn-primary" name="foto" onchange="v_i(event)">
</div><br><input type="text" placeholder="Nombre" required id="Nombre" name="Nombre" class="nam" style="width:65% !important;  height: 25px !important;  font-size: 17px !important;  border: 1px solid rgba(0,0,0,.2);  padding: 4px 7px !important;">
<br><br><input type="number" step="1" id="Precio" placeholder="Precio" required name="Precio" class="nam" style="width:65% !important;  height: 25px !important;  font-size: 17px !important;  border: 1px solid rgba(0,0,0,.2);  padding: 4px 7px !important;">  
</center></div></div><div class="modal-footer">
<button type="submit" name="btn" id="btn" style="margin-right: auto; margin-left: auto;" class="btn btn-primary" value="Agregar producto">
</form></div></div></div></div>
<!-- FIN AGREGAR PRODUCTO -->


<!-- PRODUCTOS -->
<div class="album py-5 bg-dark"><div class="container">
<div class="row g-4">
<?php $buscador=mysqli_query($conexion,"SELECT * FROM articulos");
while($resultado = mysqli_fetch_assoc($buscador)) { ?>
<div class="col-lg-3 col-md-4 col-6"><div class="card shadow-sm ">
<img class="card-img-top" src="./Herramientas/img/<?php echo $resultado["img"]; ?>" height="259%" width="259%">
<div class="card-body"><center>  <p class="card-text" style="margin: 0;"><?php echo $resultado["nombre"]; ?></p>
  <h5><strong style="color: crimson;"><?php echo "RD$".$resultado["precio"]; ?></center></strong></h5>


</div></div></div><?php } ?></div></div></div>
<!-- FIN PRODUCTOS -->

</body>
</html>