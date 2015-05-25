<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vCode=$_POST['Code'];
  $vQte=$_POST['Qte'];
  
  $vVente = $_POST['vente']


}
//Ajout de la ligne
  $vSql1 ="INSERT INTO ligneLivraison(numLigne, livraisonNB, articleREF, quantite) 
VALUES(NEXTVAL('livLigne_seq'),$vVente,'$vCode','$vQte');

        
  $vQuery=pg_query($vConn, $vSql1);

  header('Location: ajouterLigneLivraison.html?vente='vente'"); 


?> 