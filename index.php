<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Achieving Goals to Change Behaviors - CSE556 HCI, Fall 2012</title>
	<?php require_once('./assets/php/includes.php'); ?>
</head>
<body>
	<div data-role="page">
		<header data-role="header" data-position="fixed">
			<h1>
				HCI556 - FL2012
			</h1>
		</header>
<style>body{ background:url(time2.gif) repeat-x center top;}</style>
		<section data-role="content">
				<input type="text" placeholder="Username" id="username"></input>
				<input type="password" placeholder="Password" id="password"></input>
				<input type="button" id="login" value="Log In"></input>
				<!--p>Enter a username. If the username does not exist, a new user will be created.</p-->
		</section>
		<footer data-role="footer" data-position="fixed">
			<h1>
				&nbsp;		
			</h1>
		</footer>
	</div>
</body>
<script>

	function submit() {
		window.location.replace('home.php?username='+$('#username').val());
	}
	$('#login').on('click', submit);
	$('#username').on('keypress', function(event) {
        if (event.keyCode == 13) { submit(); }
    });
    $('#password').on('keypress', function(event) {
        if (event.keyCode == 13) { submit(); }
    });
    
</script>
</html>
