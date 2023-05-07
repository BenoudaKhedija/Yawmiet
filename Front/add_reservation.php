<!--?php
include_once 'connection.php';

// Récupération du nombre depuis la base de données
$sql = "SELECT nb_reservation FROM evenements WHERE idevent = :ideventA";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':idevent', $idevent);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
$nombre_base = $result['nb_reservation'];

$idreservation = $_POST['idreservation'];
$nb_placeparreservation = $_POST['nb_placeparreservation'];
$id_bookeur = $_POST['id_bookeur'];
$idevent = $_POST['ideventA'];

try {


  if ($nb_placeparreservation > $nombre_base) 
  {
    echo "Il n'y a pas assez de billets disponibles !";
  } else {

    $sql = "INSERT INTO reservation (`idreservation`, `nb_placeparreservation`, `id_bookeur`, `idevent`) VALUES  (:idreservation, :nb_placeparreservation, :id_bookeur, :idevent)";
 
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

  }

$conn = null;
?-->



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
  header("Location: /projet/view/index.php");

}

$conn = null;
?>