<?php
// include composer autoload
require '../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('2077.jpg');

$img->resize(200, null, function (\Intervention\Image\Constraint $constraint) {
    $constraint->aspectRatio();
});

$img->text('Watermark', $img->getWidth() - 10, $img->getHeight() - 10, function (\Intervention\Image\AbstractFont $font) {
    $font->file('arial.ttf');
    $font->size(24);
    $font->color(['#ccc', 0.5]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('test.jpg');

echo $img->response('jpg');