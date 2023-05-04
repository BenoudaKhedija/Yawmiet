<?php
include_once 'connection.php';//ne pas changer

$nom = $_POST['nom'];
$nb_place = $_POST['nb_place'];
$domaine = $_POST['domaine'];
$date = $_POST['date'];
$nb_reservation = $_POST['nb_reservation'];
$description = $_POST['description'];
$prix_billet = $_POST['prix_billet'];

/*// Vérification de la date
$today = date('Y-m-d');
if ($date < $today) {
  header("Location: /projet/view/index.php");
}*/

try {
  $sql = "INSERT INTO evenements (nomevent, nb_place, domaine, date, nb_reservation, description, prix_billet) VALUES (:nom, :nb_reservation, :domaine, :date, :nb_place, :description, :prix_billet)";
  //changer enfonction de ta base de données
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':nb_place', $nb_place);
  $stmt->bindParam(':domaine', $domaine);
  $stmt->bindParam(':date', $date);
  $stmt->bindParam(':nb_reservation', $nb_reservation);
  $stmt->bindParam(':description', $description);
  $stmt->bindParam(':prix_billet', $prix_billet);
  $stmt->execute();
  header("Location: /projet/view/dist");//dist est la page du cube de loading
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}

$conn = null;
?>
