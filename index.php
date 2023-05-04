<?php
require 'connection.php';
?>

<!doctype html>
<html lang="en">
    <style>
        table {
                background-color: #fff;
                border: 1px solid #ccc;
                padding: 20px;
                margin-bottom: 20px;
                width: 50%;
                margin: auto;
                }

        th {
                background-color: #f9c10b;
                color: white;
                font-weight: bold;
                padding: 10px;
                border: 1px solid #ddd;
                }

         td {
                border: 1px solid #ddd;
                padding: 10px;
                }

        tr:nth-child(even) {
                background-color: #f2f2f2;
                }
    </style>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>YAWMIET</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/tooplate-waso-strategy.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <style>
            .marge-table {
            margin: 0 auto; /* centre le tableau horizontalement */
            width: 80%; /* définit la largeur du tableau */
            }
            .calendar-cell {
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            font-family: Arial, sans-serif;
            }

            .event-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.event {
  position: relative;
  overflow: hidden;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 0px 5px #ccc;
}

.event img {
  width: 100%;
  height: auto;
}

.event h2 {
  margin: 10px;
}

.event p {
  margin: 0px 10px 10px;
}

.event .overlay {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s;
}

.event:hover .overlay {
  opacity: 1;
}

.event .overlay:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  height: 80%;
  border: 2px solid white;
  border-radius: 50%;
}


        </style>

    </head>
    
    <body id="section_1">
<!-----------------------------------------------------------------HEADER------------------------------------------------------------------>

        <header class="site-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3 col-5">
                        <p class="text-white mb-0">
                            <a href="tel: 23 055 345" class="text-white">
                                <i class="bi-telephone site-header-icon me-2"></i>
                                23 055 345
                            </a>
                        </p>
                    </div>
    
                    <div class="col-lg-3 col-md-3 col-12 ms-auto">
                        <ul class="social-icon">
                            <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>
                            <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>
                            <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>
                            <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg bg-white shadow-lg" style="">
            <div class="container">
                 <!-- <a href="index.html" class="navbar-brand">
                    <img src="YAWMIET.png" alt="Yawmiet">
                  </a>  -------------------pour mettre image et non pas un texte --------->
                <a href="index.html" class="text-danger">Yawmiet</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html#section_1"><small class="small-title"><strong class="text-warning">01</strong></small> Accueil</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="index.html#section_2"><small class="small-title"><strong class="text-warning">02</strong></small> life style</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="index.html#section_3"><small class="small-title"><strong class="text-warning">03</strong></small>  bons plans</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="index.html#section_4"><small class="small-title"><strong class="text-warning">04</strong></small>  panier </a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="index.html#section_5"><small class="small-title"><strong class="text-warning">05</strong></small> Inscription</a>
                        </li>
                    </ul>
                <div>
                        
            </div>
        </div></div></nav>

        <!----------------------------------------------------------------END-HEADER------------------------------------------------------------------>

        <br>

        <body>

        <!----------------------------------------------------------------ADD------------------------------------------------------------------>

            <h1>Ajouter un événement</h1>
            <form id="formDate" action="add_event.php" method="POST">
                <label for="nom">Nom de l'événement:</label>
                <input type="text" id="nom" name="nom"><br>
        
                <label for="domaine">Domaine:</label>
                <select name="domaine">
                    <option value="Clubbing">Clubbing</option>
                    <option value="Attraction">Attraction</option>
                    <option value="Cinéma/Théatre..">Cinéma/Théatre..</option>
                    <option value="Sport">Sport</option>
                    <option value="Autre">Autre</option>
                </select><br>

                <label for="date">Date :</label>
                <input type="date" id="date" name="date">
        
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
        
                <label for="prix_billet">Prix du billet:</label>
                <input type="float" id="prix_billet" name="prix_billet"><br>
                
                <label for="nb_place">Nombre de places totales:</label>
                <input type="number" id="nb_place" name="nb_place"><br><br>

                <input type="submit" value="Ajouter l'événement" onclick="passValidation()"><!--bouton-->

            </form>
        <!---------------------------------------------------------------END-ADD------------------------------------------------------------------>

            <br><br><br><br>
        
        <!----------------------------------------------------------------UPDATE------------------------------------------------------------------>

            <h1>Modifier un événement</h1>
            <form action="update_event.php" method="POST">
                <label for="idevent">ID de l'événement à modifier:</label>
                <input type="number" id="idevent" name="idevent"><br>
        
                <label for="nom">Nom de l'événement:</label>
                <input type="text" id="nom" name="nom"><br>
        
                <label for="domaine">Domaine:</label>
                <select name="domaine">
                    <option value="Clubbing">Clubbing</option>
                    <option value="Attraction">Attraction</option>
                    <option value="Cinéma/Théatre..">Cinéma/Théatre..</option>
                    <option value="Sport">Sport</option>
                    <option value="Autre">Autre</option>
                </select><br>
        
                <label for="date">Date:</label>
                <input type="date" id="date" name="date"><br>
        
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="4" cols="50"></textarea><br>
        
                <label for="prix_billet">Prix du billet:</label>
                <input type="number" id="prix_billet" name="prix_billet"><br>

                <label for="nb_place">Nombre de places totales:</label>
                <input type="number" id="nb_place" name="nb_place"><br><br>
        
                <input type="submit" value="Modifier l'événement">
            </form>
        <!---------------------------------------------------------------END-UPDATE------------------------------------------------------------------>

            <br> <br> <br>
            
        <!----------------------------------------------------------------SUPPRIMER------------------------------------------------------------------>

            <h1>Supprimer un événement</h1>

            <form action="delete_event.php" method="POST">
                <label for="ids">ID de l'événement à supprimer:</label>
                <input type="number" id="ids" name="ids"><br><br>
        
                <input type="submit" value="Supprimer l'événement" >
            </form>

