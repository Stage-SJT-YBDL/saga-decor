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
                        <label class="color-white" for="">Votre demande concerne :</label>
                        <div class="flex">
                            <div>
                                <input id="radio1" type="radio" name="option" value="Saga décor">
                                <label for="radio1" class="radio-label">Saga décor</label>
                            </div>
                            <div>
                                <input id="radio2" type="radio" name="option" value="Scd">
                                <label for="radio2" class="radio-label">SCD</label>
                            </div>
                        </div>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                        <input class="green-button" type="submit" value="Envoyer" style="width: 50%;">
                    </form>
                </div>
                <div class="contact-center flex column align-center justify-around text-center pd2">
                    <h1 class="form-title-scd">Satinage</h1>
                    <div class="grey-line"></div>
                    <img class="form-logo" src="./assets/media/img/contact/contact-scd.png" alt="Logo Sage Décor blanc">
                    <h2>1 rte Grands Champs, 16130 GENSAC LA PALLUE</h2>
                    <h2>Contact:  Corinne Deboudt</h2>
                    <H2>Email:  corinne.deboudt@saga-decor.com</H2>
                    <h2>Tel: +33 (0)5 45 32 14 95</h2>
                </div>
                <div class="contact-right flex column align-center justify-around text-center pd2">
                    <h1 class="form-title">Autres décors</h1>
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