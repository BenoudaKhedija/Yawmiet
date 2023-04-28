<?php
include_once 'connection.php';

$idreservation = $_POST['idreservation'];
$nb_placeparreservation = $_POST['nb_placeparreservation'];
$id_bookeur = $_POST['id_bookeur'];
$idevent = $_POST['idevent'];

try {
  $sql = "UPDATE reservation SET nb_placeparreservation=:nb_placeparreservation, id_bookeur=:id_bookeur, idevent=:idevent WHERE idreservation=:idreservation";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':idreservation', $idreservation);
  $stmt->bindParam(':nb_placeparreservation', $nb_placeparreservation);
  $stmt->bindParam(':id_bookeur', $id_bookeur);
  $stmt->bindParam(':idevent', $idevent);
  $stmt->execute();
  header("Location: /projet/view/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}

$conn = null;
?>
