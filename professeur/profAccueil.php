<?php
require "../general/debut.html";
require "../general/menu.html";
?>
<!-------------------------------------------CODE PAGE ACCUEIL PROF----------------------------------------------------------------->
 <!---------------------------Circle----------------------------------->
  <div>  
    <h2 class="heading"> PROMO ACTIVE </h2>
    <div class="wrapper2">
      
      <div class="card">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">MATHS</div>
      </div>


     <div class="card 2">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">PHYSIQUE</div>
      </div>


      <div class="card 3">
        <div class="circle">
          <div class="bar"></div>
          <div class="box"><span></span></div>
        </div>
        <div class="text">MOYENNE GENERALE</div>
      </div>


    </div>
  </div>
    <script>
      let options = {
        startAngle: -1.55,
        size: 150,
        value: 0.75,

        fill: {gradient: [ '#673dda', '#42b0fa']}
      }
      $(".circle .bar").circleProgress(options).on('circle-animation-progress',
      function(event, progress, stepValue){
        $(this).parent().find("span").text(String(stepValue.toFixed(2).substr(2)) + "%");
      });
      $(".2 .bar").circleProgress({
        value: 0.65
      });
      (".3 .bar").circleProgress({
        value: 0.70
      });

</script>

   <!-----------------MES INFOS------------------->
	<div>
		<h2>MES INFOS</h2>
		<table class="styled-table">
		<thead>
			<tr class="active_row">
				<th>ID</th>
				<th>Matière(s) enseignée(s)</th>
				<th>Date De Naissance</th>
				<th>E-mail</th>
				<th>Num Portable</th>
			</tr>
		</thead>
		<tbody>
			<tr class="row">
				<td>11909708</td>
				<td>Mathématiques & Physique</td>
				<td>10/01/1947</td>
				<td>realgangsta@shutup.com</td>
				<td>012344321</td>
			</tr>
		</tbody>
	</table>
		<h2>PROMOTION ACTIVE</h2>
	</div>

		<!-------------------------------TAB PROMO ACTIVE------------------------------------>
		<div class="tabpromo">
			<table>
			<tr><th>Année</th><th>Nombre d'élèves</th><th>DAEU : </th><th>Nombre d'heure de cours</th></tr>
				<tr><td><a href="#">2020-2021</a></td><td>30</td><td>DAEU A</td><td>13H</td></tr>
				<tr><td><a href="#">2020-2021</a></td><td>23</td><td>DAEU B</td><td>16H</td></tr>

			</table>
		</div>
		<!------------------------------------------------------------------------------------>
	   
		<!--------------------------------TAP ANCIENNE PROMO---------------------------------->
		<h2>ANCIENNE PROMO </h2>
		<div class="tabpromo">
			<div class="scroll">
			<table class="tabB">
			<tr><th>Année</th><th>Nombre d'élèves</th><th>DAEU : </th></tr>
				<tr><td><a href="#">2019-2020</a></td><td>32</td><td>DAEU A</td></tr>
				<tr><td><a href="#">2019-2020</a></td><td>27</td><td>DAEU B</td></tr>
				<tr><td><a href="#">2018-2019</a></td><td>26</td><td>DAEU A</td></tr>
				<tr><td><a href="#">2018-2019</a></td><td>24</td><td>DAEU B</td></tr>
				<tr><td><a href="#">2017-2018</a></td><td>30</td><td>DAEU A</td></tr>
				<tr><td><a href="#">2017-2018</a></td><td>30</td><td>DAEU B</td></tr>
				<tr><td><a href="#">2016-2017</a></td><td>28</td><td>DAEU A</td></tr>
				<tr><td><a href="#">2016-2017</a></td><td>23</td><td>DAEU B</td></tr>
			</table>
			</div>
		</div>
		<!------------------------------------------------------------------------------------>
<?php
require "../general/fin.html";
?>
    <!-------------------------------------------CODE PAGE ACCUEIL PROF------------------------------------------------------>    