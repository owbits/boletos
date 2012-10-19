<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <!--************************************************Formulario*************************************************-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.inputfocus-0.9.min.js"></script>
    <script type="text/javascript" src="js/jquery.main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_form.css" media="all" />
    <!--************************************************DateTimePicker*********************************************-->
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/eye.js"></script>
    <script type="text/javascript" src="js/layout.js?ver=1.0.2"></script>
    <link rel="stylesheet" href="css/datepicker.css" type="text/css" />
    <!--***********************************************Ticket******************************************************-->
    <script type="text/javascript" src="js/javascript.js"></script>
	<script type="text/javascript" src="js/jquery.query-2.1.7.js"></script>
	<script type="text/javascript" src="js/rainbows.js"></script>
	<link type="text/css" rel="stylesheet" href="css/style.css" media="screen" />
	<!--*****************************************General meta information *****************************************-->
	<title>..::INICIO::..</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- ****************************************General meta information *****************************************-->

<script>
	$(document).ready(function(){
 
	$("#submit1").hover(
	function() {
	$(this).animate({"opacity": "0"}, "slow");
	},
	function() {
	$(this).animate({"opacity": "1"}, "slow");
	});
 	});
</script>

</head>
<body>
  <div id="page_container">
  <div id="toppanel">
    <div id="panel">
      <div id="panel_contents"></div>
		<h2>INICIO DE SESIÓN</h2>
		<div id="username_input">
			<div id="username_inputleft"></div>
			<div id="username_inputmiddle">
				<form>
					<input type="text" name="link" id="url" value="Usuario" onclick="this.value = ''">
					<img id="url_user" src="images/ticket/user.png" alt="">
				</form>
			</div>
			<div id="username_inputright"></div>
		</div>
		<div id="password_input">
			<div id="password_inputleft"></div>
			<div id="password_inputmiddle">
				<form>
					<input type="password" name="link" id="url" value="Contraseña" onclick="this.value = ''">
					<img id="url_password" src="images/ticket/pass.png" alt="">
				</form>
			</div>
			<div id="password_inputright"></div>
		</div>
		<div id="submit">
			<form>
				<input type="image" src="images/ticket/submit_hover.png" id="submit1" value="Sign In">
				<input type="image" src="images/ticket/submit.png" id="submit2" value="Sign In">
			</form>
		</div>
		<div id="links_left">
			<a href="#">¿Olvidaste tu contraseña?</a>
		</div>
		<div id="links_right"><a href="#">¿Aun no eres miembro?</a></div>
    </div>
    <div class="panel_button" style="display: block;"><a href="#">I N I C I A R &nbsp S E S I Ó N</a> </div>
    <div class="panel_button" id="hide_button" style="display: none;"><a href="#">Ocultar</a> </div>
  </div>
</div>

<div id="form_container">
	<div id="container">
        <form action="#" method="post">
	
            <!-- #first_step -->
            <div id="first_step">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <input type="text" name="username" id="username" value="username" />
                    <label for="username">At least 4 characters. Uppercase letters, lowercase letters and numbers only.</label>
                    
                    <input type="password" name="password" id="password" value="password" />
                    <label for="password">At least 4 characters. Use a mix of upper and lowercase for a strong password.</label>
                    
                    <input type="password" name="cpassword" id="cpassword" value="password" />
                    <label for="cpassword">If your passwords aren’t equal, you won’t be able to continue with signup.</label>
                    
                    <!-- -------------------------------datepicker---------------------------------------- -->
                    <p>
						<input class="inputDate" id="inputDate" value="<?php echo date("d/m/Y"); ?>" />
						<label id="closeOnSelect"><input type="checkbox" /> Close on selection</label>
					</p>
					<!-- -------------------------------datepicker---------------------------------------- -->
                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_first" id="submit_first" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #second_step -->
            <div id="second_step">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <input type="text" name="firstname" id="firstname" value="first name" />
                    <label for="firstname">Your First Name. </label>
                    <input type="text" name="lastname" id="lastname" value="last name" />
                    <label for="lastname">Your Last Name. </label>
                    <input type="text" name="email" id="email" value="email address" />
                    <label for="email">Your email address. We send important administration notices to this address. </label>                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_second" id="submit_second" value="" />
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->


            <!-- #third_step -->
            <div id="third_step">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <select id="age" name="age">
                        <option> 0 - 17</option>
                        <option>18 - 25</option>
                        <option>26 - 40</option>
                        <option>40+</option>
                    </select>
                    <label for="age">Your age range. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->

                    <select id="gender" name="gender">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <label for="gender">Your Gender. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                    
                    <select id="country" name="country">
                        <option>United States</option>
                        <option>United Kingdom</option>
                        <option>Canada</option>
                        <option>Serbia</option>
                        <option>Italy</option>
                    </select>
                    <label for="country">Your country. </label> <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                    
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="submit" type="submit" name="submit_third" id="submit_third" value="" />
                
            </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
            
            
            <!-- #fourth_step -->
            <div id="fourth_step">
                <h1>SIGN UP FOR A FREE <span>WEBEXP18</span> ACCOUNT</h1>

                <div class="form">
                    <h2>Summary</h2>
                    
                    <table>
                        <tr><td>Username</td><td></td></tr>
                        <tr><td>Password</td><td></td></tr>
                        <tr><td>Email</td><td></td></tr>
                        <tr><td>Name</td><td></td></tr>
                        <tr><td>Age</td><td></td></tr>
                        <tr><td>Gender</td><td></td></tr>
                        <tr><td>Country</td><td></td></tr>
                    </table>
                </div>      <!-- clearfix --><div class="clear"></div><!-- /clearfix -->
                <input class="send submit" type="submit" name="submit_fourth" id="submit_fourth" value="" />            
            </div>
            
        </form>
	</div>
	<div id="progress_bar">
        <div id="progress"></div>
        <div id="progress_text">0% Complete</div>
	</div>
</div>
</body>
</html>
