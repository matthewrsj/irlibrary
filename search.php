<?php include('header.php') ?>
<?php include('connectdb.php') ?>
    <div class="container">
      <div class="row">
        <h3>Find Publication Information</h3>
      </div>
      <div class="row">
        <div class="jumbotron">
          <form class="" action="searchdisplay.php" method="POST">
            <div class="form-group">
              <label for="title">Publication name to search for</label>
              <input class="form-control" type="textbox" id="pub_name" name="pub_name" value="" placeholder="Title" required autofocus>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-default" name="submit">Find Publication</button>
            </div>
          </form>
        </div>

      </div>
    </div>
<?php include('footer.php') ?>
