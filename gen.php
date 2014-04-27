<!DOCTYPE html>
<html>
<head>
	<title>hackcentral</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">

	<!-- CSS -->
	<link rel="stylesheet" href="stylesheets/normalize.min.css">
	<link rel="stylesheet" href="stylesheets/style.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

	<link rel="icon" href="images/favicon.ico">

	<!-- Javascript -->
	<!-- ********** -->

	<!-- MY TEST -->
	<!-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

	<script src="js/countdown.js"></script>  


</head>
<body>
	<section id="header" class="header">
		<h1>


<!-- CUSTOM NAME -->
<?php
if(isset($_POST['submit'])) {
	echo $_POST['school'];
}
?>


	</h1>
	<img class="bearcat" src="<?php echo $_POST['logo']; ?>">
	<hr>
	</section>

	<section id="timer" class="timer">
		<h3 id="countdown-holder" class="countdown-text"></h3>
		<h4 class="timer-title">REMAINING</h2>
	</section>

	<section id="schedule" class="schedule">
		<hr class="top">
		<h2 class="schedule-title">Schedule</h2>

		<table class="schedule-table">
			<thead>
				<tr class="schedule-table-date">
					<td colspan="3">Friday, April 25, 2014</td>
				</tr>					
			</thead>
			<tbody>
				<tr>
					<td>5:00 - 6:00 p.m.</td>
					<td>Check-in</td>
					<td>Lecture Hall 2</td>
				</tr>
				<tr>
					<td>6:00 - 7:00 p.m.</td>
					<td>Opening kickoff</td>
					<td>Lecture Hall 2</td>
				</tr>
				<tr>
					<td>7:00 - 7:45 p.m.</td>
					<td>Dinner</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>8:00 p.m.</td>
					<td>Hacking begins</td>
					<td>Academic A</td>
				</tr>
			</tbody>
			<thead>
				<tr class="schedule-table-date">
					<td colspan="3">Saturday, April 26, 2014</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1:00 a.m.</td>
					<td>Late-night snack</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>9:00 a.m.</td>
					<td>Breakfast</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>1:00 p.m.</td>
					<td>Lunch</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>6:00 p.m.</td>
					<td>Dinner</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>8:00 p.m.</td>
					<td>Hacking Ends</td>
					<td>Academic A</td>
				</tr>
				<tr>
					<td>9:00 - 9:45 p.m.</td>
					<td>Presentations and closing ceremony</td>
					<td>Lecture Hall 2</td>
				</tr>					
			</tbody>			
		</table>
	</section>

	<div class="contacts">
	</div>
	

<!-- CRAZY ASS SHIT FOR TWITTER KEY SUBMISSION watch out -->
	<section id="twitter" class="twitter">
		<h2 class="title">Updates</h2>
		<script>
			if(navigator.userAgent.match(/iPhone|Android/i)){
				var urlbegin = "<a class=\"twitter-timeline\"data-dnt=\"true\" href=\"https://twitter.com/";
				var handle = "<?php echo $_POST['handle']; ?>";
				var urlmid = "\" data-widget-id=\"";
				var key = "<?php echo $_POST['key']; ?>";
				var urlend = "\" data-tweet-limit=\"3\">Updates from @HackBinghamton</a>";

				document.write(urlbegin.concat(handle,urlmid,key,urlend));
			}
			else {
				var urlbegin = "<a class=\"twitter-timeline\"data-dnt=\"true\" href=\"https://twitter.com/";
				var handle = "<?php echo $_POST['handle']; ?>";
				var urlmid = "\" data-widget-id=\"";
				var key = "<?php echo $_POST['key']; ?>";
				var urlend = "\" data-theme=\"light\">Updates from @HackBinghamton</a>";

				document.write(urlbegin.concat(handle,urlmid,key,urlend));

			}
		</script>
	</section>

	<section id="spotify" class="spotify">
		<h2 class="title">Check out our Playlist</h2>
		<iframe src="https://embed.spotify.com/?uri=<?php echo $_POST['spotify'] ?>" height="600" frameborder="0" allowtransparency="true" class="spotify"></iframe>
	</section>

<!-- DATE AND TIME INJECTIONS -->

	<!-- Scripts at end -->
	<script>  
		var month = "<?php echo $_POST["month"] ?>";
		var day = "<?php echo $_POST["day"] ?>";
		var year = "<?php echo $_POST["year"] ?>";
		var time = "<?php echo $_POST["time"] ?>";

var clock = document.getElementById("countdown-holder");
		var targetDate = new Date(year, month, day);
		targetDate = targetDate.setHours(time);

		clock.innerHTML = countdown(targetDate).toString();  
		setInterval(function(){  
			clock.innerHTML = countdown(targetDate).toString();  
		}, 1000); 
	</script>
</body>
</html>
