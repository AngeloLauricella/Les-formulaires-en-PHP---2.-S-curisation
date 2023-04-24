<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form action ="thanks.php" method = "post">
    <h1>Votre message</h1>
    <div>
        <label for ="nom" >Nom :</label>
        <input type="text" id ="nom" name="user_name" required="required">
    </div>
    <div>
        <label for ="prenom" >Prénom :</label>
        <input type="text" id ="prenom" name="user_prenom" required="required" >
    </div>
    <div>
        <label for="courriel" >Email:</label>
        <input type="email" id="courriel" name="user_mail" required="required" >
    </div>
    <div>
        <label for="phone" >Numéro de téléphone :</label>
        <input type="tel" id="phone" name="user_phone" required="required">
    </div>
    <div>
        <label for="sujet">Votre demande concerne :</label>
        <select name="user_sujet" id="sujet" required="required">
        <option value="">--Choisir une arme--</option>
        <option value="Sword">Epée</option>
        <option value="gun">pistolet</option>
        <option value="Baton">Baton</option>
        <option value="arc">arc</option>
        <option value="lance">lance</option>
        <option value="grimoire">grimoire</option>
        </select>
    </div>
    <div>
        <label for="message" >Message:</label>
        <textarea id="message" name="user_message" required="required"></textarea>
    </div>
    <br>
    <div>
        <button type="submit" >Envoyer</button>
    </div>
</form>
</body>
</html>