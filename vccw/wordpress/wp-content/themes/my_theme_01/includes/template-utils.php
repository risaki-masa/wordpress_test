<?php

/**
 * テンプレートに関する汎用APIを管理するクラス
 */
final class TemplateUtils extends StaticClass
{
    static $directory_uri = null;

    /**
     * ディレクトリURIを取得
     * @return string ディレクトリURI
     */
    public static function get_directory_uri() 
    {
        if ( is_null( self::$directory_uri ) )
        {
            self::$directory_uri = get_template_directory_uri();
        }

        return self::$directory_uri;
    }
}