<!---------------------------------------------------------------END-SUPPRIMER------------------------------------------------------------------>

            <br><br><br><br>

<!----------------------------------------------------------------LIST-TABLEAU----------------------------------------------------------------->
        
    <h1>Liste des événements</h1>
        
        <?php
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $sql = "SELECT idevent, nomevent, domaine, date, description, prix_billet, nb_place, nb_reservation FROM evenements";
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
        ?>
        
        <table>
            <thead>
                <tr>
                    <th>ID de l'événement</th>
                    <th>Nom de l'événement</th>
                    <th>Domaine</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Prix du billet</th>
                    <th>Nombre de places</th>
                    <th>Nombre de réservations</th>
                    <th>              </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['idevent']; ?></td>
                        <td><?php echo $row['nomevent']; ?></td>
                        <td><?php echo $row['domaine']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['prix_billet']; ?></td>
                        <td><?php echo $row['nb_place']; ?></td>
                        <td><?php echo $row['nb_reservation']; ?></td>
                        <td>
                            <form method="POST" action="add_reservation.php">
                                <input type="submit" name="Réserver" value="Réserver">
                                <!--<input type="hidden" value=<PHP echo $evenement['idevent']; ?> name="idevent">  corriger la balise php-->
                            </form>
                        </td>
                     </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<!---------------------------------------------------------------END-LIST-TABLEAU----------------------------------------------------------------->

<br><br><br><br>

<!----------------------------------------------------------------Tableau trié EVENT+favoris----------------------------------------------------------------->

        <h1>Liste des événements à venir</h1>
        
