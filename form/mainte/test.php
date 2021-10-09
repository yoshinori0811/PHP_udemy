<?php 
    $contactFile = '.contact.dat';

    // ファイルの読み込み
    // $fileContents =file_get_contents($contactFile);

    // echo $fileContents;

    // ファイルに書き込み(上書き)
    // file_put_contents($contactFile, 'テストです');
    // ファイルに書き込み(追記)※いろいろオプションがある
    // file_put_contents($contactFile, 'テストです。', FILE_APPEND);

    $allData = file($contactFile);

    foreach($allData as $lineData){
        $lines = explode(',', $lineData);
        echo $lines[0]. '<br>';
        echo $lines[1]. '<br>';
        echo $lines[2]. '<br>';
    }
?>