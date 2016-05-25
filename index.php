<?php include('header.php') ?>
<div class="container">
      <h5>Welcome to irlibrary, my real life library data!</h5>
  <div class="row">
    <div class="col-md-6">
      <h2>Home</h2>
    </div>
    <div class="col-md-3">

    </div>
  </div>
  <div class="row">
     <div class="col-md-3">
        <label for="">Latest Articles</label>
        <div class="list-group">
        <?php
          $dbhost = 'oniddb.cws.oregonstate.edu';
          $dbname = 'malickc-db';
          $dbuser = 'malickc-db';
          $dbpass = 'Jz8QJFUt65lTYY16';

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

          $query = "SELECT articles.title, articles.url, articles.user_id, articles.category_id,
              articles.midichlorians, users.username, categories.name, articles.time_submitted
              FROM articles, users, categories
              WHERE articles.user_id = users.id AND articles.category_id = categories.id
              ORDER BY articles.time_submitted DESC
              LIMIT 3";
          $articles = mysql_query($query);
            while($row = mysql_fetch_array($articles)) {
              //Sanatize outputs from html/javascript injection
              $id = htmlspecialchars($row["id"]);
              $url = htmlspecialchars($row["url"]);
              $title = htmlspecialchars($row["title"]);
              $midichlorians = htmlspecialchars($row["midichlorians"]);
              $username = htmlspecialchars($row["username"]);
              $name = htmlspecialchars($row["name"]);

          echo "
            <a class='list-group-item' href='" . $url . "'>
              <h6 class='list-group-item-heading'><b>" .
              $title . " </b><span class='badge'>" . $midichlorians . "</span></h6>" .
              "<p class='list-group-item-text'>User: " . $username .
              "<br>Category: " . $name .
              "</p></a>
              ";
          }
      mysql_close($mysql_handle);
        ?>
      </div>
      </div>
      <div class="col-md-3">
        <label for="">Most Influencial Articles</label>
         <div class="list-group">
    <?php
      $dbhost = 'oniddb.cws.oregonstate.edu';
          $dbname = 'malickc-db';
          $dbuser = 'malickc-db';
          $dbpass = 'Jz8QJFUt65lTYY16';

          $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
              or die("Error connecting to database server");

          mysql_select_db($dbname, $mysql_handle)
              or die("Error selecting database: $dbname");

      $query = "SELECT articles.title, articles.url, articles.user_id, articles.category_id,
              articles.midichlorians, users.username, categories.name
              FROM articles, users, categories
              WHERE articles.user_id = users.id AND articles.category_id = categories.id
              GROUP BY articles.title
              ORDER BY articles.midichlorians DESC
              LIMIT 3
              ";
          $articles = mysql_query($query);
            while($row = mysql_fetch_array($articles)) {
              //Sanatize outputs from html/javascript injection
              $id = htmlspecialchars($row["id"]);
              $url = htmlspecialchars($row["url"]);
              $title = htmlspecialchars($row["title"]);
              $midichlorians = htmlspecialchars($row["midichlorians"]);
              $username = htmlspecialchars($row["username"]);
              $name = htmlspecialchars($row["name"]);

          echo "
        <a class='list-group-item' href='" . $url . "'>
              <h6 class='list-group-item-heading'><b>" .
              $title . " </b><span class='badge'>" . $midichlorians . "</span></h6>" .
              "<p class='list-group-item-text'>User: " . $username .
              "<br>Category: " . $name .
              "</p></a>
               ";
            }
      mysql_close($mysql_handle);
    ?>
        </div>
      </div>
      <div class="col-md-3">
        <label for="">Most Powerful Contributors</label>
          <?php

            $dbhost = 'oniddb.cws.oregonstate.edu';
            $dbname = 'malickc-db';
            $dbuser = 'malickc-db';
            $dbpass = 'Jz8QJFUt65lTYY16';


            // Create connection
            $mysql_handle = mysql_connect($dbhost, $dbuser, $dbpass)
                or die("Error connecting to database server");

            mysql_select_db($dbname, $mysql_handle)
                or die("Error selecting database: $dbname");

            $query = "SELECT * FROM users ORDER BY midichlorians DESC LIMIT 5";
            $contributors = mysql_query($query);

            // output data of each row
            while($row = mysql_fetch_array($contributors)) {

                //Sanatize outputs from html/javascript injection
                $midichlorians = htmlspecialchars($row["midichlorians"]);
                $username = htmlspecialchars($row["username"]);

                echo "
                  <a class='list-group-item'>
                  <h5 class='list-group-item-heading'>" . $username . "</h5>
                  <p><h6>Midichlorians: <span class='badge'>".$midichlorians . "</span></h6></p></a>
                  ";
            }

            mysql_close($mysql_handle);

            ?>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php') ?>
