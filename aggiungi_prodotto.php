<?php
  include("config.php");
  /*
  Prodotto (codice prodotto, codice produttore,descrizione, prezzo); 

   Produttore (codice produttore, ragione sociale, partita iva, amministratore) 
  */
   echo"<h1>Aggiungi un prodotto al DB</h1>";
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>";
  $risultato=mysqli_query($conn,"select * from produttore;")or die (mysqli_error()); 
   echo"<select name='prod'>";
   while($riga=mysqli_fetch_array($risultato)){
    echo"<option value='$riga[codice]'>$riga[ragionesociale]</option>";
   }
  echo"</select><br><input type='text' name='descrizione'> Descrizione prodotto<br>
     <input type='number' name='prezzo'> Prezzo *<br>
     <input type='submit' name='ok' value='Invia dati'> 
    </form>
  ";
  if(isset($_POST['ok'])){
  	if($_POST['descrizione']=="" || $_POST['prezzo']==""){
  		echo"Compila tutti i campi";
  	}
  	else{
      //insert into prodotto(codiceprod,descrizione,prezzo) values
       $query="insert into prodotto(codiceprod,descrizione,prezzo) values ('$_POST[prod]','$_POST[descrizione]','$_POST[prezzo]')";
       mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
       echo"prodotto aggiunto correttamente";
       echo"<br><a href='home.php'>HOME PAGE</a>";
  	}
  }
?>