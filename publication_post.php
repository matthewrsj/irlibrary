<?php include('connectdb.php') ?>
<?php
	// prepare and bind

	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	$query = "INSERT INTO publication (pub_name, author, year_published, pub_type, pub_genre) VALUES
  ('" . $_POST['pub_name'] . "', '" . $_POST['author'] . "', " . $_POST['year_published'] . ", " . $_POST['type_id'] . ", " . $_POST['genre_id'] . ")";
  if ($conn->query($query) === FALSE) {
    echo "Error: " . $query . "<br>" . $conn->error;
  }

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if ($_POST['awards']) {
    for ($i = 0; $i < count($_POST['awards']); $i++) {
      $award_q = "INSERT INTO pub_award (pid, aid) VALUES (
        (SELECT id FROM publication WHERE pub_name='".$_POST['pub_name']."' LIMIT 1),
        (SELECT id FROM award WHERE award_name='".$_POST['awards'][$i]."' LIMIT 1))";
      if ($conn->query($award_q) === FALSE) {
        echo "Error: " . $award_q . "<br>" . $conn->error;
      }
    }
  }

  header('Location: http://web.engr.oregonstate.edu/~johnsma8/irlibrary');
  die();

?>
