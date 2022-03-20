<?php
  include("config.php");
  //creare le tabelle del DB $db
  /*
  Prodotto (codice prodotto, codice produttore,descrizione, prezzo); 

   Produttore (codice produttore, ragione sociale, partita iva, amministratore) 
  */
  $query="
     create table if not exists produttore(
       codice varchar(20) primary key,
       ragionesociale varchar(40),
       partitaiva varchar(40),
       amministratore varchar(40)
     );
  ";
  mysqli_query($conn,$query) or die("Errore creazione tabella".mysqli_error($conn));  

  $query="
     create table if not exists prodotto(
       codice int(10) primary key auto_increment,
       codiceprod varchar(20),
       descrizione varchar(50),
       prezzo int(10),
       foreign key (codiceprod) references produttore(codice) on delete cascade on update cascade
     );
  ";
  mysqli_query($conn,$query) or die("Errore creazione tabella".mysqli_error($conn));  
  
  mysqli_close($conn);
?>