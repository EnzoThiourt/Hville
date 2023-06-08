<?php
if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['habilitation'])){
$id_employe = $_POST['id_employe'];
$id_post = $_POST['id_post'];
$nom_employe = $_POST['nom'];
$prenom_employe = $_POST['prenom'];

$Host="localhost";
$User = "AdminHville";
$Passwd="P@ssword";
$BD="hville";
$connexion= mysqli_connect($Host,$User,$Passwd,$BD);

$requete = "SELECT `id_employe`, `id_post`, `nom_employe`, `prenom_employe` FROM `employes`;"; 
$listeEmploye = mysqli_query($connexion,$requete);
 
$nom= $db->quote($nom);
$prenom= $db->quote($prenom);

/* ne fonctionne pas */

$requete = "INSERT INTO `INSERT INTO 'hville'.'employes' ('id_employe', 'id_post', 'nom_employe', 'prenom_employe') VALUES (NULL, NULL,'thiourt','enzo');";
echo $requete;
$res = $db->query($requete);
if($res == false){
 echo "<P>requete echouée</p>";
}
}