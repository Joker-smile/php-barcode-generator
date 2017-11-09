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
    echo '<img  src="data:image/png;base64,' . base64_encode($generator->getBarcode(trim($file[$i]), $generator::TYPE_CODE_128)) . '" style="margin-top: 50px">'.'<br>'.'<span style="letter-spacing:10px;">'.trim($file[$i]).'</span>'.'<br>';
}

