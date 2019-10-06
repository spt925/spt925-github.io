
<link rel="stylesheet" href="homepage.css" type="text/css">
<?php // logout.php
/* This is the logout page. It destroys the cookie. */
// Destroy the cookie, but only if it already exists:
if (isset($_COOKIE['Samuel'])) {
	setcookie('Samuel', FALSE, time()-300);
}
// Define a page title and include the header:
define('TITLE', 'Logout');
include('templates/header.html');
// Print a message:
echo '<p>You are now logged out. <br><p><a href="home.php">Return to homepage</a><br></p></p>';
// Include the footer:
include('templates/footer.html'); 
?>