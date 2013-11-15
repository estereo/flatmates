<?php include("header.php") ?>

<div class="site container">
	<div class="header">
		<h1 class="title"><a href="/">{{ site.name }}</a></h1>
	</div>
	<div id="home" class="container">
		<div class="row sign-in">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h2 class="text-center login-title">Sign in with your Gmail account</h2>
				<div class="account-wall">
					<img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
					alt="">
					<form class="form-signin">
						<input type="text" class="form-control" placeholder="Email" required autofocus>
						<input type="password" class="form-control" placeholder="Password" required>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						<label class="checkbox pull-left">
							<input type="checkbox" value="Remember me" id="checkbox1" data-toggle="checkbox"> Remember me
						</label>
						<a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
					</form>
				</div>
				<p><a href="#" class="text-center new-account">Create an account </a> <a href="/dashboard.php" class="text-center guest-account">Enter as a guest</a></p>
			</div>
		</div>
	</div> <!-- home -->
</div><!-- site -->

<?php include("footer.php") ?>