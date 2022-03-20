<?php
  include("config.php");
  /*
  Prodotto (codice prodotto, codice produttore,descrizione, prezzo); 

   Produttore (codice produttore, ragione sociale, partita iva, amministratore) 
  */
   echo"<h1>Visualizza i prodotti con indicazione ragione sociale del produttore</h1>";
  $query="select * from prodotto join produttore on produttore.codice=prodotto.codiceprod;";
  //CON TARGET LIST
  //$query="select ragionesociale,descrizione,prezzo from prodotto join produttore on produttore.codice=prodotto.codiceprod;"; 
  //CON VINCOLO NEL WHERE
  //$query="select ragionesociale,descrizione,prezzo from prodotto,produttore where produttore.codice=prodotto.codiceprod;";
  //con VINCOLO NEL WHERE E TARGET LIST
  $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
  echo"<table border='1'><tr><td>Ragione sociale del produttore</td><td>Descrizione del prodotto</td><td>Prezzo</td></tr>";
  while($riga=mysqli_fetch_array($risultato)){
      echo"<tr><td>$riga[ragionesociale]</td><td>$riga[descrizione]</td><td>$riga[prezzo]€</td></tr>";
  }
  echo"</table>";
  echo"<br><a href='home.php'>HOME PAGE</a>";
?>