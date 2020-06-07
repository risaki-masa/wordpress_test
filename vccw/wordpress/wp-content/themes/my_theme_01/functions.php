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
 * PHPファイルを読み込む
 */
function load_php_files() 
{
    $paths = glob( TEMPLATEPATH.'/includes/*.php' );
    foreach ( $paths as $path ) require $path;
}

load_php_files();