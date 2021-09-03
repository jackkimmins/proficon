<?php

// These are all of the predefined colours that the API can pick from.
$validColours = array(
    "#665A0D",
    "#887126",
    "#92366D",
    "#5132AD",
    "#374FB9",
    "#FF4658",
    "#084B83",
    "#3D2B56",
    "#2C497F",
    "#690375",
    "#74546A",
    "#89023E",
    "#DA6403",
    "#A59132"
);

// This function converts the random string seed into an integer, which then seeds the randomiser that picks a colour in the valid colours array.
function getColour($seed, &$colours) {
    srand(crc32($seed));
    return $colours[rand(0, count($colours) - 1)];
}

// This file was written in PHP 7, which is before the dedicated end with function was introduced.
function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}

// This function creates the new initials profile image with the specified values.
function newInitialsImg($colour = "black", $text = "?") {
    header('Content-type: image/svg+xml');

    ?>
<svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1 1">
    <mask id="avatarsRadiusMask">
        <rect width="1" height="1" rx="0" ry="0" x="0" y="0" fill="#fff" />
    </mask>
    
    <g mask="url(#avatarsRadiusMask)">
        <rect width="1" height="1" fill="<?= $colour ?>" />
        <text x="50%" y="50%" style=" font-family: Tahoma,sans-serif; font-size: 0.5px" fill="#FFF" text-anchor="middle" dy="0.178"><?= $text ?></text>
    </g>
</svg>

    <?php
}

// This function creates a new Identicon icon from the specified seed.
function newIdenticonImg($colour, $seed) {
    srand(crc32($seed . "123"));

    // The image is made up of a 5x5 grid of rectangles.
    // The last two columns are a reflection of the first and second columns.
    // The centre column is unique and only used once.
    // This means we only need to randomly generate three columns.

    $sides = array();

    for ($i = 0; $i < 3; $i++)
    {
        $side = array();

        for ($x = 0; $x < 5; $x++)
        {
            $value = rand(0, 100);

            if ($value >= 50)
                array_push($side, $x);
        }

        array_push($sides, $side);
    }

    // This function creates a rectangle with the provided arguments.
    function outputRect(&$sides, $side, $i) {
        foreach ($sides[$side] as &$rect)
        {
            echo '<rect x="' . $i . '" y="' . $rect . '" width="1" height="1"></rect>';
        }
    }

    header('Content-type: image/svg+xml');

?>
<svg viewBox="0 0 5 5" xmlns="http://www.w3.org/2000/svg" fill="<?= $colour ?>" style="background-color: #eeeeff;"><?php

        // We then need to output the rectangles on the SVG image.
        // Remember that the fourth and fifth column are a reflection of first and second.
        for ($i = 0; $i <= 4; $i++)
        {
            if ($i < 3)
            {
                outputRect($sides, $i, $i);
            }
            else if ($i == 3)
            {
                foreach ($sides[1] as &$rect)
                    outputRect($sides, 1, 3);
            }
            else if ($i == 4)
            {
                foreach ($sides[0] as &$rect)
                    outputRect($sides, 0, 4);
            }
        }

    ?></svg><?php
}