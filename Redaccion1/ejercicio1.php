<?php
    /**
     *Haz un programa que, teniendo tres números con decimales: precioNormal,
    *porcentajeRebaja y precioRebajado, muestre por pantalla el precio normal y el
    *rebajado, tras haber aplicado el porcentaje de descuento indicado en la variable
    *porcentajeRebaja. La salida del programa deberá tener el siguiente formato:
    *Precio normal del artículo: …… euros
    *Porcentaje de rebaja aplicado: ….. %
    *Descuento aplicado: …… euros
    *Precio final del artículo: ……. Euros
     */

     function applyDiscount($price, $discount) {
        return $price * $discount;
     }

     $price = 30;
     $discount = 0.2;
     $finalPrice = applyDiscount($price, $discount);

     echo `Precio normal del artículo: ... ${price}\n`;
     echo `Porcentaje de rebaja aplicado: ... ${discount}\n`;
     echo `Descuento aplicado: ... ${price}-${finalPrice}\n`;
     echo `Precio final del artículo: ... ${finalPrice}\n`;
?>