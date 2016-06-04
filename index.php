<?php include('header.php') ?>
<div class="container">
      <h2>Welcome to irlibrary, my real life library data!</h2>
  <div class="row">
     <div class="col-md-3">
        <h4>All My Publications</h4>
        <div class="list-group">
        <?php

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

          $query = "select p.id, p.pub_name, p.author, p.year_published, g.genre_name, pt.type_name
          from publication p, pub_type pt, genre g
          where pt.id = p.pub_type and g.id = p.pub_genre
          order by id asc
          ";
          $pubs = mysql_query($query);
            while($row = mysql_fetch_array($pubs)) {
              //Sanatize outputs from html/javascript injection
              $id = htmlspecialchars($row["id"]);
              $title = htmlspecialchars($row["pub_name"]);
              $author = htmlspecialchars($row["author"]);
              $yearpub = htmlspecialchars($row["year_published"]);
              $pub_type = htmlspecialchars($row["type_name"]);
              $genre_name = htmlspecialchars($row["genre_name"]);

          echo "<a class='list-group-item'>
              <h6 class='list-group-item-heading'><b>" .
              $title . ", </b><span> by " . $author . "</span></h6>" .
              "<p class='list-group-item-text'>year published: " . $yearpub .
              "</p><p class='list-group-item-text'>publication type: " . $pub_type . "</p>
              <p class='list-group-item-text'>genre: " . $genre_name . "</p></a>";
          }
      mysql_close($mysql_handle);
        ?>
      </div>
      </div>
      <div class="col-md-2">
        <h4>Awards</h4>
         <div class="list-group">
    <?php

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

          $query = "SELECT a.award_name, a.award_genre, g.genre_name 
            from award a, genre g
            where g.id = a.award_genre ORDER BY a.id asc";
		$awards = mysql_query($query);
		while($row = mysql_fetch_array($awards)){
              $award_name = htmlspecialchars($row["award_name"]);
              $award_genre = htmlspecialchars($row["genre_name"]);
              echo "<a class='list-group-item'>
              <h6 class='list-group-item-heading'><b>" .
              $award_name . "</b><br>" . $award_genre . "</h6></a>";

		}

    mysql_close($mysql_handle);
    ?>
        </div>
      </div>
      <div class="col-md-2">
        <h4>Genres</h4>
          <?php

            // Create connection
            $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
                or die("Error connecting to database server");

            mysql_select_db($dbname, $mysql_handle)
                or die("Error selecting database: $dbname");

            $query = "SELECT genre_name, id FROM genre ORDER BY id ASC";
            $genres = mysql_query($query);

            // output data of each row
            while($row = mysql_fetch_array($genres)) {

                //Sanatize outputs from html/javascript injection
                $id = htmlspecialchars($row["id"]);
                $name = htmlspecialchars($row["genre_name"]);

                echo "
                  <a class='list-group-item'>
                  <h6 class='list-group-item-heading'><b>" . $name . "</b></h6>
                  </a>
                  ";
            }

            mysql_close($mysql_handle);

            ?>
      </div>

      <div class="col-md-2">
        <h4>Pub Types</h4>
          <?php

            // Create connection
            $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
                or die("Error connecting to database server");

            mysql_select_db($dbname, $mysql_handle)
                or die("Error selecting database: $dbname");

            $query = "SELECT type_name, id FROM pub_type ORDER BY id ASC";
            $types = mysql_query($query);

            // output data of each row
            while($row = mysql_fetch_array($types)) {

                //Sanatize outputs from html/javascript injection
                $id = htmlspecialchars($row["id"]);
                $name = htmlspecialchars($row["type_name"]);

                echo "
                  <a class='list-group-item'>
                  <h6 class='list-group-item-heading'><b>" . $name . "</b></h6>
                  </a>
                  ";
            }

            mysql_close($mysql_handle);

            ?>
      </div>

      <div class="col-md-3">
        <h4>Awards In My Library</h4>
          <?php

            // Create connection
            $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
                or die("Error connecting to database server");

            mysql_select_db($dbname, $mysql_handle)
                or die("Error selecting database: $dbname");

            $query = "SELECT p.pub_name, a.award_name FROM award a
                      INNER JOIN pub_award pa ON pa.aid=a.id
                      INNER JOIN publication p ON p.id=pa.pid";
            $pubawards = mysql_query($query);

            // output data of each row
            while($row = mysql_fetch_array($pubawards)) {

                //Sanatize outputs from html/javascript injection
                $publication = htmlspecialchars($row["pub_name"]);
                $award = htmlspecialchars($row["award_name"]);

                echo "
                  <a class='list-group-item'>
                  <h6 class='list-group-item-heading'><b>" . $publication . " received the "
                  . $award  ." award.</b></h6>
                  </a>
                  ";
            }

            mysql_close($mysql_handle);

            ?>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>
