<?php include('header.php') ?>
<div class="container">
  <div class="row">
        <?php

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

          $query = "select p.id, p.pub_name, p.author, p.year_published, g.genre_name, pt.type_name
          from publication p, pub_type pt, genre g
          where pt.id = p.pub_type and g.id = p.pub_genre and p.pub_name = '" . $_POST['pub_name'] .
          "' LIMIT 1";
          $pubscheck = mysql_query($query);
          $pubs = mysql_query($query);
          if (mysql_fetch_array($pubscheck) === FALSE) {
            echo "<h4 class='list-group-item-heading'>".$_POST['pub_name']." not found...</h4>";
          }
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
<?php include('footer.php') ?>
