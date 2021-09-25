<?php
require "../general/debut.html";
require "../general/menu.html";
?>
<div class="container">

	  <h1>Mes informations</h1>
	  <div class="firstgrid">
		<div class="photoprofil"><img src="img/david.jpg" id="pp" alt="Ma photo de profil"></div>

		<div class="nompromo">
		  <h2>David Hebert</h2>
		  <p> [NUMERO ETUDIANT] </p>
		  <p>Né le : 21 / 05 / 2000</p>
		  <h4>[NOM DE LA PROMO]</h4>
		  <p>Redoublant : Non</p>
		</div>
		<div class="uploadpp">
		  <h2>Changer Photo de profil</h2>
		  <form class="" action="infoetudiant.html" method="post">
			<label for="avatar">Choisir avatar :</label>
			<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
			<button id="savepp" type="submit" class="btn btn-dark">Submit</button>
		  </form>
		</div>
	  </div>
	  <div class="secondgrid">

		<div class="formpswd">
		  <div class="formcenter">
		  <form class="changmdp" action="infoetudiant.html" method="post">
			<h2 class="mdp"> Changer mon mot de passe </h2>
			<div class="form-group">
			  <label for="">Mon ancien mot de passe</label></br>
			  <input style="background-color:black" placeholder="Ancien mot de passe" type="password" name="ancienmdp" value="">
			</div>
			<div class="form-group">
			  <label for="">Nouveau mot de passe</label></br>
			  <input style="background-color:black" placeholder="Nouveau mot de passe" type="password" name="nvxmdp" value="">
			</div>
			<div class="form-group">
			  <label for="">Repeter nouveau mot de passe</label></br>
			  <input style="background-color:black" placeholder="Repeter mot de passe" type="text" name="repnvxmdp" value="">
			</div>
			<button id="savemdp" type="submit" class="btn btn-dark">Changer</button>
		  </form>
		</div>
	  </div>

	  <div class="notesperso">
		<h2>Mes notes personnelles</h2>
		<form class="" action="infoetudiant.html" method="post">
		  <textarea id="noteperso" style="background-color:black" placeholder="Mes perso notes ici . . ." name="name" rows="8" cols="80"></textarea>
		  <button id="savenotes" type="submit" class="btn btn-dark">Modifier</button>
		</form>
	  </div>
</div>
</div>

<br/><br/><br/>
<?php
require "../general/fin.html";
?>