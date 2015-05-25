<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vCode=$_POST['Code'];
  $vQte=$_POST['Qte'];
  $vPaie= 'Carte';
  $vVente = $_POST['vente']


$selected_radio = $_POST['Paiement'];

if ($selected_radio == 'Carte') {

$vPaie == 'Carte';

}
else if ($selected_radio == 'CHK') {

$vPaie == 'Cheque';

}
else if ($selected_radio == 'esp') {

$vPaie == 'Especes';

}

}
//Ajout de la ligne
  $vSql1 ="INSERT INTO ligneTicket(numero,venteNum,articleId,quantite,modePaiement) 
VALUES(NEXTVAL('ligneT_seq'),'$vVente','$vCode','$vQte','$vPaie');"

        
  $vQuery=pg_query($vConn, $vSql1);

  header('Location: ajouterLigneTicket.html?vente='vente''); 


?> 