<?php

/**
 * 投稿に関するAPIを管理するクラス
 */
final class PostUtils extends StaticClass 
{
    /**
     * 次の投稿があるか判別する値を取得
     * @return bool 次の投稿があるか判別する値
     */
    public static function has_next() 
    {
        return have_posts();
    }

    /**
     * 次の投稿を設定
     */
    public static function set_next() 
    {
        the_post();
    }

    /**
     * タイトルを取得
     * @return string タイトル
     */
    public static function get_title() 
    {
        $title = get_the_title();
        return esc_html( $title );
    }

    /**
     * タイトルを表示
     */
    public static function show_title() 
    {
        $permalink  = self::get_permalink();
        $title      = self::get_title();

        printf( '<a href="%s">%s</a>', $permalink, $title );
    }

    /**
     * パーマリンクを取得
     * @return string パーマリンク
     */
    public static function get_permalink() 
    {
        $permalink = get_the_permalink();
        return esc_url( $permalink );
    }

    /**
     * メタデータを表示
     */
    public static function show_metas() 
    {
        self::show_date();
        self::show_tags();
    }

    /**
     * 日付を表示
     */
    private static function show_date() 
    {
        $format = get_option( 'date_format' );

        echo '<div class="date">';
        the_time( $format );
        echo '</div>';
    }

    /**
     * タグを表示
     */
    private static function show_tags() 
    {
        if ( !has_tag() ) return;

        $tags       = get_the_tags();
        $on_show    = function( $tag, $index ) use( $tags )
        {
            $tag    = $tags[$index];
            $id     = $tag->term_id;
            $name   = esc_html( $tag->name );
            $uri    = esc_url( get_tag_link( $id ) );

            echo <<< EOT
<a href="{$uri}">
    <div class="tag hover-part theme-color1">{$name}</div>
</a>
EOT;
        };

        echo '<div class="tags">';
        ArrayUtils::for_each( $tags, $on_show );
        echo '<div>';
    }

    /**
     * サムネイルか画像なしを表示
     * @param $size_name サイズ名
     */
    public static function show_thumbnail_or_no_image( $size_name ) 
    {
        $on_show = function() use( $size_name ) 
        {
            $has_thumbnail = has_post_thumbnail();
            $has_thumbnail ? self::show_thumbnail( $size_name ) : self::show_no_image ( $size_name );
        };

        self::wrap_permalink_and_show( $on_show );
    }

    /**
     * サムネイルを表示
     * @param $size_name サイズ名
     */
    private static function show_thumbnail( $size_name ) 
    {
        the_post_thumbnail( $size_name );
    }

    /**
     * 画像なしを表示
     * @param $size_name サイズ名
     */
    private static function show_no_image( $size_name ) 
    {
        $width  = ThumbnailUtils::get_width  ( $size_name );
        $height = ThumbnailUtils::get_height ( $size_name );

        echo <<< EOT
<div class="no-image flex-center" style="width:{$width}px; height:{$height}px;">NO IMAGE</div>
EOT;
    }

    /**
     * 抜粋文を表示
     */
    public static function show_excerpt() 
    {
        echo get_the_excerpt();
    }

    /**
     * パーマリンクで包んで表示
     * @param $on_show 表示する時の処理
     */
    private static function wrap_permalink_and_show( $on_show ) 
    {
        $permalink = get_the_permalink();
        
        printf( '<a href="%s">', $permalink );
        $on_show();
        echo '</a>';
    }

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