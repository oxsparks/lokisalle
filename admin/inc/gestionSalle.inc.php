<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<h3>Nos salles </h3>
  <div class="container">
    <div class="row">
      <table class="center-block">
        <tr>
          <th>id salle</th>
          <th>titre</th>
          <th>description</th>
          <th>photo</th>
          <th>pays</th>
          <th>ville</th>
          <th>adresse</th>
          <th>cp</th>
          <th>capacité</th>
          <th>catégorie</th>
          <th>action</th>

        </tr>
        <tr>
          <?php echo afficheSalles(); ?>
        </tr>


      </table>
    </div>
  </div>
  <hr>

  <form action="../libs/services.php?action=addSalle" method="post">

 	<div class="container">
 		<div class="row">

 			<section class="col-md-6">
 	 			<label>Titre</label><br>
 	 				<input type="text" name="titre" placeholder="titre de la salle"><br>

 	 			<label>Description</label><br>
 	 				<textarea name="description" placeholder="Description de la salle"></textarea><br>

 	 			 <label>Photo</label><br>
 	 				<input type="image" name="photo" value="parcourir..">ajouter une photo<br>

 	  			<label>Capacité</label><br>
 	 				<?php //boucle pour afficher la capacité en menu 			deroulant
 					  // Variable qui ajoutera l'attribut selected 	de la 		liste déroulante
 					  $selected = '';
 					  // Parcours du tableau
 					  echo '<select name="capacite">',"\n";
 					  for($i=1; $i<=500; $i++)
 					  {
 					    // Affichage de la ligne
 					    echo "\t",'<option value="', $i ,'"', $selected ,'>'	, $i ,'</option>',"\n";
 					    // Remise à zéro de $selected
 					    $selected='';
 					  }
 					  echo '</select>',"\n";
 					?><br>

 				<label>Catégorie</label> <br>
 					<select name="categorie">
 						<option>bureau</option>
 						<option>formation</option>
 						<option>reunion</option>
 					</select><br>
 			</section>

 			<section class="col-md-6">
 				<label>Pays</label><br>
 					<select name="pays">
 						<option>France</option>
 					</select><br>

 				<label>Ville</label><br>
 					<select name="ville">
 						<option>Lyon</option>
 						<option>Paris</option>
 					</select><br>

 				<label>Adresse</label><br>
 					<textarea name="adresse" placeholder="Adresse de la salle"></textarea><br>

 				<label>Code Postal</label><br>
 					<input type="text" name="cp" placeholder="Code Postal de la salle"><br>

 				<input type="submit" value="enregistrer">
 			</section>
 		</div>

 	</div>

  </form>
