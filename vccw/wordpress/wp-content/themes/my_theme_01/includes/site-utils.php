<?php

/**
 * サイトに関する汎用APIを管理するクラス
 */
final class SiteUtils extends StaticClass 
{
    private static $is_local = null;

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
     * ホームのURIを取得
     * @return string ホームのURI
     */
    public static function get_home_uri() 
    {
        $uri = home_url();
        return esc_url( $uri );
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

    /**
     * ローカル環境か判別する値を取得
     * @return bool ローカル環境か判別する値
     */
    public static function is_local() 
    {
        if ( is_null( self::$is_local ) ) 
        {
            self::$is_local = self::get_home_uri() === 'http://test';
        }

        return self::$is_local;
    }
}