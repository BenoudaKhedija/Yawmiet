
<?php
include_once 'connection.php';

$idreservation = $_POST['idreservation'];
$nb_placeparreservation = $_POST['nb_placeparreservation'];
$id_bookeur = $_POST['id_bookeur'];
$idevent = $_POST['ideventA'];

try {

  $sql = "INSERT INTO reservation (`idreservation`, `nb_placeparreservation`, `id_bookeur`, `idevent`) VALUES  (:idreservation, :nb_placeparreservation, :id_bookeur, :idevent)";
 
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':idreservation', $idreservation);
  $stmt->bindParam(':nb_placeparreservation', $nb_placeparreservation);
  $stmt->bindParam(':id_bookeur', $id_bookeur);
  $stmt->bindParam(':idevent', $idevent);
  $stmt->execute();
  header("Location: /projet/view/Front/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
  header("Location: /projet/view/Front/index.php");
}

$conn = null;
?>