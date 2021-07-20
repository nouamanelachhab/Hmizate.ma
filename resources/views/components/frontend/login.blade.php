<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
<section id="page-title-section" class="d-flex align-items-center">
<form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center; color:white;">Login with Social Media or Manually</h2>
     
      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>

    </div>
    <br>
      
<div>
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
  </form>


</section>
 