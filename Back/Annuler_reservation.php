<?php
include_once 'connection.php';

$idreservation = $_POST['idreservation'];

try {
  $sql = "DELETE FROM reservation WHERE idreservation=:idreservation";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':idreservation', $idreservation);
  $stmt->execute();
  header("Location: /projet/view/Back/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
