<?php

if (!function_exists('capitalize_first_letter')) {
    function capitalize_first_letter($string)
    {
        return ucfirst(strtolower($string));
    }
}