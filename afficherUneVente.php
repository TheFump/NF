<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vNumV=$_POST['NumV'];
 
  //Ajout de l'achat
  $vSql1 ="SELECT a.descrip as article, a.prix as prix, lt.quantite as quantite, lt.modePaiement as Paiement
from article a, ligneTicket lt, vente v
where v.numVente = '$vNumV'
and a.articleId = lt.articleId
and lt.venteNum = v.numVente
";
        
  $vQuery=pg_query($vConn, $vSql1);
	echo "<table border="1">"; 
    echo  "<tr><td width="100pt"><b>Article</b></td> <td width="100pt"><b>Prix</b></td> <td width="100pt"><b>Quantité</b></td> <td width="100pt"><b>Mode Paiement</b></td> </tr> ";

while ($vResult = pg_fetch_array($vQuery) {
    echo "<tr>";
    echo "<td> $vResult[article]</td>";
    echo "<td>$vResult[prix]</td>";
    echo "<td>$vResult[quantite]</td>";
    echo "<td>$vResult[Paiement]</td>";
    echo "</tr>";

echo "<a href="Acceuil.html">Finir</a>";



?> 