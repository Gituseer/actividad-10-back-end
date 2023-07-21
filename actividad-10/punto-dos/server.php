    <?php

    include "index.html";

    $edad = 0;
    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >= 18) {
            echo "<h1>Usted es mayor de edad</h1>";
        }
        else if (18 > $edad && 0 < $edad) {
            echo "<h1>Usted es menor de edad</h1>";
        }else{
            echo "<h1>No valido</h1>";
        }

    }

    ?>
