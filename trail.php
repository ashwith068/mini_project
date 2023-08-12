<?php
session_start();
include 'inc/header.php';
?>
<script src="js/rating.js"></script>
<link rel="stylesheet" href="css/style.css">
<?php include 'inc/container.php'; ?>
<div class="container">
	<?php
	include 'class/Rating.php';
	?>
	<button type="button" id="rateProduct1" class="btn btn-info <?php if(!empty($_SESSION['userid']) && $_SESSION['userid']) { echo 'login'; } ?>">Rates this </button>
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
</div>	
<?php include 'inc/footer.php'; ?>


