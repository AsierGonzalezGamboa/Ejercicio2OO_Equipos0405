<?php
    include "helper/funciones.php";
    include "clases/NsDanza.php";
    $act = new Actividad(1, "Cumpleaños de Mikel", '16-01-2022', "Baluarte");
    $bai = new Baile(2, "Bailes de Salón", '01-01-2022', "Teatro de Pamplona", "Asier Gonzalez", 35);
    $resultado = "";

    $resultado .= $act->mostrar()."<br>";
    $act->setDescripcion("Evento benéfico");
    $act->setFecha('11-09-2021');
    $resultado .= $act->mostrar()."<br>";
    $resultado .= $bai->mostrar()."<br>";
    $bai->setProfesor("Pedro Pedrosa");
    $bai->setLugar("Teatro Lara");
    $bai->setClaseHora(50);
    $resultado .= $bai->mostrar();



    include "views/vista_resultado.php";