<?php
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "SELECT idevent, nomevent, domaine, date, description, prix_billet, nb_place, nb_reservation FROM evenements WHERE date >= :current_date ORDER BY date ASC";
    $query = $db->prepare($sql);
    //$query->bindParam(':current_date', date('Y-m-d'));
    $current_date = date('Y-m-d');
    $query->bindParam(':current_date', $current_date);
    $query->execute();
    $events = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<table>
    <thead>
        <tr>
            <th>ID de l'événement</th>
            <th>Nom de l'événement</th>
            <th>Domaine</th>
            <th>Date</th>
            <th>Description</th>
            <th>Prix du billet</th>
            <th>Nombre de places</th>
            <th>Nombre de réservations</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $event): ?>
            <tr>
                <td><?php echo $event['idevent']; ?></td>
                <td><?php echo $event['nomevent']; ?></td>
                <td><?php echo $event['domaine']; ?></td>
                <td><?php echo $event['date']; ?></td>
                <td><?php echo $event['description']; ?></td>
                <td><?php echo $event['prix_billet']; ?></td>
                <td><?php echo $event['nb_place']; ?></td>
                <td><?php echo $event['nb_reservation']; ?></td>
                <td>
                    <form method="POST" action="add_reservation.php">
                        <input type="submit" name="submit" value="Réserver">
                    </form>
                    <form method="POST" action="add_favorite.php">
                        <input type="hidden" name="idevent" value="<?php echo $event['idevent']; ?>">
                        <input type="submit" name="submit" value="Ajouter aux favoris">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!--------------------------------------------------------------- Fin-Tableau-trié-EVENT+favoris----------------------------------------------------------------->

        <br><br><br><br>     

<!-----------------------------------------------------------------------calendrier------------------------------------------------------------------>

<?php
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // récupérer les événements pour les 30 prochains jours
    $sql = "SELECT idevent, nomevent, domaine, date, description, prix_billet, nb_place, nb_reservation FROM evenements WHERE date BETWEEN :start_date AND :end_date ORDER BY date ASC";
    $start_date = date('Y-m-d');
    $end_date = date('Y-m-d', strtotime('+30 days'));
    $query = $db->prepare($sql);
    $query->bindParam(':start_date', $start_date);
    $query->bindParam(':end_date', $end_date);
    $query->execute();
    $events = $query->fetchAll(PDO::FETCH_ASSOC);

    // créer un tableau associatif des événements pour chaque jour
    $events_by_day = array();
    foreach ($events as $event) {
        $event_date = date('Y-m-d', strtotime($event['date']));
        if (!array_key_exists($event_date, $events_by_day)) {
            $events_by_day[$event_date] = array();
        }
        array_push($events_by_day[$event_date], $event);
    }
?>

<h1>Calendrier des événements</h1>

