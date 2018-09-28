<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Exemple de formulari</title>

</head>

<body>

<div style="margin: 30px 10%">
<pre>
    <?php

        print_r( $_REQUEST);


    ?>
</pre>
</div>
<div>
    <?php
      foreach( $_REQUEST as $clau => $valor) {

        echo "Clau $clau <br/>";

        $es_array = (gettype($valor) == "array");

        if($es_array) {

        echo "Valor(s): ";

        foreach( $valor as $v) {
        echo "$v, ";
    }
    }
        else {
        echo "Valor: $valor ";
    }
    echo "<br/>";
    echo "<br/>";
    }
    ?>

</div>

</body>
</html>
