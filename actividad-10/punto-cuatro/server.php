
    <?php

    include "index.html";

    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diferencia = $fecha->diff($date2);

        $edad_actual = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;

        echo "Su edad actual es:";
        echo "años: ".$edad_actual." meses: ".$edad_meses." dias: ".$edad_dias;

    }

    ?>
