<?php

/**
 * テンプレートに関するAPIを管理するクラス
 */
final class TemplateUtils extends StaticClass
{
    private static $directory_uri = null;

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

    /**
     * ディレクトリのパスを取得
     * @return string ディレクトリのパス
     */
    public static function get_directory_path() 
    {
        return TEMPLATEPATH;
    }

    /**
     * テンプレートパーツを含める
     * @param $file_path ファイルパス
     */
    public static function include_part( $file_path ) 
    {
        require self::get_directory_path().$file_path;
    }
}