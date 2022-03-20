<?php
 /*
  Prodotto (codice prodotto, codice produttore,descrizione, prezzo); 

   Produttore (codice produttore, ragione sociale, partita iva, amministratore) 
  */
  include("config.php");
  $query="
    insert into produttore values
       ('Apple','Apple inc','123456ABCD','Tim Cook'),
  	   ('Microsoft','Microsoft computer','ABCD12345','Steve Balmer'),
  	   ('Samsung','Samsung LTE','789012ASFGS','Mr CHU'),
  	   ('Amazon','Amazon INT','TRETETE646627','Jeff Bezos');
  ";
  mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error($conn));
  //inserimenti avvenuti con successo
  $query="
    insert into prodotto(codiceprod,descrizione,prezzo) values
       ('Apple','Iphone X 64GB',759),
       ('Samsung','Galaxy S10',859),
       ('Amazon','Echo PRO',129),
       ('Microsoft','Laptop 15 pollici',1500);
  ";
  mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error($conn));
?>