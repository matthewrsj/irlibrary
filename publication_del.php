<?php include('connectdb.php') ?>
<?php
	// prepare and bind
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	$query = "DELETE FROM publication WHERE pub_name='" . $_POST['pub_name'] . "'";
	if ($conn->query($query) === TRUE) {
	header('Location: http://web.engr.oregonstate.edu/~johnsma8/irlibrary');
	die();
	} else {
	echo "Error: " . $query . "<br>" . $conn->error;
	}

?>
