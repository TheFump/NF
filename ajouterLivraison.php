<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vID=$_POST['ID'];
  $vDate=$_POST['Date'];
  $vTime=$_POST['Time'];
  
  //Ajout de l'achat
  $vSql1 ="INSERT INTO livraison(numero,livDate,livTime,magasinID) VALUES (NEXTVAL('livraison_seq'),TO_DATE('$vDate,'yyyy-mm-dd'),'$vTime','$vID');"
        
  $vQuery=pg_query($vConn, $vSql1);

  header('Location: ajouterLigneLivraison.html?vente='livraison_seq'); 


?> 