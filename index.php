<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/simbolo.jpeg">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>EL BAR-RESTAURANTE DEL CATALAN</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

<br>
</br>

<div id="header" class="flex">
    <h1 class="titulo"><u>🥘 LAS TAPAS DEL CATALAN🥘</u></h1>
</div>

<br>
</br>

    <div class="columna-3 columns">
    
        <div class="restaurante">
            <h2>Primer plato🥩</h2>
            <?php
            /* Enlace al primer XML */
            if (file_exists('./xml/la_carta.xml')) {
                $platos = simplexml_load_file('./xml/la_carta.xml');
                foreach ($platos->primer_plato as $primer_plato) {
                    echo "<strong>" . $primer_plato['nombre'] . "</strong>";
                    echo "Ingredientes:<br>";
                    foreach ($primer_plato->ingrediente as $ingrediente) {
                        echo "📌 " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                    echo "Precio: " . $primer_plato['precio'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('El Restaurante ahora mismo esta en reparacion.');
            }
            ?>
        </div>
    <div class="restaurante">
    <h2>Segundo plato🥘</h2>
    <?php
/* Enlace al segundo XML */
if (file_exists('./xml/la_carta.xml')) {
    $platos = simplexml_load_file('./xml/la_carta.xml');
    foreach ($platos->segundo_plato as $segundo_plato) {
        echo "<strong>" . $segundo_plato['nombre'] . "</strong>";
        echo "Ingredientes:<br>";
        foreach ($segundo_plato->ingrediente as $ingrediente) {
            echo "📌 " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
        echo "Precio: " . $segundo_plato['precio'] . "<br>";
        echo "<br>";
    }
} else {
    exit('El Restaurante ahora mismo esta en reparacion.');
}
?>
    </div>
    <div class="restaurante">
    <h2>Postres 🍰</h2>
    <?php
/* Enlace al tercero XML */
if (file_exists('./xml/la_carta.xml')) {
    $platos = simplexml_load_file('./xml/la_carta.xml');
    foreach ($platos->postres as $postres) {
        echo "<strong>" . $postres['nombre'] . "</strong>";
        echo "Ingredientes:<br>";
        foreach ($postres->ingrediente as $ingrediente) {
            echo "📌 " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
        echo "Precio: " . $postres['precio'] . "<br>";
        echo "<br>";
    }
} else {
    exit('El Restaurante ahora mismo esta en reparacion.');
}
?>
    </div>
    
</div>

<br>
</br>

    <h1 class="titulo"><u>LA CARTA DE LA CASA</u></h1>

<br>
</br>
    <style>
      body {
        background-image: url('./img//fondo_carta.png');
        background-size: cover;
        background-position: center;
      }
    </style>

<div class="columna-2 columns">
    
<div class="restaurante">
            <h2>Bocadillos 🥖</h2>
            <?php
            /* Enlace al quarto XML */
            if (file_exists('./xml/la_carta.xml')) {
                $platos = simplexml_load_file('./xml/la_carta.xml');
                foreach ($platos->bocadillos as $bocadillos) {
                    echo "<strong>" . $bocadillos['nombre'] . "</strong>";
                    echo "Ingredientes:<br>";
                    foreach ($bocadillos->ingrediente as $ingrediente) {
                        echo "📌 " . $ingrediente['nombre'] . "<br>";
                    }
                    echo "<br>";
                    echo "Precio: " . $bocadillos['precio'] . "<br>";
                    echo "<br>";
                }
            } else {
                exit('El Restaurante ahora mismo esta en reparacion.');
            }
            ?>
        </div>

    <div class="restaurante">
    <h2>Bebidas🍷</h2>
    <?php
/* Enlace al quinto XML */
if (file_exists('./xml/la_carta.xml')) {
    $platos = simplexml_load_file('./xml/la_carta.xml');
    foreach ($platos->bebidas as $bebidas) {
        echo "<strong>" . $bebidas['nombre'] . "</strong>";
        echo "Ingredientes:<br>";
        foreach ($bebidas->ingrediente as $ingrediente) {
            echo "📌 " . $ingrediente['nombre'] . "<br>";
        }
        echo "<br>";
        echo "Precio: " . $bebidas['precio'] . "<br>";
        echo "<br>";
    }
} else {
    exit('El Restaurante ahora mismo esta en reparacion.');
}
?>
    </div>

    <br>
</br>
<div class="columna-4 columns">
    <h1 class="titulo"><u> 😍 ¡¡¡¡QUE PINTAZAAA, ÑAMM!!!! 😋</u></h1>
</div>
<br>
</br>

<div class="columna-1 columns">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/carousel_1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_3.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_4.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_5.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_6.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_7.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_8.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/carousel_9.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Pasar</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
</div>
</body>
</html>