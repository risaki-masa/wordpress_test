<?php


/**
 * 外部ファイルに関するAPIを管理するクラス
 */
final class ExternalFileUtils extends StaticClass 
{
    /**
     * ファイルを読み込む
     */
    public static function load_files() 
    {
        self::load_stylesheets();
    }

    /**
     * スタイルシートファイルを読み込む
     */
    private static function load_stylesheets() 
    {
        SiteUtils::is_local() ? self::load_stylesheets_in_local() : self::load_stylesheets_in_production();
    }

    /**
     * ローカル環境のスタイルシートファイルを読み込む
     */
    private static function load_stylesheets_in_local() 
    {

    }

    /**
     * 本番環境のスタイルシートファイルを読み込む
     */
    private static function load_stylesheets_in_production() 
    {

    }

    /**
     * スタイルシートファイルを読み込む
     * @param $id           ID
     * @param $file_path    ファイルパス
     */
    private static function load_stylesheet( $id, $file_path ) 
    {
        wp_enqueue_style( 
            $id,
            TemplateUtils::get_directory_uri().$file_path,
            [],
            FileUtils::get_updated_unix_time( $file_path )
        );
    }
}