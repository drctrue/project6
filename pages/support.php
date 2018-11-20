<div class="row">
    <form action="" method="POST" enctype="multipart/form-data">
        Send this file:
        <input name="userfile" type="file">
        <input type="submit" name="send_file" value="Send File">
    </form>
</div>
<div class="row">
    <ul>
        <li></li>
    </ul>
</div>


<?php
if (isset($_FILES['userfile'])) {
    $file_name = $_FILES['userfile']['name'];
    $file_size = $_FILES['userfile']['size'];
    $file_tmp = $_FILES['userfile']['tmp_name'];
    $file_type = $_FILES['userfile']['type'];

    $moved = move_uploaded_file($file_tmp, "uploads/" . $file_name);
    if ($moved) {
        echo "Success";
    }
}

$directory = 'uploads/';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
print_r($scanned_directory);