<table>
    <thead>
        <tr>
            <th>Date</th>
            <th>Événements</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // afficher les événements pour chaque jour
            $current_date = strtotime($start_date);
            $end_date = strtotime($end_date);
            while ($current_date <= $end_date) {
                $date = date('Y-m-d', $current_date);
                $day_of_week = date('D', $current_date);
                echo "<tr>";
                echo "<td>$date ($day_of_week)</td>";
                echo "<td>";
                if (array_key_exists($date, $events_by_day)) {
                    echo "<ul>";
                    foreach ($events_by_day[$date] as $event) {
                        echo "<li>";
                        echo "<b>" . $event['nomevent'] . "</b><br>";
                        echo $event['description'] . "<br>";
                        echo "Domaine : " . $event['domaine'] . "<br>";
                        echo "Prix : " . $event['prix_billet'] . " dt<br>";
                        echo "Nombre de places : " . $event['nb_place'] . "<br>";
                        /*echo "<form method='POST' action='add_reservation.php'>";
                        echo "<input type='hidden' name='idevent' value='" . $event['idevent'] . "'>";
                        echo "<input type='submit' name='submit' value='Réserver'>";
                        echo "</form>";*/
                        echo "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "Aucun événement prévu pour ce jour.";
                }
                echo "</td>";
                echo "</tr>";
                $current_date = strtotime('+1 day', $current_date);
            }
        ?>
    </tbody>
</table>


<!-----------------------------------------------------------------------fin-calendrier-------------------------------------------------------------->

        <br><br><br><br>     


<!--------------------------------------------------------------------calendrier-vierge------------------------------------------------------------------>
<!--?php
// Récupérer le mois et l'année actuels
$month = isset($_GET['month']) ? intval($_GET['month']) : date('n');
$year = isset($_GET['year']) ? intval($_GET['year']) : date('Y');

// Vérifier si la date est valide
if (!checkdate($month, 1, $year)) {
    die("Date invalide");
}

// Récupérer le nombre de jours dans le mois
$days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Récupérer le jour de la semaine du premier jour du mois
$first_day = mktime(0, 0, 0, $month, 1, $year);
$first_day_of_week = date('N', $first_day);

// Générer le tableau HTML pour le calendrier
?-->
<!--table class="calendar">
    <caption><!-?php echo date('F Y', $first_day); ?></caption>
    <thead>
        <tr>
            <th>Lundi</th>
            <th>Mardi</th>
            <th>Mercredi</th>
            <th>Jeudi</th>
            <th>Vendredi</th>
            <th>Samedi</th>
            <th>Dimanche</th>
        </tr>
    </thead>
    <tbody-->
        <!--?php
        // Commencer par la première semaine du mois
        $week = 1;
        echo '<tr class="week-' . $week . '">';
        for ($i = 1; $i < $first_day_of_week; $i++) {
            echo '<td></td>';
        }

        // Afficher les jours du mois
        for ($day = 1; $day <= $days_in_month; $day++) {
            echo '<td>' . $day . '</td>';
            $day_of_week = date('N', mktime(0, 0, 0, $month, $day, $year));
            if ($day_of_week == 7 && $day != $days_in_month) {
                echo '</tr><tr class="week-' . ++$week . '">';
            }
        }

        // Terminer la dernière semaine du mois
        for ($i = $day_of_week; $i < 7; $i++) {
            echo '<td></td>';
        }
        echo '</tr>';
        ?>
    </tbody>
</table-->

<!-------------------------------------------------------------------fin-calendrier-vierge------------------------------------------------------------------>

<br><br>

<!----------------------------------------------------------------LIST-TABLEAU-FAVORIS---------------------------------------------------------------->
       
    <h1>Liste des Favoris</h1>
        
        <?php
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $sql = "SELECT `id_favoris`, `date_ajout`, `idevent` FROM `favoris` ";
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
        ?>
        
        <table>
            <thead>
                <tr>
                    <th>ID </th>
                    <th>ID de l'event</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?php echo $row['id_favoris']; ?></td>
                        <td><?php echo $row['idevent']; ?></td>
                        <td><?php echo $row['date_ajout']; ?></td>
                     </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<!---------------------------------------------------------------END-LIST-TABLEAU-FAVORIS---------------------------------------------------------------->

<br><br><br><br>

<!------------------------------------------------------------------------affichage evenement-------------------------------------------------------------->

<?php
// Connexion à la base de données et récupération des événements
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT idevent, nomevent, image, description FROM evenements WHERE date >= :current_date ORDER BY date ASC";
$query = $db->prepare($sql);
$current_date = date('Y-m-d');
$query->bindParam(':current_date', $current_date);
$query->execute();
$events = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Affichage des événements -->
<div class="event-grid">
    <?php foreach ($events as $event): ?>
        <div class="event">
            <a href="evenement.php?idevent=<?php echo $event['idevent']; ?>">
                <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['nomevent']; ?>">
                <h2><?php echo $event['nomevent']; ?></h2>
                <p><?php echo $event['description']; ?></p>
                <div class="overlay"></div>
            </a>
        </div>
    <?php endforeach; ?>
</div>


<!----------------------------------------------------------------------fin-affichage-------------------------------------------------------------------->
<br><br>



<!----------------------------------------------------------------ADD-reservation----------------------------------------------------------------->

        <h1>Ajouter une réservation</h1>
        <form action="add_reservation.php" method="POST" onsubmit="return passValidationn()">
            <label for="nb_placeparreservation">Nombre de places:</label>
            <input type="number" id="nb_placeparreservation" name="nb_placeparreservation"><br>

            <label for="id_bookeur">ID du booker:</label>
            <input type="number" id="id_bookeur" name="id_bookeur"><br>

            <label for="ideventA">ID de l'événement:</label>
            <input type="number" id="ideventA" name="ideventA"><br>

            <input type="submit" value="Ajouter la réservation" >
        </form><br>

<!---------------------------------------------------------------END-reservation------------------------------------------------------------------>

        <br><br><br><br>
        
<!---------------------------------------------------------------UPDATE-reservation------------------------------------------------------------------>

        <h1>Modifier une réservation</h1>
        <form action="update_reservation.php" method="POST">
            <label for="idreservation">ID de la réservation à modifier:</label>
            <input type="number" id="idreservation" name="idreservation"><br>

            <label for="nb_placeparreservation">Nombre de places:</label>
            <input type="number" id="nb_placeparreservation" name="nb_placeparreservation"><br>

            <label for="id_bookeur">ID du booker:</label>
            <input type="number" id="id_bookeur" name="id_bookeur"><br>

            <label for="idevent">ID de l'événement:</label>
            <input type="number" id="idevent" name="idevent"><br>

            <input type="submit" value="Modifier la réservation">
        </form><br>
<!---------------------------------------------------------------END-reservation------------------------------------------------------------------>

            <br><br><br><br>

<!----------------------------------------------------------------Annuler------------------------------------------------------------------>

            <h1>Annuler une réservation</h1>
            <form action="Annuler_reservation.php" method="POST">
                <label for="idreservation">ID de la réservation à annuler:</label>
                <input type="number" idreservation="idreservation" name="idreservation"><br><br>
        
                <input type="submit" value="Annuler la réservation">
            </form>
<!---------------------------------------------------------------END-Annuler------------------------------------------------------------------>

            <br><br><br><br>

<!----------------------------------------------------------------LIST-TABLEAU----------------------------------------------------------------->

            <h1>Liste des Réservations</h1>

            <?php
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $sql = "SELECT r.idreservation, r.nb_placeparreservation, r.id_bookeur, e.nomevent 
            FROM reservation r 
            JOIN evenements e 
            ON r.idevent = e.idevent"; 
            $stmt = $pdo->query($sql);
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;
            ?>

        <table>
            <thead>
                    <tr>
                        <th>ID de la réservation</th>
                        <th>Nb de place à réserver</th>
                        <th>ID du bookeur</th>
                        <th>Nom de l'événement</th>
                        <th>   </th>
                    </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row): ?>
                    <tr>
                            <td><?php echo $row['idreservation']; ?></td>
                            <td><?php echo $row['nb_placeparreservation']; ?></td>
                            <td><?php echo $row['id_bookeur']; ?></td>
                            <td><?php echo $row['nomevent']; ?></td>
                    
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

