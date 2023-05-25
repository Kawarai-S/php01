<?php
$file_name='data/test.txt';
$file=fopen($file_name,'r');

$data = array();
while (!feof($file)) {
    $line = fgets($file);
    if (empty($line)) {
        continue; // $line が空の場合は処理をスキップ
    }
    $fields = explode(',', $line);
    $data[] = $fields;
}
// var_dump($data);
fclose($file);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th width="200px">日時</th>
            <th width="150px">名前</th>
            <th width="150px">mail</th>
            <th width="150px">年齢</th>
            <th width="150px">趣味</th>
            <th width="150px">特技</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <?php foreach ($row as $cell): ?>
            <td><?=$cell; ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>