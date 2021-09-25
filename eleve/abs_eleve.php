<?php
require "../general/debut.html";
require "../general/menu.html";
?>
    <div class="container">
        <h1>Mes Absences</h1>
          <div class="contgen">
            <div class="titre"><h2>Absences constatées</h2></div>
            <div class="choixtrim">
              <select name="choix" id="choixtrimestre">
                <option>-- Choisir un trimestre --</option>
                <option>Trimestre 1</option>
                <option>Trimestre 2</option>
                <option>Trimestre 3</option>
              </select>
          </div>
        </div>

			<br/>

		<div class="tababs">
	
			<table id="tab_abs">
				<tr><th>N° Absence </th><th>Date </th><th>Heure(s)</th><th >Etat</th><th>Motif </th></tr>
				<tr>
            <td>1</td>
            <td>13/10/2020</td>
            <td>8h30-9h30</td>
            <td class="coule1">Justifée</td>
            <td>Certificat</td>
        </tr>
        <tr>
            <td>2</td>
            <td>20/10/2020</td>
            <td>15h30-17h30</td>
            <td class="coule2">Injustifiée</td>
            <td></td>
        </tr>
       
			</table>

							<br/><br/><br/>
							<br/><br/><br/>
                            <br/><br/><br/>
                            <br/><br/><br/>
                            <br/><br/><br/>
                            <br/><br/><br/>
                            <br/><br/><br/>



				</div>
			

		</div>
<?php
require "../general/fin.html";
?>