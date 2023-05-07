<?php
include_once 'connection.php';

$idevent = $_POST['idevent'];
$nom = $_POST['nom'];
$domaine = $_POST['domaine'];
$date = $_POST['date'];
$description = $_POST['description'];
$prix_billet = $_POST['prix_billet'];
$nb_place = $_POST['nb_place'];
$image = $_POST['image'];


// Requête pour vérifier si le nom existe dans la table "evenements"
$sql = "SELECT idevent FROM evenements WHERE idevent = :idevent";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':idevent', $idevent);
$stmt->execute();

if($stmt->rowCount() > 0) {

try {
  $sql = "UPDATE evenements SET nomevent=:nom, domaine=:domaine, date=:date, description=:description, nb_place=:nb_place, prix_billet=:prix_billet, image=:image WHERE idevent=:idevent";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':idevent', $idevent);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':domaine', $domaine);
  $stmt->bindParam(':date', $date);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':prix_billet', $prix_billet);
  $stmt->bindParam(':nb_place', $nb_place);
  $stmt->bindParam(':image', $image);


  $stmt->execute();
  header("Location: /projet/view/Front/dist");
} 
catch(PDOException $e) 
{
  echo "Erreur: " . $e->getMessage();
}

} else {
 // echo "L'id de l'événement n'existe pas dans la base de données.";
  echo '<script>alertID();</script>';
  header("Location: /projet/view/index.php");
}

$conn = null;
?>























<!--?php
include_once 'connection.php';








$id = $_POST['id'];
$nom = $_POST['nom'];
$domaine = $_POST['domaine'];
$date = $_POST['date'];
$description = $_POST['description'];
$prix_billet = $_POST['prix_billet'];
try {
  $sql = "UPDATE evenements SET nomevent=:nom, domaine=:domaine, date=:date, description=:description, prix_billet=:prix_billet WHERE idevent=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':domaine', $domaine);
  $stmt->bindParam(':date', $date);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':prix_billet', $prix_billet);
  $stmt->execute();
  header("Location: /projet/view/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
-->