<!---------------------------------------------------------------END-LIST-TABLEAU----------------------------------------------------------------->

<br><br><br><br>

<!-----------------------------------------------------------------FOOTER------------------------------------------------------------------>

            <footer class="site-footer">
                <div class="container">
                    <div class="row">
                            
                        <div class="col-lg-6 col-12">
                            <div class="site-footer-wrap d-flex align-items-center">
                                <p class="copyright-text mb-0 me-4">Copyright © 2036 Yawmiet Strategy Co., Ltd.</p>
        
                                <ul class="social-icon">
                                    <li><a href="https://facebook.com/tooplate" class="social-icon-link bi-facebook"></a></li>
                                    <li><a href="https://pinterest.com/tooplate" class="social-icon-link bi-pinterest"></a></li>
                                    <li><a href="https://twitter.com/minthu" class="social-icon-link bi-twitter"></a></li>
                                    <li><a href="https://www.youtube.com/tooplate" class="social-icon-link bi-youtube"></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-12">
                            <p class="copyright-text mb-0 me-4">Yawmiet HTML Template is designed by <a href="https://www.tooplate.com/" target="_blank">WeBros</a></p>
                        </div>
                        
                    </div>
                </div>
            </footer>
<!-----------------------------------------------------------------END-FOOTER------------------------------------------------------------------>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/validation.js"></script>

    </body>
</html>