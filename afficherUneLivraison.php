<?php
	//Conneciton a la base de données
  include "connect.php";
  $vConn = fConnect();
 /* Récupération des variables passées par le fomulaire */

  $vNumV=$_POST['NumV'];
 
  //Ajout de l'achat
  $vSql1 ="SELECT a.descrip as article, m.magasinName as magasin, ll.quantite as quantite
from article a, magasin m, ligneLivraison ll, livraison l
where l.numero = '$vNumV'
and a.articleId = ll.articleREF
and m.magasinID = l.magasinID
and ll.livraisonNB = l.numero;
";
        
  $vQuery=pg_query($vConn, $vSql1);
	echo "<table border="1">"; 
    echo  "<tr><td width="100pt"><b>Article</b></td> <td width="100pt"><b>Prix</b></td> <td width="100pt"><b>Quantité</b></td> </tr> ";

while ($vResult = pg_fetch_array($vQuery) {
    echo "<tr>";
    echo "<td> $vResult[article]</td>";
    echo "<td>$vResult[prix]</td>";
    echo "<td>$vResult[quantite]</td>";
    echo "</tr>";

echo "<a href="Acceuil.html">Finir</a>";



?> 