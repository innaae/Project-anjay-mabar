<?php
	session_start();
	session_destroy();
	echo '<script>alert("We hope to see you tomorrow!");window.location="login.php"</script>';
?>
