<?php
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
