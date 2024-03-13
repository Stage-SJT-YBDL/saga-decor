<?php
include('header.php');
?>

<main>
    <section class="contact">
        <div class="head-img color-white ">
            <p class="newH1 black-bg blur flex justify-center">
                Inscription / Connexion admin
            </p>
        </div>
        <div class="flex justify-center">
            <section class="contact-form flex mgr2">
                <div class="contact-left pd2 blur">
                    <form class="contact-input flex align-center column pdv2" action="traitement_inscription.php" method="post">
                        <h2>INSCRIPTION</h2>
                        <input type="text" name="pseudo" id="" placeholder="Pseudo">
                        <input type="text" name="first_name" id="" placeholder="Prénom">
                        <input type="text" name="last_name" id="" placeholder="Nom">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password1" placeholder="Mot de passe">
                        <input type="password" name="password2" placeholder="Confirmez votre mot de passe">
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>
                <div class="contact-right blur flex column align-center justify-center pd2">
                    <form class="contact-input justify-center flex align-center column pdv2" action="traitement_connexion.php" method="post">
                        <h2>CONNEXION</h2>
                        <input type="text" name="pseudo" id="" placeholder="Pseudo">
                        <input type="password" name="password1" placeholder="Mot de passe">
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>

            </section>
        </div>
    </section>
</main>

<?php
 include('footer.php');
?>