<html>
    <head>
        <meta charset="UTF-8">
        <script language ="javascript" type = "text/javascript">
            function validateForm ()
            {
                var nom = document.forms["form"]["lastName"].value;
                var prenom = document.forms["form"]["firstName"].value;
                var mail = document.forms["form"]["mail"].value;
                if (nom == "")
                {
                    alert("Veuillez renseigner votre nom");
                    return false;
                }
                else
                    if (prenom == "") {
                        alert("Veuillez renseigner votre prenom");
                        return false;
                    }
                else
                    if (mail == ""){
                        alert("Veuillez renseigner votre mail");
                        return false;
                    }
                else
                {
                    return confirmrdv();
                }
            }
           function confirmrdv() {
                var result = confirm("Voulez-vous confirmer votre rdv?");
                if (result ==true) {
                    alert("Votre rendez-vous est validé");
                }
                else {
                    alert ("Vous pouvez modifier votre rendez-vous");
                    return false;
                }
            }

        </script>
    </head>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire</title>
</head>
<body>
    <img src = "Ressources/Medias/Image27.jpg" width = 100%>
    <div class = "form">
        <div class = "centrer">
            <p>Prise de rendez-vous</p>
        </div>

        <form name = "form" action = "index.php?page=rdv" method="post" onsubmit="return validateForm()">
            <p>
                <label for ="nom">Nom</label>
                <input type ="text" id = "Nom" name ="lastName" >
            </p>
            <p>
                <label for ="prenom">Prenom</label>
                <input type ="text" id = "Prenom" name ="firstName">
            </p>
            <p>
                <label for ="Mail">Mail</label>
                <input type ="text" id = "Mail" name ="mail">
            </p>
            <p>
                <label for="Heure">Heure du rendez-vous </label>
                <select name ="Heure" id = "Heure">
                    <option value ="1"> 10h-12h </option>
                    <option value ="2"> 12h-14h </option>
                    <option value ="3"> 14h-16h </option>
                </select>
            </p>
                <div>
                    <label for="Heure">Date</label>
                    <input type ="date" name ="date">
                </div>
            <div class = "Bouton">
                <input type="submit" value ="Enregistrer">
            </div>
        </form>
    </div>

</body>
<style>
    .form{
        position:absolute;
        top: 38%;
        left:39.3%;
        padding-left:40px;
        padding-right:40px;
        box-sizing: border-box;
        background-color: whitesmoke;
        border-radius: 25px;
        color: black;

    }
    .form input[type = text]{

        border-bottom: 1 px solid;
        background-color: transparent;
        outline: none;
        height: 15px;
    }
    .centrer{
        text-align: center;
        font-weight: bold;
    }
    .Bouton{
        text-align: center;
    }
</style>

</html>