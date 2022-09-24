<?php
$data = [
   [
    'name' => '山田太郎',
    'age' => 30,
    'sex' => '男',
   ],
   [
    'name' => '鈴木次郎',
    'age' => 30,
    'sex' => '男',
   ],
   [
    'name' => '佐藤花子',
    'age' => 25,
    'sex' => '女',
   ],
    ];

print $data[1]['name'];
echo "<br/>";
$data1 = [-10 => '山田','杉原'];
print_r($data1);


?>
