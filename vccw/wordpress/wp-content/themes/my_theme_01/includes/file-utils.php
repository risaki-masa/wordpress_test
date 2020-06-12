<?php

/**
 * ファイルに関するAPIを管理するクラス
 */
final class FileUtils extends StaticClass 
{
    /**
     * ファイルの更新時刻( UNIX時間 )を取得
     */
    public static function get_updated_unix_time( $file_path ) 
    {
        return filemtime( TemplateUtils::get_directory_path().$file_path );
    }
}