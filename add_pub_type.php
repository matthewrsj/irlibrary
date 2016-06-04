<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Add Publication Type</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="pub_type_post.php" method="POST">
            <div class="form-group">
              <label for="title">Publication Type Name</label>
              <input class="form-control" type="textbox" id="type_name" name="type_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Add Publication Type</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
