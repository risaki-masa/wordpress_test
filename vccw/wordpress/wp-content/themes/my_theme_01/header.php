<!DOCTYPE html>
<html dir="ltr" lang="ja">
    <head prefix="
        og: http://ogp.me/ns# 
        <?php HeadUtils::show_page_type(); ?>: http://ogp.me/ns/<?php HeadUtils::show_page_type(); ?>#
    ">
        <meta charaset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php HeadUtils::show_title(); ?></title>
        <meta name="description" content="<?php HeadUtils::show_description(); ?>">
        <meta name="format-detection" content="telephone=no, email=no, address=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta property="og:url" content="<?php HeadUtils::show_current_uri(); ?>">
        <meta property="og:title" content="<?php HeadUtils::show_title(); ?>">
        <meta property="og:type" content="<?php HeadUtils::show_page_type(); ?>">
        <meta property="og:description" content="<?php HeadUtils::show_description(); ?>">
        <meta property="og:image" content="<?php HeadUtils::show_thumbnail_uri(); ?>">
        <meta property="og:site_name" content="<?php SiteUtils::get_title(); ?>">
        <meta property="og:locale" content="ja_JP">
        <meta name="twitter:card" content="summary_large_image">
        <!-- <meta name="twitter:site" content="@アカウント名"> -->

        <?php wp_head(); ?>
    </head>
    <body>
        <div id="wrap">
            <div id="left-side">
                <header id="header">
                    <?php HeaderUtils::show_logo();?>
                </header>