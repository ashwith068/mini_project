
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css">
<div class="modal fade" id="loginModal" tabshow_rating="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="loginmodal-container">
			<h1>Login to rate this product</h1><br>
			<div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
			<form method="post" id="loginForm" name="loginForm">
				<input type="text" name="user" placeholder="Username" required>
				<input type="password" name="pass" placeholder="Password" required>
				<input type="hidden" name="action" value="userLogin">
				<input type="submit" name="login" class="login loginmodal-submit" value="Login">
			</form>
			<a href="http://localhost:8080/mini/docreg.html" style="color: black;">Don't have an account? Register</a>
		</div>
	</div>
</div>
<div>
	<?php include 'inc/footer.php'; ?>
</div>
