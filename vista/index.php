<?php



include_once('../modelo/conexion.php');
include_once('../rutas.php');


rutas::rutas();


include_once(cont_publicacion);

$met_publicacion = new metodos_publicacion();



$postPagina = 6; //cuantos posteos mostrar

$totalPaginas = $met_publicacion->contadorPublicacion(); //query contar publicacion COUNT
$totalPaginas = ceil($totalPaginas / $postPagina); //division de numero de paginas a mostrar con el total de paginas.

$paginaActual = isset($_GET['publicacion']) ? $_GET['publicacion'] : 1; //entrega el valor de paginas actual

$desplazamiento = ($paginaActual - 1) * $postPagina; //aumenta el desplazamento 
$publicacion = $met_publicacion->mostrarPublicaciones($desplazamiento, $postPagina); //mandamos desplazamiento y el rango de paginas a llenar

?>

<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINACION</title>
</head>

<link rel="stylesheet" href="<?php echo css ?>">

<body>
    <div class="contenedor">
        <div class="row">



            <?php
            foreach ($publicacion as $publicaciones) {

            ?>
                <div class="posteo">
                    <label>Titulo: <?php print_r($publicaciones['titulo']); ?></label>
                    <br>
                    <label>Contenido: <?php print_r($publicaciones['contenido']); ?></label>
                    <br>
                    <label>Fecha: <?php print_r($publicaciones['fecha']); ?></label>



                </div>
            <?php }

            ?>

        </div>

        <div class="indices">
            <?php if ($paginaActual > 1) { ?>

                <a href="?publicacion=<?php echo $paginaActual - 1 ?>"><button class="in"><<</button></a>
                <?php } ?>
                <?php
                for ($i = 1; $i <= $totalPaginas; $i++) {
                ?>
                  <a href="?publicacion=<?php echo $i ?>"><button class="in"> <?php echo $i?> </button></a>
                        <?php } ?>

                        <?php if ($paginaActual < $totalPaginas) { ?>
                            <a href="?publicacion=<?php echo $paginaActual + 1 ?>"> <button class="in">>></button></a>
                            <?php } ?>
        </div>

    </div>




</body>

</html>