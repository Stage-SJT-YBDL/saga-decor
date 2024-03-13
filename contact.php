<?php
 include('header.php');
?>
<main>
    <section class="contact">
        <div class="head-img color-white ">
            <p class="newH1 black-bg blur flex justify-center">
                Contact
            </p>
        </div>
        <div class="flex justify-center">
            <section class="contact-form flex mgr2">
                <div class="contact-left pd2">
                    <form class="contact-input flex align-center column pdv2" action="">
                        <input type="text" name="" id="" placeholder="Nom">
                        <input type="text" name="" id="" placeholder="Entreprise">
                        <input type="email" name="" id="" placeholder="Adresse mail">
                        <input type="text" name="" id="" placeholder="Objet de la demande">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>
                <div class="contact-right flex column align-center justify-around text-center pd2">
                    <h1 class="form-title">Nos coordonées</h1>
                    <div class="grey-line"></div>
                    <img class="form-logo" src="./assets/media/img/contact/logo-saga-blanc.png" alt="Logo Sage Décor blanc">
                    <h2>328 Rue Pasteur 60700 PONT SAINTE MAXENCE</h2>
                    <h2>Contact:  Corinne Deboudt</h2>
                    <H2>Email:  corinne.deboudt@saga-decor.com</H2>
                    <h2>Tel: +33 (0)3 44 31 77 66</h2>
                </div>
            </section>
        </div>
    </section>
</main>

<?php
 include('footer.php');
?>