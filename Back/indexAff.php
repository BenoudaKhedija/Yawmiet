<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrateur </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="YAWMIET.png">
        <link rel="shortcut icon" href="favicon.ico"> <!--icône pour être affichée dans l'onglet du navigateur-->

        <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
        <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
        <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link href="css/tooplate-waso-strategy.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/dash.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css">

        <style type="text/css">/* Chart.js */
            @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
        </style>
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
.event-grid {
    margin-left: 70px;
    margin-right: 70px;
}
        </style>
    </head>

    <body>
<!------------------------------------------------------------ Left Panel --------------------------------------------------------->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">       

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i> Espace Admin </a>
                        </li>
                        <h3 class="menu-title"> Gestions</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Evénement</a>
                            <ul class="sub-menu children dropdown-menu">
                                <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                                <li><i class="fa fa-table"></i><a href="indexAdd.html">Ajout</a></li>
                                <li><i class="fa fa-table"></i><a href="indexUpdate.html">Modification</a></li>
                                <li><i class="fa fa-table"></i><a href="indexSup.html">Suppression</a></li>
                                <li><i class="fa fa-table"></i><a href="indexAff.html">Affichage</a></li> 
                            </ul>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Reservation</a>
                            <ul class="sub-menu children dropdown-menu">
                                <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                                <li><i class="fa fa-table"></i><a href="table-utilisateur.php">Ajout</a></li>
                                <li><i class="fa fa-table"></i><a href="table-reservation.php">Modification</a></li>
                                <li><i class="fa fa-table"></i><a href="table_chambre.php">Suppression</a></li>
                                <li><i class="fa fa-table"></i><a href="table-marketing.php">Affichage</a></li> 
                            </ul>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Life style</a>
                            <ul class="sub-menu children dropdown-menu">
                                <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                                <li><i class="fa fa-table"></i><a href="table-utilisateur.php">Utilisateur</a></li>
                                <li><i class="fa fa-table"></i><a href="table-reservation.php">Reservation</a></li>
                                <li><i class="fa fa-table"></i><a href="table_chambre.php">chambre</a></li>
                                <li><i class="fa fa-table"></i><a href="table-marketing.php">Hotel</a></li> 
                            </ul>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Produit</a>
                            <ul class="sub-menu children dropdown-menu">
                                <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                                <li><i class="fa fa-table"></i><a href="table-utilisateur.php">Utilisateur</a></li>
                                <li><i class="fa fa-table"></i><a href="table-reservation.php">Reservation</a></li>
                                <li><i class="fa fa-table"></i><a href="table_chambre.php">chambre</a></li>
                                <li><i class="fa fa-table"></i><a href="table-marketing.php">Hotel</a></li> 
                            </ul>

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Actualité</a>
                            <ul class="sub-menu children dropdown-menu">
                                <!-- <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li> -->
                                <li><i class="fa fa-table"></i><a href="table-utilisateur.php">Utilisateur</a></li>
                                <li><i class="fa fa-table"></i><a href="table-reservation.php">Reservation</a></li>
                                <li><i class="fa fa-table"></i><a href="table_chambre.php">chambre</a></li>
                                <li><i class="fa fa-table"></i><a href="table-marketing.php">Hotel</a></li> 
                            </ul>
                        </li>
                    
                        <h3 class="menu-title">Suppléments</h3><!-- /.menu-title -->
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Login</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">S'identifier</a></li>
                                <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">S'inscrire</a></li>
                                <li><i class="menu-icon fa fa-paper-plane"></i></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
<!----------------------------------------------------------------------left-panel ------------------------------------------------------------>

<!----------------------------------------------------------------------Right Panel------------------------------------------------------------------>

        <div id="right-panel" class="right-panel">

<!----------------------------------------------------------------Tableau trié EVENT+favoris----------------------------------------------------------------->

<h1>Liste des événements à venir</h1>
        
<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "bonsplans";
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

<br><br><br>

        </div>

<!-------------------------------------------------------------Fin-Right Panel------------------------------------------------------------------>

        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/widgets.js"></script>
        <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
        <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/validation.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/validation.js"></script>
        <script>
            (function($) {
                "use strict";

                jQuery('#vmap').vectorMap({
                    map: 'world_en',
                    backgroundColor: null,
                    color: '#ffffff',
                    hoverOpacity: 0.7,
                    selectedColor: '#1de9b6',
                    enableZoom: true,
                    showTooltip: true,
                    values: sample_data,
                    scaleColors: ['#1de9b6', '#03a9f5'],
                    normalizeFunction: 'polynomial'
                });
            })(jQuery);
        </script>
        <div class="jqvmap-label" style="display: none;"></div>

    </body>
</html>