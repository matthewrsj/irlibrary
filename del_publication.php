<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Article</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="publication_del.php" method="POST">
            <div class="form-group">
              <label for="title">Publication Name To Delete (must be exact)</label>
              <input class="form-control" type="textbox" id="pub_name" name="pub_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Delete Publication</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
