<?php
require "../general/debut.html";
require "../general/menu.html";
?>
<h2><br/>Gestion des absences</h2><br/>
<h2><br/>Semestre 1</h2><br/>
<label for="start">Choisir la date : </label>
<input type="datetime-local" id="dateheure" name="meeting-time" value="2020-11-18T21:03" min="2020-11-18T21:03" max="2050-11-18T21:03">
<br/><br/><br/>
<div class="tababs">
	<div class="tab">
<table id="tab_abs">
	<tr><th>Numéro </th><th>Prénom </th><th>Nom</th><th>Absent(e)</th></tr>
	<tr><td>1</td><td>Daphnée</td><td>Christelle</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>2</td><td>Romane</td><td>Anastasia</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>3</td><td>Gabin</td><td>Arthur</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr ><td>4</td><td>Flore</td><td>Brayan</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>5</td><td>Rony</td><td>Fanta</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>6</td><td>Sacha</td><td>Elora</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>7</td><td>Dimitri</td><td>Eleanor</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>8</td><td>Charline</td><td>Angelo</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>9</td><td>Ayline</td><td>Abraham</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>10</td><td>Astrid</td><td>Arthur</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>11</td><td>Zacharie</td><td>Yani</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>12</td><td>Ryad</td><td>Aglaé</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>13</td><td>Ruth</td><td>Elora</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>14</td><td>Anselme</td><td>Yvan</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>15</td><td>Christine</td><td>Fanta</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>16</td><td>Artur</td><td>Elora</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>17</td><td>Timothée</td><td>Eleanor</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>18</td><td>Charline</td><td>Angelo</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>19</td><td>Ayline</td><td>Abraham</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>20</td><td>Sébastien</td><td>Arthur</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>21</td><td>Tara</td><td>Yani</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>22</td><td>Ambre</td><td>Aglaé</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>23</td><td>Yaya</td><td>Romane</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>24</td><td>Solène</td><td>Yvan</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>25</td><td>Sérine</td><td>Fanta</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
	<tr><td>26</td><td>Sirine</td><td>Elora</td><td><input type="checkbox" name="liste_abs" class="check_abs" id="check1"></td></tr>
</table>
<br/>
<div id="btn_eval_abs">
	<form action="gestion_controle.php">
		<button class="btn_submit" type="submit">Annuler</button>
	</form>
	<form action="gestion_controle.php">
		<button class="btn_submit" type="submit">Enregister les modifications</button>
	</form>
</div>
<br/><br/><br/>
<br/><br/><br/>
<?php
require "../general/fin.html";
?>