<?php ob_start(); 
require "../utile/formatage.php";
?>

<div id="carouselExampleIndicators" class="carousel slide perso_bgBlueDegrade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="../sources/images/cours1.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
        <img src="../sources/images/cours3.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
    <div class="carousel-item">
        <img src="../sources/images/catalogue.png" class="d-block w-75 h-75 mx-auto img-thumbnail border border-dark" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="text-center mt-3 boutonTelechargerCV">
    <a class="btn perso_bgOrange rounded-pill text-white" href="../sources/pdf/CV.pdf" download="CV-Matthieu">Télécharger mon CV !</a>
</div>

<div class="container text-center" id="presentation">
    <?= formatageTitre("Matthieu : Formateur H2PROG"); ?>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/ipIQK_pNGyo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="container text-center" id="competences">
    <?= formatageTitre("Mes compétences"); ?>
    <div class="row">
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>HTML / CSS</h3>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>PHP / POO</h3>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>JavaScript / Node.JS</h3>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>SQL / PDO</h3>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>Analyse / Conception</h3>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4 my-4">
            <h3>Graphisme</h3>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center pt-5" id="portfolio">
    <?= formatageTitre("Mon Portfolio"); ?>
    <div class="card-group">
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cours JavaScript</div>
            <div class="card-body text-success p-0">
                <img src="../sources/images/cours1.png" class="d-block w-100" alt="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours1">
                    En savoir plus
                </button>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cours PHP</div>
            <div class="card-body text-success p-0">
                <img src="../sources/images/cours3.png" class="d-block w-100" alt="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cours3">
                    En savoir plus
                </button>
            </div>
        </div>
        <div class="card border-success mb-3">
            <div class="card-header bg-transparent border-success">Cas pratique PHP / MySQL</div>
            <div class="card-body text-success p-0">
                <img src="../sources/images/catalogue.png" class="d-block w-100" alt="">
            </div>
            <div class="card-footer bg-transparent border-success">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#catalogue">
                    En savoir plus
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cours1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cours JavaScript</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/cours1.png" class="d-block w-100" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quas similique error facilis fugit culpa beatae, sunt vero voluptatem consequuntur aspernatur nihil debitis nisi asperiores molestias facere, sint nam eum!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cours3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cours PHP</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/cours3.png" class="d-block w-100" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo voluptatibus accusamus officia esse expedita eligendi dolor ea voluptatem, rerum beatae, quibusdam atque. Culpa cupiditate minus reprehenderit dolorem nisi dignissimos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="catalogue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cas pratique PHP/MySQL</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="../sources/images/catalogue.png" class="d-block w-100" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, quas similique error facilis fugit culpa beatae, sunt vero voluptatem consequuntur aspernatur nihil debitis nisi asperiores molestias facere, sint nam eum!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<div class="container text-center pt-5" id="temoignages">
    <?= formatageTitre("Mes témoignages"); ?>
    <div class="row">
        <div class="col-12 col-lg-4 temoignage1">
            <img src="../sources/images/aigle.jpg" class="rounded-circle" style="width:140px;height:140px" alt="">
            <h3>Client 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe sed, vitae quaerat excepturi voluptas eveniet sit tempore soluta alias fugit! Maiores dolor magni, cum inventore quia quo at harum!</p>
        </div>
        <div class="col-12 col-lg-4 temoignage2">
            <img src="../sources/images/loup.jpg" class="rounded-circle" style="width:140px;height:140px" alt="">
            <h3>Client 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe sed, vitae quaerat excepturi voluptas eveniet sit tempore soluta alias fugit! Maiores dolor magni, cum inventore quia quo at harum!</p>
        </div>
        <div class="col-12 col-lg-4 temoignage3">
            <img src="../sources/images/chat.jpg" class="rounded-circle" style="width:140px;height:140px" alt="">
            <h3>Client 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro saepe sed, vitae quaerat excepturi voluptas eveniet sit tempore soluta alias fugit! Maiores dolor magni, cum inventore quia quo at harum!</p>
        </div>
    </div>
</div>

<script src="../js/main.js"></script>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>