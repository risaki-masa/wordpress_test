<?php

/**
 * サイトに関する汎用APIを管理するクラス
 */
final class SiteUtils extends StaticClass 
{
    /**
     * タイトルを取得
     * @return string タイトル
     */
    public static function get_title() 
    {
        $title = get_bloginfo( 'name' );
        return esc_html( $title );
    }

    /**
     * 説明を取得
     * @return string 説明
     */
    public static function get_description() 
    {
        $description = get_bloginfo( 'description' );
        return esc_html( $description );
    }

    /**
     * 現在のURIを取得
     * @return string 現在のURI
     */
    public static function get_current_uri() 
    {
        $protocol   = is_ssl() ? 'https://' : 'http://';
        $uri        = $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

        return $uri;
    }
}