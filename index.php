<!-- Snack 1 -->
<?php

$matches = [

  [
    'squadra_casa' => 'Milano',
    'squadra_ospite' => 'Cantu',
    'punteggio_casa' => 55,
    'punteggio_ospite' => 30
  ],
  [
    'squadra_casa' => 'Napoli',
    'squadra_ospite' => 'Perugia',
    'punteggio_casa' => 100,
    'punteggio_ospite' => 100
  ],
  [
    'squadra_casa' => 'Pescara',
    'squadra_ospite' => 'Bari',
    'punteggio_casa' => 90,
    'punteggio_ospite' => 80
  ],

];
 ?>
 <ul>
   <?php for ($i=0; $i < count($matches); $i++) {?>
     <?php $this_match = $matches[$i] ?>
     <li> <?php echo $this_match['squadra_casa'] ?> - <?php echo $this_match['squadra_ospite'] ?> |
     <?php echo $this_match['punteggio_casa'] ?>-<?php echo $this_match['punteggio_ospite'] ?> </li>

   <?php } ?>
 </ul>

 <!-- Snack 2 -->

 <?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  // var_dump($name);
  // var_dump($mail);
  // var_dump($age);


  if(empty($name) || empty($mail) || empty($age) ){
    echo "Accesso negato";
  }
  elseif ( strlen($name) < 3 ) {
    echo "Accesso negato";
  }
  elseif (strpos($mail,'.') === false || strpos($mail,'@') === false) {
    echo "Accesso negato";
  }
  elseif (is_numeric($age) === false) {
    echo "Accesso negato";
  }else {
    echo "Accesso riuscito";
  }




  ?>
