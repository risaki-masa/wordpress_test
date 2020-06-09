<?php

/**
 * 静的クラス化するためのクラス
 * このクラスを継承することでクラスのインスタンス化を禁止する
 */
class StaticClass 
{
    private function __construct() {}
}

/**
 * PHPファイルを含める
 */
function include_php_files() 
{
    $paths = glob( TEMPLATEPATH.'/includes/*.php' );
    foreach ( $paths as $path ) require $path;
}

include_php_files();