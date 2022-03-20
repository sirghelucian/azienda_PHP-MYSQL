<?php
  include("config.php");
  echo"<h1>Elimina un produttore (ed i suoi prodotti)</h1>";
  $query="select * from produttore;";
  $risultato=mysqli_query($conn,$query)or die (mysqli_error($conn));
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
          <select name='prod'>";
      while($riga=mysqli_fetch_array($risultato)){
        echo"<option value='$riga[codice]'>$riga[ragionesociale]</option>";
      }  
  echo"</select>
      <input type='submit' name='ok' value='Elimina i prodotti del produttore scelto'>
    </form>
  ";

  if(isset($_POST['ok'])){
    $query="delete from produttore where codice='$_POST[prod]';";
    mysqli_query($conn,$query)or die (mysqli_error($conn));
    
    //redirect a visualizza
    header("location:visualizza_prodotti.php");

    //echo"<br><a href='home.php'>HOME PAGE</a>";
  }
?>