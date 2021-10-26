<?php

include "Database.php";
class Config
{
    public $site_name = 'Привет Мир я Ваш сайт';
    private static $url = 'http://gloacadem-url/';

    public function get_url($url_custom = '')
    {
        return self::$url . $url_custom;
    }

    public function set_user()
    {
        $db = new Database();

        try {
            $rows = [];
            $query_text = "select * from `users`";
            $query = $db->query($query_text);
            if (!$query) {
                throw new Exception("wrong select_query: " . $query_text, 123);
            }
            while ($row = $query->fetch_assoc()) {
                $rows[] = [
                    $row['login'],
                    $row['pass']
                ];
            }
        } catch (Exception $e) {
            return 'error';
        }

        return $rows;
    }
}