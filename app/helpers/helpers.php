<?php

use App\Models\Instagram;
use App\Models\Setting;

if (!function_exists('setting')) {
    function setting()
    {
        $setting = Setting::find(1);
        return $setting;
    }
}

if (!function_exists('instagram')) {
    function instagram()
    {
        $instagram = Instagram::limit(3)->get();
        return $instagram;
    }
}


if (!function_exists('insta')) {
    function insta()
    {
        $insta = Instagram::offset(3)->limit(3)->get();
        return $insta;
    }
}