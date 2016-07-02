<html>
	<head>
		<style type="text/css">
			body {
				background-color: #3c4549;
			}
			p, a {
				font-family: sans-serif;
				color: #ffffff;
				font-size: 2rem;
				margin: auto;
				text-align: center;
				vertical-align: middle;
			}
			#time-since {
				font-size: 3rem;
			}

			#quit-smoking-container {
				position: relative;
				top: 40%;
			}
		</style>
		<title>Jeff's smoke-free timer</title>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/countdown/2.6.0/countdown.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var smoking_stopped = 1467437289000;
			var time_since = setInterval( function() {
				var countdown_timer = countdown( smoking_stopped, null).toString();
				document.getElementById("time-since").innerHTML = countdown_timer;
				var twitter_message = 'Congrats, @TheJeffMatson! You\'ve been smoke-free for ' + countdown_timer + '! Keep it up!';
				var twitter_href = 'https://twitter.com/intent/tweet?text=' + encodeURIComponent(twitter_message);
				document.getElementById("tweetjeff").setAttribute("href", twitter_href);
				document.title = 'Jeff has been smoke-free for ' + countdown_timer;
			}, 1000);
		</script>
	</head>
	<body>
		<div id="quit-smoking-container">
			<p>Jeff has been smoke-free for: <br><span id="time-since">Loading...</span></p>
			<p>He might need some encouragement.<br /> <a id="tweetjeff" class="twitter-share-button" href="https://twitter.com/intent/tweet" target="_blank">Send him a tweet?</a></p>
		</div>
	</body>
</html>
