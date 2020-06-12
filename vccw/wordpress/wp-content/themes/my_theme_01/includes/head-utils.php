<?php

/**
 * ヘッドに関するAPIを管理するクラス
 */
final class HeadUtils extends StaticClass
{
    private static $title       = null;
    private static $description = null;

     /**
     * タイトルを取得
     * @return string タイトル
     */
    private static function get_title() 
    {
        if ( is_null( self::$title ) )
        {
            // ホームページの時、wp_get_document_title関数は「タイトル - ページの説明」という文字列を返す
            // しかしこの場合は、「- ページ説明」の部分が不要であるためSiteUtils::get_title()を使用して「タイトル」のみを取得する
            self::$title = is_home() ? SiteUtils::get_title() : wp_get_document_title();
        }

        return self::$title;
    }

    /**
     * タイトルを表示
     */
    public static function show_title() 
    {
        echo self::get_title();
    }

    /**
     * 説明を取得
     * @return string 説明
     */
    private static function get_description() 
    {
        if ( !is_null( self::$description ) ) 
        {
            return self::$description;
        }
        
        if ( is_singular() ) 
        {
            $on_execute = function()
            {
                self::$description = get_the_excerpt();
            };

            PostUtils::set_current_post_as_temporary_and_execute( $on_execute );
            return self::$description;
        }

        self::$description = SiteUtils::get_description();
        return self::$description;
    }

    /**
     * 説明を表示
     */
    public static function show_description()
    {
        echo self::get_description();
    }

    /**
     * 現在のURIを表示
     */
    public static function show_current_uri() 
    {
        echo SiteUtils::get_current_uri();
    }

    /**
     * ページの種類を表示
     */
    public static function show_page_type() 
    {
        echo is_home() ? 'website' : 'article';
    }

    /**
     * サムネイルのURIを表示
     */
    public static function show_thumbnail_uri() 
    {
        $uri = TemplateUtils::get_directory_uri().'/assets/images/hoge.png';

        if ( is_singular() ) 
        {
            $on_execute = function() use( &$uri )
            {
                if ( !has_post_thumbnail() ) return;

                $uri = get_the_post_thumbnail_url( null, 'full' );
            };

            PostUtils::set_current_post_as_temporary_and_execute( $on_execute );
        }

        echo $uri;
    }

}
