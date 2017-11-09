<?php

include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorPNG.php');
include('src/BarcodeGeneratorSVG.php');
include('src/BarcodeGeneratorJPG.php');
include('src/BarcodeGeneratorHTML.php');

//将数字转化为条形码
$file=file('test.txt');
//$files=file_get_contents('test.txt');
//$filees=explode('/n',$files);
//echo '<pre>';
//print_r($files);
for ($i=0;$i<count($file);$i++){
    $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
//    echo '<img  src="data:image/png;base64,' . base64_encode($generator->getBarcode(trim($file[$i]), $generator::TYPE_CODE_128)) . '" style="margin-top: 50px">'.'<br>'.'<span style="letter-spacing:12px;">'.trim($file[$i]).'</span>'.'<br>';
    //生成png图片并存放在img文件夹中
    $content=$generator->getBarcode(trim($file[$i]), $generator::TYPE_CODE_128);
    file_put_contents('img/'.trim($file[$i]).'.png',$content);
    echo '<img  src="img/'.trim($file[$i]).'.png" style="margin-top: 50px">'.'<br>'.'<span style="letter-spacing:12px;">'.trim($file[$i]).'</span>'.'<br>';
}

