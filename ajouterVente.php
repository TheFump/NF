<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vID=$_POST['ID'];
  $vDate=$_POST['Date'];
  $vTime=$_POST['Time'];
  $vNumC=$_POST['NumC'];
  //Ajout de l'achat
  $vSql1 ="INSERT INTO vente(numVente,magasinId,venteDate,venteTime,clientNb) 
		   VALUES(NEXTVAL('vente_seq'),'$vID',TO_DATE('$vDate','yyyy-mm-dd'),'$vTime',$vNumC);"
        
  $vQuery=pg_query($vConn, $vSql1);

  header('Location: ajouterLigneTicket.html?vente='vente_seq'); 


?> 