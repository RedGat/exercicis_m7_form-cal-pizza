<?php






function   processar_dades($ingredients) {

 
  global $possibles_ingredients;

  $preu_total = 5.0;

  
  $ingredients_solicitats = "";
  foreach ($ingredients as $value) {
    $ingredients_solicitats = $ingredients_solicitats.
                              "<li>".
                              $possibles_ingredients[$value].
                              "</li>";
    $preu_total += 0.5;
  }

  
  $texte = "<h1>Has demanat una pizza amb els següents ingredients</h1>
            <ul>
               $ingredients_solicitats
            </ul>
            <h3>El preu total de la pizza eś $preu_total</h3>
            ";

  
  echo $texte;
}

function   mostrar_formulari( $ingredients ) {


  global $possibles_ingredients;


  $ingredients_options = "";
  foreach ($possibles_ingredients as $key => $value) {

    $selected = "";

    if ( in_array($key, $ingredients) ) {
      $selected = " selected ";
    }
   
    if ( $key==0 || $key==1 ) {
      $selected = " selected ";
    }

    $ingredients_options = $ingredients_options .
                           "<option value='$key' $selected>$value</option>";
  }

  
  $formulari = "
    <form method='post' action=''>
       <select  multiple name='ingredients[]'>
            $ingredients_options
       </select>
       <br>
       <input type='submit' value='demanar pizza'>
    </form>
  ";

  
  echo $formulari;

}

function renyar_usuari() {
  echo "<h4>Una bona pizza ha d'incloure massa i orenga</h4>";
}


function toca_gulag() {

  $texte = "<h1>Has demanat una pizza amb pinya</h1>
            
            <h3>En conseqüència, el Comitè Central del Partit ha decidit que piques pedra a Sibèria durant 10 anys.</h3>
            ";

  echo $texte;

}

function incoming_diabetis($ingredients) {

  global $possibles_ingredients;

  $preu_total = 5.0;

  
  $ingredients_solicitats = "";
  foreach ($ingredients as $value) {
    $ingredients_solicitats = $ingredients_solicitats.
                              "<li>".
                              $possibles_ingredients[$value].
                              "</li>";
    $preu_total += 0.5;
  }

  $texte = "<h1>Has demanat una pizza amb els següents ingredients</h1>
            <ul>
               $ingredients_solicitats
            </ul>
            <h2>Si segueixes així company et pillarà una diabetis que no et podràs aixecar del sofà.</h2>
            <h3>Btw el preu total de la pizza eś $preu_total.</h3>
            ";


  echo $texte;
}


?>

