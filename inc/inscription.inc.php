<?php
    require_once("init.inc.php");
?>
<form action="../libs/services.php?action=inscription" method="post">
    <input type="text" name="pseudo" placeholder="Votre pseudo" required="required">
    <input type="password" name="mdp" placeholder="Votre mot de passe" required="required">
    <input type="text" name="nom" placeholder="Votre Nom" required="required">
    <input type="text" name="prenom" placeholder="Votre Prénom" required="required">
    <input type="email" name="email" placeholder="Votre Email" required="required">
    <select name="civilite" required="required">
      <option value="f">Femme</option>
      <option value="m">Homme</option>
    </select>
    <input type="submit" value="Inscription">
</form>
