<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body>
    <div class="formulaire">
        <H1 class="inscrivezvous">Contactez-nous !</H1>
    </div>
    <!-------------------------------- Ligne à rjt CSS ------------------------------------------->
    <div id="modal">
        <div class="mask"></div>
        <div class="container">
            <div class="message"></div>
            <a href="#" class="close">&times;</a>
        </div>
    </div>

    <div class="Nom_prenom_mail">
        <!-------------------------------- rajt rectangles nom + prenom + mail ------------------------------------------->
        <!-------------------------------- Mettre mots dans rectangles ------------------------------------------->
        Nom
        Prénom
        Email
    </div>

    <div class="Message">
        <H2>Message</H2>
        <!-------------------------------- rajt rectangle "Objet du msg" + txt ------------------------------------------->
        <div class="ObjetMess">
            <H2>Objet du message</H2>
            <!-------------------------------- rjt rect mail + txt ------------------------------------------->
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Objet"/>
        </div>   

        <!-------------------------------- rajt rectangle "Votre message" + txt  ------------------------------------------->
        Votre message...
    </div>

    <!-------------------------------- rajt rectangle "formulaire" + txt ------------------------------------------->
    Envoyer formulaire

</body>

</html>


    <div id="modal">
        <div class="mask"></div>
        <div class="container">
            <div class="message"></div>
            <a href="#" class="close">&times;</a>
        </div>
    </div>
    
    <!-------------------------------- Ligne à rjt CSS ------------------------------------------->
    
    <div class="formulaire">
    <H1 class="inscrivezvous">Inscrivez-vous</H1>
    <hr>
        <div class="mail">
            <H2>E-Mail</H2>
            <!-------------------------------- rjt rect mail + txt ------------------------------------------->
            <input type="text" id="name" name="name" required minlength="0" maxlength="20" size="40" value="Email"/>
        </div>   

        <div class="mdp">
            <H2>Mot de passe</H2>
            <!-------------------------------- rjt rect mdp + txt ------------------------------------------->
            <input type="text" id="name" name="name" required minlength="6" maxlength="25" size="40" value="Mot de passe (6 caractères minimum)"/>
        </div>

        <div class="confirmer mdp">
            <H2>Confirmer mot de passe</H2>
            <!-------------------------------- rjt rect confirmer mdp + txt ------------------------------------------->
            <input type="text" id="name" name="name" required minlength="6" maxlength="25" size="40" value="Confirmation"/>
        </div>  

        <div class="afficher mdp">
            <!-------------------------------- rjt carré afficher mdp + txt à gauche ------------------------------------------->
            Afficher le mot de passe
        </div>        

        <div class="bouton1">
        <input class="bouton" type="button" value="S'inscrire" />
        </div>  
        <p class="encliquant">En cliquant sur « S'inscrire », vous confirmez que vous acceptez les Conditions générales d'utilisation et notre Politique de confidentialité qui vous informe des modalités de traitement de vos données personnelles ainsi que de vos droits sur ces données.
        </p>
    </div>
    
        <!-------------------------------- rjt bouton inscrire + txt + ombre ------------------------------------------->
        
<?php require_once '../../footer.php'; ?>