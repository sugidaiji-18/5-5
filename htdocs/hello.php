<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $str = 'PHP (PHP:Hypertext Preprocessor)';
  $msg = <<<'EOD'
  {$str}は、サーバーサイドで動作する簡易なスクリプト
  言語です。
  まずは、本書でじっくり基礎固めをしましょう。<br/>
  "Let's start, everyone!!"
  EOD;
  print $msg;
  ?>
    
</body>
</html>