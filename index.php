<html>
<head>
	<style type="text/css">
		.puzzle {
			width: 300px;
			height: 300px;
		}
		.piece {
			float: left;
			display:inline-block;
			width: 72px;
			margin: 0 4px 4px 0;
			height: 72px;
			background-image: url('puzzle.jpeg');
		}

		.piece:nth-child(4n) {
			margin-right: 0;
		}

		.p7 { background-position: 0 0; background-color: #502713; }
		.p3 { background-position: -72px 0; background-color: #E19C43;}
		.p1 { background-position: -144px 0; background-color: #E19C43}
		.p10 { background-position: -216px 0; background-color: #821D13}

		.p2 { background-position: 0 -72px; background-color:#502713; }
		.p16 { background-position: -72px  -72px; background-color:#821D13; }
		.p4 { background-position: -144px  -72px; background-color: #E19C43}
		.p15 { background-position: -216px  -72px; background-color: #821D13}

		.p9 { background-position: 0 -144px; background-color: #E19C43}
		.p14 { background-position: -72px  -144px; background-color: #821D13}
		.p12 { background-position: -144px  -144px; background-color:#502713 }
		.p11 { background-position: -216px  -144px; background-color:#502713 }

		.p13 { background-position: 0 -216px; background-color: #821D13}
		.p5 { background-position: -72px  -216px; background-color: #E19C43}
		.p8 { background-position: -144px  -216px; background-color: #502713; }
		.p6 { background-position: -216px  -216px; background-color: #E19C43}


	</style>


	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

	<script>
	  $(function() {
	    $( "#sortable" ).sortable({
		items: '.piece'
		});

	    $( "#sortable" ).disableSelection();
	  });
	  </script>

</head>
<body>

	<div id="sortable" class="puzzle">
		<?php
		define('PIECES', 16);

		for($i=1; $i<=PIECES; $i++) {
			?>
			<div class="piece p<?php echo $i; ?>"></div>
			<?php
		}
		?>
	</div>

</body>
</html>
