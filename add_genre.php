<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Genre</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="genre_post.php" method="POST">
            <div class="form-group">
              <label for="title">Genre Name</label>
              <input class="form-control" type="textbox" id="genre_name" name="genre_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Add Genre</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
