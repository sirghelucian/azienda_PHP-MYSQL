<?php
  include("config.php");
  /*
  Prodotto (codice prodotto, codice produttore,descrizione, prezzo); 

   Produttore (codice produttore, ragione sociale, partita iva, amministratore) 
  */
   echo"<h1>Aggiungi un produttore al DB</h1>";
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
     <input type='text' name='codice'> Codice Produttore (Denominazione) *<br>
     <input type='text' name='ragione'> Ragione sociale<br>
     <input type='text' name='partitaiva'> Partita IVA<br>
     <input type='text' name='admin'> Amministratore *<br>
     <input type='submit' name='ok' value='Invia dati'> 
    </form>
  ";
  if(isset($_POST['ok'])){
  	if($_POST['codice']=="" || $_POST['admin']==""){
  		echo"Compila tutti i campi";
  	}
  	else{
      //('Apple','Apple inc','123456ABCD','Tim Cook'),
       $query="insert into produttore values ('$_POST[codice]','$_POST[ragione]','$_POST[partitaiva]','$_POST[admin]')";
       mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
       echo"Produttore $_POST[codice] aggiunto correttamente";
       echo"<br><a href='home.php'>HOME PAGE</a>";
  	}
  }
?>