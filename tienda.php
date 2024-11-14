<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
    <script src="path/to/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./tienda.php">
    <link rel="stylesheet" href="css/shop.css">
    
</head>
<body>
    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo"><img src='img/logo1.png' alt=""></h1>
            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button class="boton-menu boton-catalogo active"><i class="bi bi-arrow-right-circle-fill"></i>Productos</button></li>
                    <li>
                        <button class="boton-menu boton-catalogo active"><i class="bi bi-arrow-right-circle-fill"></i>Playeras</button></li>
                    <li>
                        <button class="boton-menu boton-catalogo active"><i class="bi bi-arrow-right-circle-fill"></i>Calzado</button></li>
                    <li>
                        <button class="boton-menu boton-catalogo active"><i class="bi bi-arrow-right-circle-fill"></i>Accesorios</button></li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="./carrito.php"><i class="bi bi-cart4"></i>Carrito <span class="numero">0</span></a></li>
                    
                </ul>
            </nav>      
        </aside>
        <div class="producto">
            <div class="contenido">
            <img class="producto-imagen" src="./img/no_foto.jpg" alt="">
            <h3>Bloqueador</h3>
            <p>Bloqueador sin aceite</p>
            <h6>$200.00</h6>
            <ul>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star"></i></li>
                <li><i class="bi bi-star"></i></li>
            </ul>
            <button class="boton-1"><i class="bi bi-cash-coin">Comprar</i></button>
          

        </div>

        <div class="contenido">
            <img class="producto-imagen" src="./img/no_foto.jpg" alt="">
            <h3>Camisa</h3>
            <p>camisa Playeras</p>
            <h6>$150.00</h6>
            <ul>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-half"></i></li>
            </ul>
            <button class="boton-2"><i class="bi bi-cash-coin">Comprar</i></button>

        </div>

        <div class="contenido">
            <img class="producto-imagen" src="./img/no_foto.jpg" alt="">
            <h3>Camisa</h3>
            <p>camisa Playeras</p>
            <h6>$150.00</h6>
            <ul>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-half"></i></li>
                <li><i class="bi bi-star"></i></li>
                <li><i class="bi bi-star"></i></li>
                
            </ul>
            <button class="boton-3"><i class="bi bi-cash-coin">Comprar</i></button>
        </div>

        <div class="contenido">
            <img  class="producto-imagen" src="./img/no_foto.jpg" alt="">
            <h3>sombrero</h3>
            <p>Sombrero Playeras</p>
            <h6>$240.00</h6>
            <ul>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star-fill"></i></li>
                <li><i class="bi bi-star"></i></li>
            </ul>
            <button class="boton-4"><i class="bi bi-cash-coin">Comprar</i></button>

        </div>

        </div>
    </div>

    <script src="./js/main.js"></script>
</body>
</html>