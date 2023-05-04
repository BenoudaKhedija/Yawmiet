<?php
include_once 'connection.php';//ne pas changer

$ids = $_POST['ids'];

try {
  $sql = "DELETE FROM evenements WHERE idevent=:ids";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':ids', $ids);
  $stmt->execute();
  header("Location: /projet/view/dist");
} catch(PDOException $e) {
  echo "Erreur: " . $e->getMessage();
}
$conn = null;
?>
