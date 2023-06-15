<?php
/* Reto de practica. Descuentos a la vista
 En una tienda de ropa hay descuento de l 35% en todos sus productos, se debe realizar una función que reciba el valor de cada producto y le reste el 35% para mostrar luego su valor original y en cuanto queda su nuevo valor a pagar.
 */

 function discount_percent($value, $percent) {
    /*
        Esta función descuenta un porcentaje de un valor.
        Usa como argumentos:
            value: es el valor al que se aplicará el descuento.
            percent: es el porcentaje del descuento.
            
        Retorna:
            El valor con el descuento aplicado.
    */
    $discounted_value = $value * (1 - $percent / 100);
    return $discounted_value;
 }

 $value = 1750;
 $percent = 35;

 $discounted_value = discount_percent($value, $percent);

 echo $discounted_value;

?>