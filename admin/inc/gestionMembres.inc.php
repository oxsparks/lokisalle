<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<h3>Nos membres </h3>
  <div class="container">
    <div class="row">
      <table class="center-block">
        <tr>
          <th>id membre</th>
          <th>pseudo</th>
          <th>nom</th>
          <th>prénom</th>
          <th>email</th>
          <th>civilité</th>
          <th>statut</th>
          <th>date d'enregistrement</th>
          <th>action</th>
        </tr>
        <?php echo afficheMembres(); ?>
      </table>
    </div>
  </div>
<hr>
<form action="../libs/services.php?action=inscription" method="post">

	<div class="container">
 		<div class="row">

 			<section class="col-md-6">
 				<label>Pseudo</label><br>
  				<input type="text" name="pseudo" placeholder="Votre pseudo" required="required"><br>

  				<label>Mot de passe</label><br>
  				<input type="password" name="mdp" placeholder="Votre mot de passe" required="	required"><br>

  				<label>Nom</label><br>
  				<input type="text" name="nom" placeholder="Votre Nom" required	="required"><br>

  				<label>Prénom</label><br>
  				<input type="text" name="prenom" placeholder="Votre Prénom" required="required"><br>
  			</section>

  			<section class="col-md-6">
  				<label>E-mail</label><br>
  				<input type="email" name="email" placeholder="Votre Email" 	required="required"><br>

  				<label>Genre</label><br>
  				<select name="civilite" required="required">
  				  <option value="f">Femme</option>
  				  <option value="m">Homme</option>
  				</select><br>

  				<input type="submit" value="Inscription">
  			</section>
  		</div>
	</div>
</form>
