#include ("connexionBDD");
$query = "select no, libelle, count(noProduit) as nombre from  categorie inner join ptoduit on produit.categorie = categorie.no where noRayon =".$GET["noRayon"]."group by no, libele limite ".$GET_[page]".*3, 3;

$result = mysql-query($base, $query);

while($tabInfo = mysqli-fetch-assoc($result))