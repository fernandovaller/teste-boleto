<?php

require __DIR__ . '/vendor/autoload.php';


// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorHTML();


echo '<hr><h1>1-40</h1>';
echo $generator->getBarcode(
    '846400000036518301622024212200780006002885736641',
    $generator::TYPE_CODE_11,
    1,
    40
);

echo '<hr><h1>2-40</h1>';

echo $generator->getBarcode(
    '846400000036518301622024212200780006002885736641',
    $generator::TYPE_CODE_11,
    2,
    40
);

echo '<hr><h1>3-40</h1>';

echo $generator->getBarcode(
    '846400000036518301622024212200780006002885736641',
    $generator::TYPE_CODE_11,
    3,
    40
);

?>

<hr>
<style>
    .zoom {
        padding-top: 20px;
        padding-left: 70px;
        transform: scale(1.5);
        width: 300px;
    }
</style>

<div class="zoom">
    <?php
    echo '<hr><h1>1-40 + CSS:transform:scale(1.5)</h1>';
    echo $generator->getBarcode(
        '846400000036518301622024212200780006002885736641',
        $generator::TYPE_CODE_11,
        1,
        40
    );
    ?>
</div>