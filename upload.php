<?php
$name = "upfile";
  if(!isset($_FILES[$name])){
    throw new RuntimeException('不正．');
    }
     else {
      $file_name = $_FILES[$name]["name"];
      $file_type = $_FILES[$name]["type"];
      $file_size = $_FILES[$name]["size"];
      $file_tmp_name = $_FILES[$name]["tmp_name"];

      if (!move_uploaded_file($file_tmp_name, 'upload/'.$file_name)){
        throw new RuntimeException('ファイル保存時にエラーが発生しました．');
      }
      echo 'ファイルは正常にアップロードされました．';
    }

    $lines = file('upload/'.$_FILES[$name]["name"]);
    $a = fopen("./seat.txt", "w");
    foreach ($lines as $line) {
      fputs($a,$line);
    }
    fclose($a);

include('./list.php');
?>
