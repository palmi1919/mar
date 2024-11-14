<?php
include("classes/venta.php");
$venta=new Venta();
/*busco la venta, puse es 1 porque es el usuario con el id=1 pero deberia ser el id del usuario logueado.
el 0 es el estatus, ya que busco las ventas que son del carrito (estatus 0)*/
$datos = $venta->mostrarVenta(1,0)

?>

<h2>Carrito de compras</h2>
<table>
    <tr>
        /* cosplan define el numero de columnas combinadas */
        <th colspan="2">producto</th>
        <th>Cantidad</th>
        <th>Importe</th>
    </tr>
    <?php
    $total = 0;
    foreach ($datos as $fila) {
        $total+= $fila['subtotal'];

    ?>
        <tr>
            <td></td>
            <td<?=$fila['nombre']?></td>
            <td<?=$fila['cantidad']?></td>
            <td<?=$fila['subtotal']?></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <th colspan = "3">total:</th>
            <td<?=$total?></td>
        </tr>
</table>