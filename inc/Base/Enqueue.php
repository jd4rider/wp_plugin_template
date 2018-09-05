<?php

/**
 * @package TestPlugin
 */

namespace Inc\Base;

class Enqueue
{
    public static function activate(){
        flush_rewrite_rules();
    }
}