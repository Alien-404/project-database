<div class="main">
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title" style="font-size: 2rem;">Reset Password</h2>
                    <?php
                        Flasher::flash();
                    ?>
                    <form method="POST" class="register-form needs-validation" id="register-form" action="<?= Config::BASEURL; ?>auth/resetPass">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="current_pass" placeholder="Current password" required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="new_pass" id="pass" placeholder="New password" required/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Confirm password" required/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Change Password"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?=Config::BASEURL; ?>img/reset.jpg" alt="sing up image"></figure>
                    <a href="<?=Config::BASEURL; ?>auth/login" class="signup-image-link">Back to login</a>
                </div>
            </div>
        </div>
    </section>
</div>