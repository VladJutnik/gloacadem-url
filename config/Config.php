<?php

class Config
{
    public $site_name = 'Привет Мир я Ваш сайт';
    private static $url = 'http://gloacadem-url/';

    public function get_url($url_custom = '')
    {
        return self::$url . $url_custom;
    }
}