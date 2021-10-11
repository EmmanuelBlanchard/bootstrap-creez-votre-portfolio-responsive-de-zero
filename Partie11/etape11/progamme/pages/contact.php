<?php ob_start(); 
require("../utile/formatage.php");
?>

<?php 
if(isset($_POST['mail'])){
    $to = "tiavine24@hotmail.fr";
    $from = $_POST['mail'];
    $object = $_POST['objet'];
    $message = $_POST['message'];
    mail($to,$object,$message,$from);
    ?>
        <div class="alert alert-success" role="alert">
            Message envoyé
        </div>
<?php } ?>

<div class="container text-center">
    <?= formatageTitre("Mes informations personnelles"); ?>
    <!-- <h2 class="m-5 perso_bgBlue text-white rounde-lg p-3">> Mes informations personnelles <</h2> -->
    <table class="table table-borderless">
        <thead>
            <tr>
                <td><img src="../sources/images/contact/tel.png" width="100px" /></td>
                <td><img src="../sources/images/contact/yt.png" width="100px"/></td>
                <td><img src="../sources/images/contact/FB.png" width="100px"/></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>00 00 00 00 00</td>
                <td><a href="https://www.youtube.com/channel/UCeanIJBmomfC73xUx8j2cuQ" target=_blank>H2PROG</a></td>
                <td><a href="https://www.facebook.com/h2prog" target=_blank>/H2PROG</a></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="container text-center">
    <?= formatageTitre("Formulaire de contact"); ?>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Adresse mail :</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="mail" placeholder="Entrez votre mail">
        </div>
        <div class="form-group">
            <label for="objet">Objet :</label>
            <select class="form-control" id="objet" name="objet">
                <option value="question">Question</option>
                <option value="remarque">Remarque</option>
                <option value="autre">Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message : </label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

<?php
    $content = ob_get_clean();
    require "commons/template.php";
?>