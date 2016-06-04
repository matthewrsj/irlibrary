<?php include('header.php') ?>
<div class="container">
      <h2>Welcome to irlibrary, my real life library data!</h2>
  <div class="row">
     <div class="col-md-3">
        <h4>ALL MY PUBLICATIONS</h4>
        <div class="list-group">
        <?php

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

          $query = "select p.id, p.pub_name, p.author, p.year_published, pt.type_name
          from publication p, pub_type pt
		  where pt.id = p.pub_type
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

          echo "<a class='list-group-item'>
              <h6 class='list-group-item-heading'><b>" .
              $title . ", </b><span> by " . $author . "</span></h6>" .
              "<p class='list-group-item-text'>year published: " . $yearpub .
              "</p><p class='list-group-item-text'>publication type: " . $pub_type . "</p></a>
              ";
          }
      mysql_close($mysql_handle);
        ?>
      </div>
      </div>
      <div class="col-md-3">
        <h4>ALL AWARDS</h4>
         <div class="list-group">
    <?php

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

        $query = "SELECT award_name, id from award ORDER BY id asc";
		$awards = mysql_query($query);
		while($row = mysql_fetch_array($awards)){
              $award_name = htmlspecialchars($row["award_name"]);
              $id = htmlspecialchars($row["id"]);
              echo "<a class='list-group-item'>
              <h6 class='list-group-item-heading'><b>" .
              $award_name . "</b></h6></a>";

		}

     // $query = "SELECT articles.title, articles.url, articles.user_id, articles.category_id,
     //         articles.midichlorians, users.username, categories.name
     //         FROM articles, users, categories
     //         WHERE articles.user_id = users.id AND articles.category_id = categories.id
     //         GROUP BY articles.title
     //         ORDER BY articles.midichlorians DESC
     //         LIMIT 3
     //         ";
     //     $articles = mysql_query($query);
     //       while($row = mysql_fetch_array($articles)) {
     //         //Sanatize outputs from html/javascript injection
     //         $id = htmlspecialchars($row["id"]);
     //         $url = htmlspecialchars($row["url"]);
     //         $title = htmlspecialchars($row["title"]);
     //         $midichlorians = htmlspecialchars($row["midichlorians"]);
     //         $username = htmlspecialchars($row["username"]);
     //         $name = htmlspecialchars($row["name"]);
//
  //        echo "
  //      <a class='list-group-item' href='" . $url . "'>
  //            <h6 class='list-group-item-heading'><b>" .
  //            $title . " </b><span class='badge'>" . $midichlorians . "</span></h6>" .
  //            "<p class='list-group-item-text'>User: " . $username .
  //            "<br>Category: " . $name .
  //            "</p></a>
   //            ";
   //         }
      mysql_close($mysql_handle);
    ?>
        </div>
      </div>
      <div class="col-md-3">
        <h4>All Genres</h4>
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
    </div>
  </div>
</div>
<?php include('footer.php') ?>
