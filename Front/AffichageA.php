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
.event-grid {
    margin-left: 70px;
    margin-right: 70px;
}

#description-banner {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: #fff;
    display: none;
}

#event-title {
    font-size: 24px;
    margin: 0;
}

#event-description {
    margin: 10px 0 0 0;
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
                    <div class="col-lg-5 col-md-5 col-12">
                <form class="d-flex" action="search.php" method="get">
                    <input class="form-control me-2" type="search" name="query" placeholder="Recherche..." aria-label="Recherche">
                    <button class="btn btn-outline-success" type="submit">Recherche</button>
                </form>
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

<br><br>

<!------------------------------------------------------------------------affichage evenement-------------------------------------------------------------->


<h1>Attraction</h1>

<br><br>
<?php
$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$sql = "SELECT idevent, nomevent, image, description FROM evenements WHERE domaine = 'attraction' AND date >= :current_date ORDER BY date ASC";
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
            <a href="aff_event.php?idevent=<?php echo $event['idevent']; ?>">
                <img src="<?php echo $event['image']; ?>" alt="<?php echo $event['nomevent']; ?>">
                <h2><?php echo $event['nomevent']; ?></h2>
                <p><?php echo $event['description']; ?></p>
            </a>
            <div class="overlay"></div>
        </div>
    <?php endforeach; ?>
</div>



<script>
    const eventGrid = document.querySelector('.event-grid');
    const descriptionBanner = document.querySelector('#description-banner');
    const eventTitle = document.querySelector('#event-title');
    const eventDescription = document.querySelector('#event-description');
    const eventLink = document.querySelector('#event-link');

    eventGrid.addEventListener('click', (event) => {
        if (event.target.classList.contains('event-details-link')) {
            event.preventDefault();

            const title = event.target.getAttribute('data-title');
            const description = event.target.getAttribute('data-description');
            const link = event.target.getAttribute('data-link');

            eventTitle.textContent = title;
            eventDescription.textContent = description;
            eventLink.setAttribute('href', link);
            eventLink.textContent = 'En savoir plus';

            descriptionBanner.style.display = 'block';
        }
    });

    descriptionBanner.addEventListener('click', (event) => {
        if (event.target.tagName !== 'A') {
            descriptionBanner.style.display = 'none';
        }
    });
</script>



<!----------------------------------------------------------------------fin-affichage-------------------------------------------------------------------->

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