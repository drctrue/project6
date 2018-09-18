<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
  <link type="text/css" rel="stylesheet" media="all" href="/html/css/screen.css">
  <title><?php pageTitle(); ?></title>
</head>
<body>
<div class="wrapper">
  <header class="header">
    <img src="/html/images/bg-header.jpg" width="780" height="180" alt="image" title="image">
    <strong class="logo"><a href="/"><?php siteName(); ?></a></strong>
    <span class="slogan">...just use</span>
  </header>
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

  <footer class="footer">
    <div class="footer-holder">
      <p>© Copyright 2002 WEBHOSTING Corporation. All Rights Reserved.</p>
    </div>
  </footer>
</div>
</body>
</html>