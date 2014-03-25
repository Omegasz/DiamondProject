<html>
    <head>

        <title>Diamonds Games</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" type="image/png" href="pictures/favicon.png" />
        <script src="jquery-1.10.2.min.js"></script>
    </head>

    <body>

        <!-- HEAD -->
        <header>
            <div id="logo"><a href="index.html"><img src="pictures/logo.png" height="160px" width="800px"/></a></div>
           <?php
            if(isset($_SESSION["userId"])){
                echo'<div class="login">
                        <br/>
                        <form method="post" action="deco.php">
                        Bonjour  '.$user["nom"].' '.$user["prenom"].'
                        <br/>
                        <input type="submit" name="deco" value="Se deconnecter" class="btn btn-primary btn-blocka btn-large"/>
                        </form>
                    </div>';
            }
            else {
                echo '<div class="login">
                        <br/>
                        <form action="index.php" method="post">
                        <input type="text" name="email" placeholder="Adresse Mail" required="required" /><br/>
                        <input type="password" name="password" placeholder="Mot de passe" required="required" /><br/>
                        <button type="submit" name="submit" class="btn btn-primary btn-blocka btn-large">Se connecter</button><br/>
                        <button type="submit" name="forgot" class="btn btn-primary btn-blockb btn-large">Mot de passe Oublié ?</button> 
                        <button type="submit" name="inscription" class="btn btn-primary btn-blockc btn-large">Inscription</button>
                        </form>
                    </div>';
            }
            ?>
            
        </header>

        <section>
            <!-- Menu --> 
            <div id="menu1">
                <a href="#">Accueil</a>
                <a href="#">Games</a>
                <a href="#">Tests</a>
                <a href="#">Comparateur</a>
                <a href="#">Contact</a>
            </div>

            <div id="contenu">
                zzzziiiiiiiiiiiiiiiiizzzzzzzzzzziiiiiiiiiiiiiiii
            </div>

            <div id="navigation">
                &nbsp
            </div>
        </section>
    </body>
</html>