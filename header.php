<?php include('connectdb.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>irlibrary</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">irlibrary</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="add_publication.php">Add Publication <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="add_genre.php">Add Genre <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="add_award.php">Add Award <span class="sr-only">(current)</span></a></li>
        <li class=""><a href="del_publication.php">Delete Publication <span class="sr-only">(current)</span></a></li>
      </ul>
      <ul class='nav navbar-nav navbar-right'>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  <body>
    <!-- start body -->
