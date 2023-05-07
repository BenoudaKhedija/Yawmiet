<?php
session_start();

/*if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}*/

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

    // Vérifier si l'événement est déjà dans les favoris de l'utilisateur
    $query = $db->prepare("SELECT COUNT(*) FROM favoris WHERE idevent = :idevent AND id_favoris = :id_favoris");
    $query->bindParam(":idevent", $_POST['idevent']);
    $query->bindParam(":id_favoris", $_SESSION['id_favoris']);
    $query->execute();
    $count = $query->fetchColumn();

    if ($count == 0) {
        // Ajouter l'événement aux favoris de l'utilisateur
        $query = $db->prepare("INSERT INTO favoris (idevent, id_favoris, date_ajout) VALUES (:idevent, :id_favoris, NOW())");
        $query->bindParam(":idevent", $_POST['idevent']);
        $query->bindParam(":id_favoris", $_SESSION['id_favoris']);
        $query->execute();

        $_SESSION['success_message'] = "L'événement a été ajouté à vos favoris.";
    } else {
        $_SESSION['error_message'] = "L'événement est déjà dans vos favoris.";
    }
} catch (PDOException $e) {
    $_SESSION['error_message'] = "Erreur : " . $e->getMessage();
}

header("Location: index.php");
exit();
?>