<?php // Script 13.1 - mysqli_connect.php
/* This script connects to the database
and establishes the character set for communications. */
// Connect:
$dbc = mysqli_connect('localhost', 'root', 'baker', 'thereview'); 

/*('localhost', 'mwrighth_root', 'C@@LDAYN', 'mwrighth_thereview'); */

//Set the character set:
mysqli_set_charset($dbc, 'utf8');

