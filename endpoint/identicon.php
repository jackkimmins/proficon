<?php

require('../img/imgAPI.php');

if (isset($_GET['seed']))
{
    $seed = $_GET['seed'];

    if (endsWith($seed, '.svg'))
    {
        $text = strtoupper(str_replace('.svg', '', $seed));

        if (strlen($text) > 0)
        {
            //Calls the function that creates the SVG image with the chosen colour.
            newIdenticonImg(getColour($text, $validColours), strtoupper($seed));
            exit;
        }
    }
}

//If any of the steps result in an error, a black question mark image will be displayed.
newInitialsImg();