<?php

/**
 * サムネイルに関するAPIを管理するクラス
 */
final class ThumbnailUtils extends StaticClass
{
    const SIZE_LIST = [
        'post'          => [ 200, 120 ],
        'article'       => [ 800, 400 ],
        'post-list'     => [ 100, 60  ],
        'small-post'    => [ 140, 84  ],
    ];

    /**
     * 幅を取得
     * @param   $name   名前
     * @return  int     幅
     */
    public static function get_width( $name ) 
    {
        return self::SIZE_LIST[$name][0];
    }

    /**
     * 高さを取得
     * @param   $name   名前
     * @return  int     幅
     */
    public static function get_height( $name ) 
    {
        return self::SIZE_LIST[$name][1];
    }

    /**
     * サイズを登録する時の処理
     */
    public static function on_register_sizes() 
    {
        foreach ( ThumbnailUtils::SIZE_LIST as $name => $size ) 
        {
            $width  = $size[0];
            $height = $size[1];

            add_image_size( $name, $width, $height, true );
        }
    }
}