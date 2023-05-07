<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bonsplans";

// Connexion à la base de données
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// Récupération des mots clés saisis dans la barre de recherche
$keywords = $_GET['query'];

// Requête SQL pour récupérer les articles contenant les mots clés
$sql = "SELECT * FROM evenements WHERE nomevent LIKE '%$keywords%'";

// Exécution de la requête
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll();

// Affichage des articles trouvés
foreach ($articles as $article) {
    echo '<h2>' . $article['nomevent'] . '</h2>';
}
?>
