<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Login</title>
</head>
<body>
	<!-- Put Your Login Code -->



<!-- 
+-----------------------------------------------+
|	User ID or Email ID name will be --- email	|
|	Password ID will be --- password			|
|	Submit Button ID will be --- admin_login	|
+-----------------------------------------------+
 -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('body').append('<div id="admin_login_notification" style="width: 100%; margin: -60px 0 0 -8px;  height: 50px; background-color: whitesmoke; line-height: 50px; text-align: center; font-weight: bold; position: absolute; transition: 0.3s;"></div>');

		$('#admin_login').on('click', function(){
			var email = $('#email').val();
			var password = $('#password').val();
			var admin_login = $('#admin_login').val();

			$.ajax({
				url: 'login.php',
				type: 'POST',
				data: {email, password, admin_login},
			})
			.done(function(data) {
				$('#admin_login_notification').css({ top:'-10px' });
				$('#admin_login_notification').html(data);
				setTimeout(function(){ $('#admin_login_notification').css({ top:'-60px' }); }, 3000);
			});
			return false;
		});
	});
</script>
</body>
</html>