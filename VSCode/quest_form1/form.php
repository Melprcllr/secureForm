<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form  action="thanks.php"  method="post">
    <div>
    <br>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name" placeholder="Nom" requiered>
    </div>
    <div>
    <br>
      <label  for="prenom">Prénom :</label>
      <input  type="text"  id="prenom"  name="user_firstname" minlength="1" maxlength="30" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" placeholder="Prénom" requiered>
    </div>
    <div>
    <br>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email" placeholder="email" requiered>
    </div>
    <div>
    <br>
      <label  for="numberTel">Numéro de téléphone :</label>
        <input  type="number" id="number"  name="user_number" placeholder="Numéro de téléphone" requiered>
    </div>

    <div>
        <br>    
                <label for="sujet">Sujet du message</label>
                <select id="sujet" name="sujet" requiered>
                        <option value="commande">Commande</option>
                        <option value="renseignements">Renseignements</option>
                        <option value="autre">Autre</option>
                </select></div>
    <br>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea requiered minlength="1" maxlength="150" placeholder="Votre messsage ici...">
    </.div>
    <div  class="button">
    <br>
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>  

</body>
</html>