<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Article</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="publication_post.php" method="POST">
            <div class="form-group">
              <label for="title">Publication Name</label>
              <input class="form-control" type="textbox" id="pub_name" name="pub_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <label for="url">Author Name</label>
              <input class="form-control" type="textbox" id="author" name="author" value="" placeholder="http://example.com/sweet-article" required>
            </div>
            <div class="form-group">
              <label for="category_id">Year Published</label>
              <input class="form-control" type="textbox" id="year_published" name="year_published" value="" placeholder="http://example.com/sweet-article" required>
            </div>
            <div class="form-group">
              <label for="category_id">Publication Type</label>
              <select class="form-control" name="type_id">
                <?php
                    $query = "SELECT pub_type.id, pub_type.type_name
                        FROM pub_type";

                    $pub_type = mysql_query($query);
                      while($row = mysql_fetch_array($pub_type)) {
                        echo "<option value='" . $row["id"] . "'>" . $row["type_name"] . "</option>";
                      }
                      mysql_close($mysql_handle);
                  ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Add Article</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
