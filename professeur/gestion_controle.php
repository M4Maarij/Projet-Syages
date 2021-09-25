<?php
require "../general/debut.html";
require "../general/menu.html";
?>
<h2><br/>PROMOTION : DEAU A</h2><br/>
<h3>Matière : Mathématiques</h2><br/>
<h2>Semestre 1</h2><br/>
<div id="btn_eval_abs">
	<form action="EnseignantEval.php">
		<button class="btn_submit" type="submit">Creer une évaluation</button>
	</form>
	<form action="appel_absence.php">
		<button class="btn_submit" type="submit">Faire l'appel</button>
	</form>
</div>
<!-- <input name="submit" type="submit" class="submit" value="Creer une évaluation" /> -->
<!-- <input name="submit" type="submit" id="submit" class="submit" value="Faire l'appel" /> -->
<br/><br/><br/>

<div class="tababs">
	<div class="tab">
<table id="tab_eval">
	<tr><th>Numéro </th><th>Prénom </th><th>Nom</th><th class="bt_eval bt_controle"><a href="saisienote.php">Controle 1</a></th><th class="bt_eval bt_controle"><a href="saisienote.php">Controle 2</a></th><th class="bt_eval bt_exam"><a href="saisienote.php">Exam 1</a></th><th>Moyenne</th></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>1</td><td>Daphnée</td><td>Christelle</td><td>15</td><td>18</td><td>14</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>2</td><td>Romane</td><td>Anastasia</td><td>16</td><td>13</td><td>20</td><td>15</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>3</td><td>Gabin</td><td>Arthur</td><td>03</td><td>10</td><td>07.5</td><td>8.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>4</td><td>Flore</td><td>Brayan</td><td>08</td><td>05</td><td>10</td><td>9.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>5</td><td>Rony</td><td>Fanta</td><td>17</td><td>16</td><td>15</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>6</td><td>Sacha</td><td>Elora</td><td>15.5</td><td>abs</td><td>13</td><td>14.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>7</td><td>Dimitri</td><td>Eleanor</td><td>12</td><td>15</td><td>18</td><td>14.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>8</td><td>Charline</td><td>Angelo</td><td>15</td><td>18</td><td>14</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>9</td><td>Ayline</td><td>Abraham</td><td>abs</td><td>13</td><td>20</td><td>15</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>10</td><td>Astrid</td><td>Arthur</td><td>03</td><td>10</td><td>07.5</td><td>8.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>11</td><td>Zacharie</td><td>Yani</td><td>08</td><td>05</td><td>10</td><td>9.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>12</td><td>Ryad</td><td>Aglaé</td><td>17</td><td>16</td><td>15</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>13</td><td>Ruth</td><td>Elora</td><td>15.5</td><td>14</td><td>13</td><td>14.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>14</td><td>Anselme</td><td>Yvan</td><td>12</td><td>abs</td><td>18</td><td>14.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>15</td><td>Christine</td><td>Fanta</td><td>17</td><td>16</td><td>15</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>16</td><td>Artur</td><td>Elora</td><td>15.5</td><td>14</td><td>13</td><td>14.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>17</td><td>Timothée</td><td>Eleanor</td><td>12</td><td>15</td><td>18</td><td>14.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>18</td><td>Charline</td><td>Angelo</td><td>15</td><td>18</td><td>14</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>19</td><td>Ayline</td><td>Abraham</td><td>16</td><td>abs</td><td>20</td><td>15</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>20</td><td>Sébastien</td><td>Arthur</td><td>abs</td><td>10</td><td>07.5</td><td>8.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>21</td><td>Tara</td><td>Yani</td><td>08</td><td>05</td><td>abs</td><td>9.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>22</td><td>Ambre</td><td>Aglaé</td><td>17</td><td>16</td><td>15</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>23</td><td>Yaya</td><td>Romane</td><td>15.5</td><td>14</td><td>13</td><td>14.3</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>24</td><td>Solène</td><td>Yvan</td><td>12</td><td>15</td><td>18</td><td>14.5</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>25</td><td>Sérine</td><td>Fanta</td><td>17</td><td>16</td><td>15</td><td>16</td></tr>
	<tr data-href='file:///C:/Users/abdou/OneDrive/Bureau/SYAGES/syagestheme/syagestheme/notes.html'><td>26</td><td>Sirine</td><td>Elora</td><td>15.5</td><td>14</td><td>13</td><td>14.3</td></tr>
	<tr ><td colspan="3" class="moy_bas">Moyenne</td><td class="moy_eval_bas">12.5</td><td class="moy_eval_bas">15.5</td class="moy_eval_bas"><td class="moy_eval_bas">13</td><td class="moy_gen"><strong>14.3</strong></td></tr>
</table>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded",() => {
	const rows = document.querySelectorAll("tr[data-href]");
	rows.forEach(row => {
		row.addEventListener("click",() => {
			window.location.href = row.dataset.href;
		});
	});
	//console.load(rows);
	
	});
</script>

<br/><br/><br/>
<?php
require "../general/fin.html";
?>