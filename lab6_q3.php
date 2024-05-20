<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab6_q3</title>
    </head>
    <body>
        <?php
        funtion calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);

        echo "The area of a rectangle with a width of $width and a height of $height is $area.";
        ?>
    </body>
    </html>    
