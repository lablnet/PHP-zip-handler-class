<?php


require_once 'classes/Zip.php';

$zip = new Zip();

/**
 * //Note if you want manipulate files in outside the root of server / script you may use my file manipulation class here is two possible link
 * Github: https://github.com/Lablnet/PHP-files-manipulation-class
 * Alternative: https://www.phpclasses.org/package/10621-PHP-Manipulate-files-and-directories-in-several-ways.html
 * please fork/rate these classes if you like thanks.
 */
//compress file
$comp = $zip->Compress(
['data/image/one.png', 'data/image/two.png'],
'data/compressed/images.zip', false
);
if ($comp === true) {
    echo 'file successfully compressed ';
} else {
    echo 'already / something went wrong ';
}

//extract file
$ext = $zip->Extract(
    'data/compressed/images.zip', 'data/extract/'
);
if ($ext === true) {
    echo ' file extract successfully ';
} else {
    echo ' already / something went wrong ';
}
