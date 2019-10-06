<?php 
	
	define('TITLE', 'The Review: Home');
	
	include('templates/header.html');
	
?>


<link rel="stylesheet" href="styles.css" type="text/css">

<form action="handle_form.php">

<div class="contact">
	<h2>We would love to hear from you!</h2>
<br>
	<p>Your Name: <select name="title" required>
	<option value="Mr.">Mr.</option>
	<option value="Mrs.">Mrs.</option>
	<option value="Ms.">Ms.</option>
	</select> <input type="text" name="name" size="25" required></p>

	<p>Your Email Address: <input type="email" name="email" size="25" required></p>

	<p>How did you hear about The View?	</p>
	<p><input type="radio" name="response" value="friend" required> friend
	<input type="radio" name="response" value="facebook"> facebook
	<input type="radio" name="response" value="internet search"> internet search
	<input type="radio" name="response" value="internet search"> other</p>

	<p>What can we help you with? </p>
	<p><textarea name="comments" rows="3" cols="25" required></textarea></p>
	<input type="submit" name="submit" value="Send My Feedback">
	<input name="reset" type="reset" id="reset" title="Reset" value="Reset">
	
	

</form>
</div>
</div>         
<?php
	
	include('templates/footer.html');

?>