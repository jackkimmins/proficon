<?php

//These are all of the predefined colours that the API can pick from.
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

// This file was written in PHP 7, which is before the dedicated end with function was introduced.
function endsWith( $haystack, $needle ) {
    $length = strlen( $needle );
    if( !$length ) {
        return true;
    }
    return substr( $haystack, -$length ) === $needle;
}

//This function creates the new initials profile image with the specified values.
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