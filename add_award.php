<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Award</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="award_post.php" method="POST">
            <div class="form-group">
              <label for="title">Award Name</label>
              <input class="form-control" type="textbox" id="award_name" name="award_name" value="" placeholder="Title" required autofocus>
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
              <button type="submit" class="btn btn-default" name="submit">Add Award</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
