<?php include('connectdb.php') ?>
<?php
	// prepare and bind
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	$query = "INSERT INTO publication (pub_name, author, year_published, pub_type) VALUES
	('" . $_POST['pub_name'] . "', '" . $_POST['author'] . "', " . $_POST['year_published'] . ", " . $_POST['type_id'] . ")";
	if ($conn->query($query) === TRUE) {
	header('Location: http://web.engr.oregonstate.edu/~johnsma8/irlibrary');
	die();
	} else {
	echo "Error: " . $query . "<br>" . $conn->error;
	}

?>
