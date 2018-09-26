<div class="row">
  <label for="input02">File:</label>
  <div class="input-holder">
    <input type="file" name="userfile" id="input02">
  </div>
</div>

<?php

  /**
   * Вернёт многомерный массив, содержащий имена файлов из указанной директории
   * (содержащиеся директории будут проигнорированы)
   * + дополнительные сведения о каждом файле (в частности размер)
   *
   * @param string $dirpath - путь к диретории
   *
   * @return array  - массив имён файлов
   */
  function getSimpleFilesListWithAddInfo($dirpath) {
    $result = array();

    $cdir = scandir($dirpath);
//    $i = 0;
//    foreach ($cdir as $value) {
//// если это "не точки" и не директория
//      if (!in_array($value, array(".", ".."))
//        && !is_dir($dirpath . DIRECTORY_SEPARATOR . $value)) {
//
//        $result[$i]['name'] = $value;
//        $result[$i]['size'] = filesize($dirpath . DIRECTORY_SEPARATOR . $value);
//        $i++;
//      }
//    }

    return $cdir;
  }
$dirpath = 'html';
echo '<pre>';
print_r(getSimpleFilesListWithAddInfo($dirpath));
echo '</pre>';