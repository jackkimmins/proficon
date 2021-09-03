<?php

require('../img/imgAPI.php');

//This function converts the random string seed into an integer, which then seeds the randomiser that picks a colour in the valid colours array.
function getColour($seed, &$colours) {
    srand(crc32($seed));
    return $colours[rand(0, count($colours) - 1)];
}

if (isset($_GET['seed']))
{
    $seed = $_GET['seed'];

    if (endsWith($seed, '.svg'))
    {
        $text = strtoupper(str_replace('.svg', '', $seed));

        if (strlen($text) > 0)
        {
            //Calls the function that creates the SVG image with the chosen colour and first two characters from the seed (the user's initials).
            newInitialsImg(getColour($text, $validColours), substr($text, 0, 2));
            exit;
        }
    }
}

//If any of the steps result in an error, a black question mark image will be displayed.
newInitialsImg();