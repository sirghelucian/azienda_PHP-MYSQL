<?php
  include("config.php");
  echo"<h1>Elimina un prodotto selezionandone il codice</h1>";
  $query="select * from prodotto;";
  $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
  echo"<table border='1'><tr><td>Codice del prodotto</td><td>Codice del produttore</td><td>Descrizione del prodotto</td><td>Prezzo</td></tr>";
  while($riga=mysqli_fetch_array($risultato)){
      echo"<tr><td>$riga[codice]</td><td>$riga[codiceprod]</td><td>$riga[descrizione]</td><td>$riga[prezzo]€</td></tr>";
  }
  echo"</table><br><br>";
  $query="select * from prodotto;";
  $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
          <select name='prodotto'>";
      while($riga=mysqli_fetch_array($risultato)){
        echo"<option value='$riga[codice]'>$riga[codice]</option>";
      }  
  echo"</select>
      <input type='submit' name='ok' value='Elimina il prodotto selezionato'>
    </form>
  ";

  if(isset($_POST['ok'])){
    $query="delete from prodotto where codice='$_POST[prodotto]';";
    mysqli_query($conn,$query)or die (mysqli_error($conn));
    
    //redirect a se stesso
    header("location:ricerca_elimina_prodotto.php");

    //echo"<br><a href='home.php'>HOME PAGE</a>";
  }
?>