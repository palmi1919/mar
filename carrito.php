<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<div class="wrapper">
        <aside>
            <header>
                <h1 class="logo"><img src='img/logo1.png' alt=""></h1>
            </header>
            <nav>
                <ul>
                    <li>
                        <a class="boton-volver" href="./tienda.php">
                            <i class="bi bi-cart4"></i>Seguir comprando</a></li>
                    
                        
                    <li><a class="boton-menu boton-carrito active" href="./carrito.php"><i class="bi bi-cart4"></i>Carrito </a></li>
                    
                </ul>
            </nav>    
            <footer>
                <p class="text-footer"></p>
            </footer>  
        </aside>
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <p class="carrito-vacio">El carrito esta vacion</p>
                <div class="carrito-productos">
                    <div class="carrito-producto">
                        <img src="./img/no_foto.jpg" alt="">
                        <div class="carrito-producto-titulo">
                            <small>Titulo</small>
                            <h3>Bloqueador sin aceite</h3>
                        </div>
                        <div class="carrito-producto-cantidad">
                            <small>Cantidad</small>
                            <p>1</p>
                        </div>
                        <div class="carrito-producto-precio">
                            <small>Precio</small>
                            <p>$200.00</p>
                        </div>
                        <div class="carrito-producto-subtotal">
                            <small>Subtotal</small>
                            <p>$200.00</p>
                        </div>
                        <div class="carrito-producto-eliminar"><i class="bi bi-trash"></i></div>
                    </div>
                </div>
                <div class="carrito-acciones">
                    <div class="divcarrito acciones-izquierda">
                        <div class="buttoncarrito-acciones-vaciar">Vaciar el carrito</div>
                </div>
                <div class="carrito-acciones-derecha">
                    <div class="carrito-acciones-total">
                        <p>total:</p>
                        <p>$400.00</p>
                    </div>
                    <button class="carrito-acciones-comprar">Comprar ahora</button>
                </div>
            </div>
            </div>
        </main>
</div> 
</body>
</html>