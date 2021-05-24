<?php $pagetitle = 'Welcome'; ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'head/header.php';?>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>SmartSocial</h1>
						<p>
							SmartSocial is free to use, protecting your personal data in the net free of charge.
						</p>
						<div class="friend-logo">
							<span><img src="images/1x.png" alt=""></span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
						<h2 class="log-title">Login</h2>
							<p>
								Don’t use SmartSocial Yet? <a href="#" title="">Join now</a>
							</p>
						<form action="auth.php" method="post">
							<div class="form-group">
							  <input type="text" name="email" placeholder="E-mail" required/>
							  <label class="control-label" for="input"></label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" name="pwd" placeholder="Password" required/>
							  <label class="control-label" for="input"></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Remember Me</label>
							</div>
							<a href="#" title="" class="forgot-pwd">Forgot Password?</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit" name="login_button"><span>Login</span></button>
								<button class="mtr-btn signup" type="submit"><span>Register</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Register</h2>
							<p>
								Don’t use SmartSocial Yet? <a href="#" title="">Join now</a>
							</p>
						<form action="register.php" method="post">
							<div class="form-group">
							  <input type="text" name="first_name" placeholder="First Name" required/>
							  <label class="control-label" for="input"></label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="text" name="last_name" placeholder="Last Name" required/>
							  <label class="control-label" for="input"></label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">
							  <input type="password" name="pwd" placeholder="Password" required/>
							  <label class="control-label" for="input"></label><i class="mtrl-select"></i>
							</div>
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="radio" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="radio"/><i class="check-box"></i>Female
								</label>
							  </div>
							</div>
							<div class="form-group">
							  <input type="text" name="email" placeholder="E-mail" required/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c"></a></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions?
							  </label>
							</div>
							<a href="#" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signup" type="submit" name="register_button"><span>Register</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>
