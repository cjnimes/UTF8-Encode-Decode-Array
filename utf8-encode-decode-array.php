<?php
function utf8_decode_array($array)
{
    $utf8DecodedArray = array();

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $utf8DecodedArray[$key] = utf8_decode_array($value);
            continue;
        }
        $utf8DecodedArray[$key] = utf8_decode($value);
    }

    return $utf8DecodedArray;
}

function utf8_encode_array($array)
{
    $utf8EncodedArray = array();

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $utf8EncodedArray[$key] = utf8_encode_array($value);
            continue;
        }
        $utf8EncodedArray[$key] = utf8_encode($value);
    }

    return $utf8EncodedArray;
}