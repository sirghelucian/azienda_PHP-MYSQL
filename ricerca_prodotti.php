<?php
  include("config.php");
  echo"<h1>Ricerca i prodotti di un produttore specifico</h1>";
  $query="select * from produttore;";
  $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
          <select name='prod'>";
      while($riga=mysqli_fetch_array($risultato)){
        echo"<option value='$riga[codice]'>$riga[ragionesociale]</option>";
      }  
  echo"</select>
      <input type='submit' name='ok' value='Visualizza i prodotti del produttore selezionato'>
    </form>
  ";

  if(isset($_POST['ok'])){
    $query="select descrizione,prezzo from prodotto join produttore on produttore.codice=prodotto.codiceprod where codiceprod='$_POST[prod]';";
    $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
    echo"<table border='1'><tr><td>Descrizione del prodotto Produttore:$_POST[prod]</td><td>Prezzo</td></tr>";
      while($riga=mysqli_fetch_array($risultato)){
       echo"<tr><td>$riga[descrizione]</td><td>$riga[prezzo]€</td></tr>";
      }
    echo"</table>";
    echo"<br><a href='home.php'>HOME PAGE</a>";
  }
?>