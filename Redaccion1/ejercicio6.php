<?php
    /**
     * Hacer un programa en el que haya una variable entera llamada dinero e inicializarla a
     * cualquier valor. El programa nos expresará esa cantidad en billetes de 500, 100, 50, 20
     * y 10 € y monedas de 2 y 1 €. Se ignoran los céntimos.
    */

    $dinero = 5000;

    $billes500 = $dinero / 500;
    $billetes100 = $dinero / 100;
    $billes50 = $dinero / 50;
    $billetes20 = $dinero / 20;
    $billetes10 = $dinero / 10;

    $modenas2 = $dinero / 2;
    $monedas1 = $dinero;

    echo `Un total de ${billetes500} billetes de 500€ a partir de ${dinero}`;
    echo `Un total de ${billetes100} billetes de 100€ a partir de ${dinero}`;
    echo `Un total de ${billetes50} billetes de 50€ a partir de ${dinero}`;
    echo `Un total de ${billetes20} billetes de 20€ a partir de ${dinero}`;
    echo `Un total de ${biletes10} billetes de 10€ a partir de ${dinero}`;
    echo `Un total de ${monedas2} monedas de 2€ a partir de ${dinero}`;
    echo `Un total de ${monedas1} monedas de 1€ a partir de ${dinero}`;
?>