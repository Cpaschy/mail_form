<!DOCTYPE html>
<head>
<title>Réservation par envoi de mail</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css "integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <span><h2>Formulaire de réservation</h2></span>
        <?php
            if (isset($_POST['prenom'] , $_POST['nom'] , $_POST['phone'] , $_POST['venu'] , $_POST['hvenu'], $_POST['depart'] , $_POST['gridRadios'] ))
            {   if( $_POST['venu'] < $_POST['depart']) {
                $message = "Prenom " . htmlspecialchars($_POST['prenom']) . " Nom " . htmlspecialchars($_POST['nom']) . " \r\n Numéro de télephone " . htmlspecialchars($_POST['phone']) . "\r\n Date d'arrivée " . htmlspecialchars($_POST['venu'])
                    . "\r\n Heure d'arrivée " . htmlspecialchars($_POST['hvenu']) . "\r\n Date de départ " . htmlspecialchars($_POST['depart']) . " \r\n Modèle de chambre " . $_POST['gridRadios'];

                $retour = mail('you@yourmail.com', 'Un client vient de réserver sur le site de MACASAH ', $message);
                if ($retour) {

                    echo '<h4>Merci', ' ', $_POST['prenom'], ' ', $_POST['nom'], ' nous vous contacterons dans les plus bref délais</h4>';
                    echo " <script>  {alert('Votre demande a bien été enregistré')} </script> ";
                }
            }
           elseif ($_POST['venu'] > $_POST['depart']){

                echo "<script> {alert('la date d\'arrivée doit etre inférieur à la date de départ ')}</script>";
           }
            }
            ?>
        <form method="post" >
            <div id="fondre">
                <fieldset>
                    <legend>Informations personnelles</legend>
                    <div class="col">
                        <label>Prénom:</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                    </div>
                    <div class="col">
                        <label>Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
                    </div>
                    <div class="col">
                        <label for="phone">Téléphone:</label>
                        <input type="tel" id="phone" class="form-control" name="phone" placeholder="XX-XX-XX-XX" required>
                    </div>
                </fieldset>
                <fieldset class="form-group">
                    <legend>Séjour</legend>
                        <div class="col">
                            <label for="venu">Date d'arrivée</label>
                            <input type="date" id="venu" class="form-control" name="venu" required>
                        </div>
                        <div class="col">
                            <label for="hvenu">Heure d'arrivée</label>
                            <input type="time" id="hvenu" class="form-control" name="hvenu" required>
                        </div>
                        <div class="col">
                            <label for="depart">Date de départ</label>
                            <input type="date" id="depart" class="form-control" name="depart" required>
                        </div>
                </fieldset>
                <div class="col">
                    <fieldset class="form-group">
                        <legend>Modèles de chambres</legend>
                        <div class="row">
                            <p class="col-form-label col-sm-6 pt-0"> Choisissez votre modèle de CHAMBRE </p>
                            <div class="col-sm-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="chambre de type 1" checked required>
                                    <label class="form-check-label" for="gridRadios1">
                                        CHAMBRE DE TYPE 1
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="chambre de type 2">
                                    <label class="form-check-label" for="gridRadios2">
                                        CHAMBRE DE TYPE 2
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="chambre de type 3">
                                    <label class="form-check-label" for="gridRadios3">
                                        CHAMBRE DE TYPE 3
                                    </label>
                                </div>
                                <div class="form-check ">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="chambre annexe" >
                                    <label class="form-check-label" for="gridRadios4">
                                        CHAMBRE ANNEXE
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div align="center">
                    <div class="col ">
                        <br/> <button type="submit" class="btn btn-dark" >Réserver</button>
                    </div>
                </div>
            </form>
    </body>
</html>    