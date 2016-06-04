<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Publication</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="publication_post.php" method="POST">
            <div class="form-group">
              <label for="pub_name">Publication Name</label>
              <input class="form-control" type="textbox" id="pub_name" name="pub_name" value="" required autofocus>
            </div>
            <div class="form-group">
              <label for="author">Author Name</label>
              <input class="form-control" type="textbox" id="author" name="author" value="" required>
            </div>
            <div class="form-group">
              <label for="year_published">Year Published</label>
              <input class="form-control" type="textbox" id="year_published" name="year_published" value="" required>
            </div>
            <div class="form-group">
              <label for="type_id">Publication Type</label>
              <select class="form-control" name="type_id">
                <?php
                    $query = "SELECT id, type_name FROM pub_type";

                    $pub_type = mysql_query($query);
                      while($row = mysql_fetch_array($pub_type)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["type_name"] . "</option>";
                      }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="genre_id">Genre</label>
              <select class="form-control" name="genre_id">
                <?php
                    $query = "SELECT id, genre_name FROM genre";

                    $genreq = mysql_query($query);
                      while($row = mysql_fetch_array($genreq)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["genre_name"] . "</option>";
                      }
                  ?>
              </select>
            </div>
            <div class="form-group">
              <label for="category_id">Was this publication granted any awards?</label>
                <?php
                    $query = "SELECT award.id, award.award_name FROM award";

                    $award = mysql_query($query);
                      while($row = mysql_fetch_array($award)) {
                        echo "<br><input type='checkbox' name='awards[]' value='" . $row["award_name"] . "'>" . $row["award_name"] . "</input>";
                      }
                      mysql_close($mysql_handle);
                  ?>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Add Publication</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
