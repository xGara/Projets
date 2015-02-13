<?php

if (isset($_SESSION['User'])) {
	include_once('./View/indexLog.php');
}
else {
	include_once('./View/index.php');
}

?>