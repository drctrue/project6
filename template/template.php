<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
  <link type="text/css" rel="stylesheet" media="all" href="/html/css/screen.css">
  <title><?php pageTitle(); ?></title>
</head>
<body>
<?php include_once "header.php"; ?>
<nav class="main-nav">
  <div class="ttl">
    <span>navigation</span>
  </div>
  <div class="nav">
    <ul>
      <?php navMenu(); ?>
    </ul>
    <div class="arrow-holder">
      <a href="#">Arrow down</a>
    </div>
  </div>
</nav>

<?php pageContent(); ?>

<?php include_once "footer.php"; ?>
</div>
</body>
</html>