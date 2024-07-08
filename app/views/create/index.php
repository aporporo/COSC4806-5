<?php require_once 'app/views/templates/headerPublic.php'?>
<main role="main" class="container-fluid">
    <div class="row">
        <div class="col-sm-5 px-0">
            <img src="https://images-assets.nasa.gov/image/a-sky-view-of-earth-from-suomi-npp_16611703184_o/a-sky-view-of-earth-from-suomi-npp_16611703184_o~medium.jpg" class="w-100 vh-100" style="object-fit: cover; object-position: center;">
        </div>
    <div class="col-sm-7 d-flex justify-content-center">
        
        <div>
            <div class="text-center">
                <br>
                    <h1>Register an account</h1>
                    <small>Password should be at least 8 characters long</small>
                    <br>
                    <small>Password should include an uppercase, lowercase, number, and special character</small>
            </div>
                
                
                
        
       
    
            <div class="justify-content-center align-items-center">
                
                <div class="container py-2 h-100">
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-lg-12 mt-5" >
                            <div style="border-radius: 1rem; background-color: #6c757d;">
                                <div class="card-body p-5 text-center">
                                    <?php if (isset($_SESSION['username_error'])): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo "Username already exists"; ?>
                                        </div>
        
                                    <?php elseif (isset($_SESSION['password_match_error'])): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo "Passwords do not match"; ?>
                                        </div>
                                    <?php elseif (isset($_SESSION['password_length_error'])): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo "Password is less than 8 characters"; ?>
                                        </div>
                                    <?php elseif (isset($_SESSION['password_special_error'])): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo "Password must include 1 number, 1 lowercase, 1 uppercase, and 1 special character"; ?>
                                        </div>
                                    <?php else: session_unset(); endif; ?>
                                    <h1 class="mb-4" style="color: white">Sign up</h1>
                                    <form action="/create/verify" method="post" >
                                    <fieldset>
                                      <div data-mdb-input-init class="form-outline mb-3">
        
                                        <input required type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                      </div>
                                      <div data-mdb-input-init class="form-outline mb-3">
                                        <input required type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                      </div>
                                        <div data-mdb-input-init class="form-outline mb-3">
                                            <input required type="password" class="form-control form-control-lg" name="password2" placeholder="Confirm Password">
                                        </div>
                                         
                                        <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                    </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'app/views/templates/footer.php' ?>

    