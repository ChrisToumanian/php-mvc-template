<?php

function get($name,$def='')
{
    // if $name is set, return the value, otherwise return default
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}