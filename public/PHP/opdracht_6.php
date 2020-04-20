<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

// Maak een tweedimenionale array, ofwel een array van arrays
$speelveld=array();
 for ($r=0;$r<5;$r++) {
  for ($k=0;$k<5;$k++) {
    $speelveld[$r][$k]=$k+$r*5+1;    
  }
}

echo "<h2>De negen is numeriek: ".$speelveld[1][3];
echo " | De zes is numeriek: ".$speelveld[1][0]."</h2>";

// Maak een HTML-tabel met opmaak
echo '<table style="border-collapse: collapse; width: 450px; background: white; text-align: center; font-size: 3em;">';

foreach ($speelveld as $rij) {
  // met tr wordt voor elk element uit $speelveld nieuwe rij in de tabel gemaakt
  echo '<tr style="height: 150px;">';
  foreach ($rij as $kolom) {
    // met td wordt voor elk element uit de betreffende $rij een nieuwe kolom (cel) in de huidige rij van de tabel gemaakt
    echo '<td style="border: 1px solid orange; padding: 5px;">'.$kolom.'</td>';    
  }
  echo '</tr>';
}
// HTML-einde van de tabel
echo '</table>';
/*
echo "<pre>Speelveld:";
print_r($speelveld);
echo "</pre>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>