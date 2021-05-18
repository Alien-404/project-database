
<div class="main">
  <section class="sign-in">
      <div class="container">
          <div class="signin-content">
              <div class="signin-image">
                  <figure><img src="<?= Config::BASEURL; ?>img/login.jpg" alt="sing up image"></figure>
                  <a href="<?=Config::BASEURL; ?>auth/signup" class="signup-image-link">Create an account</a>
                  <a href="<?=Config::BASEURL; ?>auth/reset" class="signup-image-link">Reset Password</a>
              </div>

              <div class="signin-form">
                  <h2 class="form-title">Login</h2>
                  <?php
                    Flasher::flash();
                  ?>
                  <form method="POST" class="register-form" id="login-form">
                      <div class="form-group">
                          <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                          <input type="email" name="email" id="your_name" placeholder="Email" required/>
                      </div>
                      <div class="form-group">
                          <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                          <input type="password" name="password" id="your_pass" placeholder="Password" required/>
                      </div>
                      <div class="form-group">
                          <input type="checkbox" name="rememberme" id="remember-me" class="agree-term" />
                          <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                      </div>
                      <div class="form-group form-button">
                          <input type="submit" name="login" id="signin" class="form-submit" value="Log in"/>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </section>
</div>