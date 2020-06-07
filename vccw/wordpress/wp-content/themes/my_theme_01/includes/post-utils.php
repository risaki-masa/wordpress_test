<?php

/**
 * 投稿に関する汎用APIを管理するクラス
 */
final class PostUtils extends StaticClass 
{
    /**
     * 現在の投稿を一時的に設定して実行
     */
    public static function set_current_post_as_temporary_and_execute( $on_execute ) 
    {
        global $post;

        setup_postdata( $post );
        $on_execute();
        wp_reset_postdata();
    }
}