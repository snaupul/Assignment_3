<!-- JOBS Web Design & Development Project
    -->
<!DOCTYPE html>
<html>
<head>
    <title>JobLister</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container">
      <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><?php echo SITE_TITLE; ?></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <?php 
            if(isset($_SESSION['u_id'])){
              echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li role="presentation"><a href="index.php">Home</a></li>
                  <li role="presentation"><a href="create.php">Create Listing</a></li>
              </ul>
              <form action="includes/logout.inc.php" method="POST">
                <button type="submit" name="logout-submit">Logout</button>
                </form>';
            } else {
                echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="index.php">Home</a></li>
                </ul>
                <button onclick="document.getElementById(\'id01\').style.display=\'block\'" style="width:auto;">Login</button>
                <button onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Sign Up</button>
                
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="includes/login.inc.php" method="post" >
    <div class="imgcontainer">
      <span onclick="document.getElementById(\'id01\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
      <img src="css/login_image.jpg"  width="75" height="250" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="mailuid" placeholder="Username/e-mail" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" name="pwd" placeholder="Pasword" required>
        
      <button id="login_form" type="submit" name="login-submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById(\'id01\').style.display=\'none\'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>



<div id="id02" class="modal">
  <span onclick="document.getElementById(\'id02\').style.display=\'none\'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="includes/login.inc.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="UserName"><b>UseName</b></label>
      <input type="text" placeholder="Enter UserName" name="UserName" required>
		
       <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="Email" required>
 
        
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <!--<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
-->
      <div class="clearfix">
        <button type="button" onclick="document.getElementById(\'id02\').style.display=\'none\'" class="cancelbtn">Cancel</button>
        <button type="submit" name="Sign-up" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById(\'id01\');
var modal_signup = document.getElementById(\'id02\');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
  if (event.target == modal_signup) {
    modal.style.display = "none";
  }
}
</script>

                <!--<form action="includes/login.inc.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/e-mail">
                <input type="password" name="pwd" placeholder="Pasword">
                <button type="submit" name="login-submit">Login</button>
                </form>-->';
              }
          ?>
        </ul>
        <div>
    </nav>
      <?php displayMessage(); ?>