<?php
include_once 'connection.php';

$id = $_POST['id'];

try {
  $sql = "DELETE FROM evenements WHERE idevent=:id";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  header("Location: /projet/view/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
