<?php

/**
 * フッターに関するAPIを管理するクラス
 */
final class FooterUtils extends StaticClass 
{
    /**
     * フッターを表示
     */
    public static function show() 
    {
        get_footer();
    }

    /**
     * メニューを表示
     */
    public static function show_menu() 
    {
        TemplateUtils::include_part( '/template-parts/footer-menu.php' );
    }

    /**
     * アバウトのURIを表示
     */
    public static function show_about_uri() 
    {
        echo SiteUtils::get_home_uri().'/about';
    }

    /**
     * 利用規約のURIを表示
     */
    public static function show_user_policy_uri() 
    {
        echo SiteUtils::get_home_uri().'/user-policy';
    }
}