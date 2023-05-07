<?php
session_start();

if (!isset($_POST['idevent'])) 
{
    header("Location: index.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonsplans";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Ajouter l'événement aux favoris de l'utilisateur
        $query = $db->prepare("INSERT INTO favoris (idevent, date_ajout) VALUES (:idevent,  NOW())");
        $query->bindParam(":idevent", $_POST['idevent']);
        $query->execute();
        $_SESSION['success_message'] = "L'événement a été ajouté à vos favoris.";
        
} catch (PDOException $e) {
    $_SESSION['error_message'] = "Erreur : " . $e->getMessage();
}

header("Location: index.php");
exit();
?>