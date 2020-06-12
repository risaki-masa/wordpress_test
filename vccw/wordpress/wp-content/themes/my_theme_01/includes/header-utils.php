<?php

/**
 * ヘッダーに関するAPIを管理するクラス
 */
final class HeaderUtils extends StaticClass 
{
    /**
     * ヘッダーを表示
     */
    public static function show() 
    {
        get_header();
    }

    /**
     * ロゴを表示
     */
    public static function show_logo() 
    {
        $tag_type   = is_singular() ? 'div' : 'h1';
        $home_uri   = SiteUtils::get_home_uri();
        $title      = SiteUtils::get_title();

        echo <<< EOT
<$tag_type>
    <a href="$home_uri">
        <div>$title</div>
    </a>
</$tag_type>
EOT;
    }
}