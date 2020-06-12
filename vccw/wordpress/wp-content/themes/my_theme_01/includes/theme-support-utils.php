<?php

/**
 * テーマのサポートに関するAPIを管理するクラス
 */
final class ThemeSupportUtils extends StaticClass
{
    public static function add_supports() 
    {
        add_theme_support( 'post-thumbnails' );
        
        self::add_html5();
        ThumbnailUtils::on_register_sizes();
    }

    /**
     * HTML5のサポートを追加
     */
    private static function add_html5() 
    {
        $targets = [
            'search-form'   ,
            'comment-form'  ,
            'comment-list'  ,
            'gallery'       ,
            'caption'       ,
        ];

        add_theme_support( 'html5', $targets );
    }
}
