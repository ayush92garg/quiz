<?php
	include "../header.php";
	include "../modules/quiz.module";
	
	$questions = getData(QUESTIONS);
	$responses = getData(RESPONSES);

	$plist = getList($questions,$responses, PLAYERS);
	$qlist = getList($questions,$responses, QUESTIONS);
	
	$pscore = array_column($plist, PERCENT_CORRECT);
	$pname = array_column($plist, PLAYER_ID);

	$qscore = array_column($qlist, PERCENT_CORRECT);
	$qname = array_column($qlist, QUESTION_TEXT);
?>
<article class="tabs">
	<section id="graph1">
		<h2><a href="#graph1">Chart 1</a></h2>
		<div class="graphs">
			<canvas id="canvas"> </canvas>
		</div>
	</section>
	
	<section id="graph2">
		<h2><a href="#graph2">Chart 2</a></h2>
		<div class="graphs">
			<canvas id="canvas1"> </canvas>
		</div>
	</section>

</article>
<script src="../js/Chart.js-master/Chart.js"></script>
<script type="text/javascript">
	pscore = <?php echo json_encode($pscore);?> ;
	qscore = <?php echo json_encode($qscore,true);?> ;
	pname = <?php echo json_encode($pname);?> ;
	qname = <?php echo json_encode($qname,true);?> ;
	
	var pdata = {
	    labels: pname,
	    datasets: [
	        {
	            label: "My First dataset",
	            fillColor: "rgba(220,220,220,0.5)",
	            strokeColor: "rgba(220,220,220,0.8)",
	            highlightFill: "rgba(220,220,220,0.75)",
	            highlightStroke: "rgba(220,220,220,1)",
	            data: pscore
	        }
	    ]
	};

	var qdata = {
	    labels: qname,
	    datasets: [
	        {
	            label: "My First dataset",
	            fillColor: "rgba(220,220,220,0.5)",
	            strokeColor: "rgba(220,220,220,0.8)",
	            highlightFill: "rgba(220,220,220,0.75)",
	            highlightStroke: "rgba(220,220,220,1)",
	            data: qscore
	        }
	    ]
	};

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		var ctx1 = document.getElementById("canvas1").getContext("2d");
		window.myBar = new Chart(ctx).Bar(pdata, {
			responsive : true
		});
		window.myBar = new Chart(ctx1).Bar(qdata, {
			responsive : true
		});
	}
</script>
<?php 
	include "../includes/footer.php";
?>