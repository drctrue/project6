<style>
    table, th, td {
        border: 1px solid black;
        padding: 10px;
        margin-top: 20px;
    }
    thead {
        background-color: antiquewhite;
    }
</style>

<div class="row">
    <form action="" method="POST" enctype="multipart/form-data">
        Send this file:
        <input name="userfile" type="file">
        <input type="submit" name="send_file" value="Send File">
    </form>
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

$directory = './uploads/';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));

?>

<div class="row">
    <table>
        <thead>
            <tr>
                <th>Filename</th>
                <th>Extension</th>
                <th>Size</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($scanned_directory as $file) {
                $info = pathinfo($file);
                $name = $info['basename'];
                $fullpath = $directory . $name;
                $extension = $info['extension'];
                $size = filesize($fullpath);
                $time = date("m.d.y", filectime($fullpath));
                ?>
            <tr>
                <td><?php echo $name; ?></td>
                <td><?php echo $extension . ' bytes'; ?></td>
                <td><?php echo $size; ?></td>
                <td><?php echo $time; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>