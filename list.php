<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>席替え</title>
</head>
<body>
  <br>
  COL:
  <form action="list.php" method="post">
  <input type="number" name="col" min="1" max="10">
  <input type="submit" value="適用">
  </form>
      <?php
      $name = "upfile";
      $lines = file('seat.txt');
      if(isset($_POST['col'])){
        $col = $_POST['col'];
      }
      else{
        $col = 6;
      }



      // if(!isset($_FILES[$name])){
      //   $lines = file('seat.txt');
      // }
      // else {
      //   $lines = file('upload/'.$_FILES[$name]["name"]);
      //   print_r($_FILES);
      //   $x = $_FILES[$name];
      // }

        ?>

        <a href="downlode.php?"><Div Align="right">downlode</div></a>
          <a href="shuffle.php?"><Div Align="right">shuffle</div></a>

        <table border="1", width="90%" height="80" align="center">
          <?php
          for($a = 0; $a < count($lines) / $col; $a++){
              echo '<tr>';
              for($i = 0; $i < $col; $i++){
                  $j = $a * $col + $i;
                  if (count($lines) == $j) {
                    echo '</tr>';
                    break;
                  }
                  echo '<td>'.$lines[$j].'</td>';
              }
              echo '</tr>';
          }
          ?>
        </table>

        <form action="upload.php" method="post" enctype="multipart/form-data">
          ファイル：<br>
          <input type="file" name="upfile" size="30"><br>
          <br>
          <input type="submit" value="アップロード">
        </form>
      </body>
      </html>
