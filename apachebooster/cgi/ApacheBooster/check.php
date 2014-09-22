<?php
/* Only available to Root */
function isroot () {
	$user = $_ENV['REMOTE_USER'];

	if ($user == "root") {
		return 1;
	}
	else {
		return 0;
	}

}

if (!isroot()) {
	echo "This section is available to root only";
	exit(1);
}

?>
