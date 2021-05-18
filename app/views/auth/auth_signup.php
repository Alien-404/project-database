<div class="main">
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <?php
                        Flasher::flash();
                    ?>
                    <form method="POST" class="register-form needs-validation" id="register-form" action="<?= Config::BASEURL; ?>auth/insertUser">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email" required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" required/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term is-invalid" checked disabled/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="<?= Config::BASEURL; ?>home/privacy_policy" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="<?=Config::BASEURL; ?>img/signup-image.jpg" alt="sing up image"></figure>
                    <a href="<?=Config::BASEURL; ?>auth/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>