<?php
session_set_cookie_params(0);
session_start();
include('includes/config.php');
error_reporting(0);
$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];

if (isset($_POST['submit'])) {
    $name2 = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $postid = intval($_GET['id']);
    $st1 = '0';
    $sql = "INSERT INTO comments(`postid`,`name`,`email`,`comment`,`status`) VALUES(:postid,:name2,:email,:comment,:st1)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':postid', $postid, PDO::PARAM_STR);
    $query->bindParam(':name2', $name2, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':comment', $comment, PDO::PARAM_STR);
    $query->bindParam(':st1', $st1, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        echo "<script>alert('Comment submitted, wait for approval');</script>";
    } else {
        echo "<script>alert('Something went wrong');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post Details</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/magnific-popup.css" rel="stylesheet">

        <link href="css/tooplate-waso-strategy.css" rel="stylesheet">

        <link href="css/style.css" rel="stylesheet">
</head>

<body>

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

        <nav class="navbar navbar-expand-lg bg-white shadow-lg" style ="">
            <div class="container">
                 <!-- <a href="index.html" class="navbar-brand">
                    <img src="YAWMIET.png" alt="Yawmiet">
                  </a>  -------------------pour mettre image et non pas un texte --------->
                
                <a href="index2.html" class="text-danger">Yawmiet</a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index2.html"><small class="small-title"><strong class="text-warning">01</strong></small> Accueil</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="index.html#section_2"><small class="small-title"><strong class="text-warning">02</strong></small> life style</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="BonsPlans.html"><small class="small-title"><strong class="text-warning">03</strong></small>  bons plans</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="BLOG.php"><small class="small-title"><strong class="text-warning">04</strong></small>  Blog </a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link inactive" href="login.php"><small class="small-title"><strong class="text-warning">05</strong></small> Inscription</a>
                        </li>
                    </ul>
                <div>         
            </div>
        </div></div></nav>
<br><br>
<br>
<br>

<!---------------------------------------------------------------------END-HEADER------------------------------------------------------------------>


    <!-- Header -->
    <?php  ?>

    <?php
    $id = intval($_GET['id']);
    $s = 1;
    $sql1 = "SELECT posts.*,categories.catname,categories.id AS cid FROM posts JOIN categories ON categories.id=posts.category WHERE posts.id=:id AND posts.status=:s";
    $query = $dbh->prepare($sql1);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    $query->bindParam(':s', $s, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    $cnt = 1;
    if ($query->rowCount() > 0) {
    foreach ($results

    as $result) {
    ?>
    <?php if (htmlentities($result->image1) == null) { }?>
    
        <!-- Header -->

        <article>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">

                        <div class="post-preview">
                            <h2 class="post-title"><?php echo htmlentities($result->title); ?></h2>
                            <p class="post-meta">Category: <?php echo htmlentities($result->catname); ?><br>
                                                 Posted
                                                 by&nbsp;<b><?php echo htmlentities($result->username); ?></b>
                                                 on <?php echo htmlentities($result->creationdate); ?>
                            </p>
                            <p style="font-weight: bold;"><?php echo htmlentities($result->grabber); ?></p>
                            <?php if (htmlentities($result->image1) == null) {
                            } else { ?>
                                <p><img class="img-fluid"
                                        src="assets/img/postimages/<?php echo htmlentities($result->image1); ?>"
                                        width="auto" height="auto" style="border:solid 1px #000"></p>
                            <?php } ?>
                            <p style="text-align: justify;"><?php echo htmlentities($result->description); ?></p>
                            <p class="post-meta">Posted by&nbsp;<?php echo htmlentities($result->username); ?>
                                                 on <?php echo htmlentities($result->creationdate); ?>
                            </p>
                        </div>
                        <?php }
                        } ?>

                    </div>

                    <!--Display Comments-->
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <?php
                        $pid = intval($_GET['id']);
                        $sts = 1;
                        $sql3 = "SELECT `name`,`comment`,`postingdate` FROM comments WHERE postid=:pid AND status=:sts";
                        $query = $dbh->prepare($sql3);
                        $query->bindParam(':pid', $pid, PDO::PARAM_STR);
                        $query->bindParam(':sts', $sts, PDO::PARAM_STR);
                        $query->execute();
                        $results3 = $query->fetchAll(PDO::FETCH_OBJ);
                        $cnt = 1;
                        if ($query->rowCount() > 0) {
                            foreach ($results3

                                     as $result3) {
                                ?>
                                <div class="card my-4">
                                    <h5 class="card-header">Comments</h5>
                                    <div class="card-body">
                                        <div class="media-body">
                                            <h6><?php echo htmlentities($result3->name); ?> <br/>
                                                <span style="font-size:11px;"><b>commented at</b> <?php echo htmlentities($result3->postingdate); ?></span>
                                            </h6>
                                            <div style="font-size: 18px;">
                                                Comment: <?php echo htmlentities($result3->comment); ?></div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                                $cnt++;
                            }
                        } ?>
                    </div>
                    <!--Display Comments-->

                    <!--Post comment-->
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <div class="card my-4">
                            <h5 class="card-header">Leave a Comment:</h5>
                            <div class="card-body">
                                <form name="Comment" method="post">
                                    <input type="hidden" name="csrftoken"
                                           value="<?php echo htmlentities($_SESSION['token']); ?>"/>
                                    <div class="form-group">
                                        <?php if ($_SESSION['login']) {
                                            $email = $_SESSION['login'];
                                            $sql2 = "SELECT fname,lname FROM users WHERE email=:email";
                                            $query = $dbh->prepare($sql2);
                                            $query->bindParam(':email', $email, PDO::PARAM_STR);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $result2) {
                                                    $name = $result2->fname . " " . $result2->lname;
                                                    ?>
                                                    <input type="text" name="name"
                                                           value="<?php echo htmlentities($name); ?>"
                                                           class="form-control" required>
                                                <?php }
                                            }
                                        } else { ?>
                                            <input type="text" name="name" class="form-control"
                                                   placeholder="Enter your fullname" autocomplete="off" required>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <?php if ($_SESSION['login']) {
                                            ?>
                                            <input type="email" name="email"
                                                   value="<?php echo $_SESSION['login']; ?>"
                                                   class="form-control"
                                                   placeholder="Enter your Valid email" autocomplete="off" required>
                                        <?php } else { ?>
                                            <input type="email" name="email"
                                                   value=""
                                                   class="form-control"
                                                   placeholder="Enter your Valid email" autocomplete="off" required>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                            <textarea class="form-control" name="comment" rows="3" placeholder="Comment"
                                                      required></textarea>
                                    </div>
                                    <?php if ($_SESSION['login']) {
                                        ?>
                                        <button type="submit" class="btn btn-primary float-right" name="submit">Submit
                                        </button>
                                    <?php } else { ?>
                                        <a href="login.php" class="btn btn-primary float-right">Log in & Comment</a>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <br>
                    </div>
                    <!--Post comment-->

                </div>
        </article>

        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>

    <!---------------------------------------------------------------------------------FOOTER------------------------------------------------------------------------------>

    <section class="contact" id="section_5">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9c10b" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
            <div class="contact-container-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="contact-thumb"></div>    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

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

<!----------------------------------------------------------------------------------END-FOOTER------------------------------------------------------------------>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/clean-blog.js"></script>
</body>

</html>