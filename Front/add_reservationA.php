<?php
include_once 'connection.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonsplans";
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$idevent = $_GET['idevent'];
$sql = "SELECT * FROM evenements WHERE idevent = :idevent";
$query = $db->prepare($sql);
$query->bindParam(':idevent', $idevent);
$query->execute();
$event = $query->fetch(PDO::FETCH_ASSOC);
$nb_placeparreservation = $_POST['nb_placeparreservation'];
$id_bookeur = $_POST['id_bookeur'];
try {
  $sql = "INSERT INTO reservation (`nb_placeparreservation`, `id_bookeur`, `idevent`) VALUES (:nb_placeparreservation, :id_bookeur, :idevent)";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(':nb_placeparreservation', $nb_placeparreservation);
  $stmt->bindParam(':id_bookeur', $id_bookeur);
  $stmt->bindParam(':idevent', $idevent);
  $stmt->execute();
  header("Location:  /projet/view/Front/AffichageCT.php");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
  header("Location: /projet/view/Front/indexR.php");
}
$db = null;
?>
