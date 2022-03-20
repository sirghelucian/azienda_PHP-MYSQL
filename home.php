<?php
  include("config.php");
  
    echo"
      <h1> Esercitazione su utilizzo DBMS azienda con produttori e prodotti</h1>
      elenco delle funzionalità:<br>
      <ul>
       <li><a href='aggiungi_produttore.php'>Aggiungi un produttore al DB</a></li>
       <li><a href='aggiungi_prodotto.php'>Aggiungi un prodotto al DB</a></li>
       <li><a href='visualizza_prodotti.php'>Visualizza i prodotti con indicazione ragione sociale del produttore</a></li>
       <li><a href='ricerca_prodotti.php'>Ricerca i prodotti di un produttore specifico</a></li>
       <li><a href='ricerca_elimina_produttore.php'>Elimina un produttore (ed i suoi prodotti)</a></li>
       <li><a href='ricerca_elimina_prodotto.php'>Elimina un prodotto selezionandone il codice</a></li>
      </ul>

    ";
  
  

?>