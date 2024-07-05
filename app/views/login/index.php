<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>You are not logged in</h1>
            </div>
        </div>
    </div>

	<section class="vh-50">
		<div class="container py-2 h-100" >
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div style="border-radius: 1rem; background-color: #6c757d;">
						<div class="card-body p-5 text-center">
							<?php if (isset($_SESSION['failedAuth']) && $_SESSION['failedAuth'] >= 3): ?>
									<div class="alert alert-danger" role="alert">
											<?php echo "Exceeded failed login attempts, please wait 60 seconds"; ?>
									</div>
							<?php endif ?>
							<?php if (isset($_SESSION['failedAuth']) && $_SESSION['failedAuth'] < 3): ?>
									<div class="alert alert-danger" role="alert">
											<?php echo "Incorrect username or password, please try again"; ?>
									</div>
							<?php endif ?>
							<h1 class="mb-4" style="color: white">Sign in</h1>
							<form action="/login/verify" method="post" >
							<fieldset>
							
								<div class="form-floating mb-3">
									<input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
									<label for="floatingInput">Username</label>
								</div>
								<div class="form-floating">
									<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
									<label for="floatingPassword">Password</label>
								</div>
								<div class="d-flex justify-content-between align-items-center mb-4">
									
								</div>
							<button type="submit" class="btn btn-primary btn-lg" >Login</button>
								<hr class="my-3">
								
								<p><a href="/create" class="text-white">Register Here</a></p>
							</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
    <?php require_once 'app/views/templates/footer.php' ?>
