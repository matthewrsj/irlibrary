<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Genre</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="award_post.php" method="POST">
            <div class="form-group">
              <label for="title">Award Name</label>
              <input class="form-control" type="textbox" id="award_name" name="award_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Add Award</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
