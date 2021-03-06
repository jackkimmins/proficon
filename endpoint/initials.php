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
            //If the input seed is a first and last name, get the initials from it.
            if (preg_match_all('/ +[A-Z]/', $text) == 1)
            {
                $words = explode(' ', $text);
                $text = strtoupper(substr($words[0], 0, 1) . substr(end($words), 0, 1));
            }

            newInitialsImg(getColour($text, $validColours), substr($text, 0, 2));
            exit;
        }
    }
}

//If any of the steps result in an error, a black question mark image will be displayed.
newInitialsImg();