<?php

/**
 * 配列に関するAPIを管理するクラス
 */
final class ArrayUtils extends StaticClass 
{
    /**
     * 要素数を取得
     * @param   $values 値
     * @return  int     配列数
     */
    public static function get_count( $values )
    {
        return count( $values );
    }

    /**
     * 各要素に対して処理を実行
     * @param   $values     値
     * @param   $on_execute 実行する時の処理( 引数: 要素, インデックス )
     */
    public static function for_each( $values, $on_execute ) 
    {
        $count = self::get_count( $values );

        for ( $i = 0; $i < $count; $i++ ) $on_execute( $values[$i], $i );
    }
}