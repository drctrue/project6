<div class="row">
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="4000000">
    Send this file:
    <input name="userfile" type="file">
    <div class="btn-holder">
      <input type="submit" name="send_file" value="Send File">
    </div>
  </form>
</div>


<?php

  $userfile = $_FILES['userfile'];
  $send_file = $_POST['send_file'];

  //downloading files
  if (isset($send_file) && isset($userfile)) {
    if (is_uploaded_file($userfile['tmp_name'])) {
      $filename = basename($userfile['name']);
      $uploaddir = "files/";
      $uploadfile = $uploaddir . $filename;
      $moved_files = move_uploaded_file($userfile['tmp_name'], $uploadfile);
      if ($moved_files) {
        echo "Success!";
      }
      else {
        echo 'Error!';
      }
    }
  }