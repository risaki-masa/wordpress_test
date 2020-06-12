<div class="posts">
    <?php if ( PostUtils::has_next() ): ?>
        <ul>
            <?php while( PostUtils::has_next() ): ?>
                <li>
                    <article class="post">
                        <h2 class="title">
                            <?php PostUtils::show_title(); ?>
                        </h2>
                        <div class="content flex">
                            <div class="thumbnail hover-border">
                                <?php PostUtils::show_thumbnail_or_no_image( 'post' ); ?>
                            </div>
                            <div class="detail">
                                <div class="metas flex">
                                    <?php PostUtils::show_metas(); ?>
                                </div>
                                <p class="excerpt">
                                    <?php PostUtils::show_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </article>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <article class="posts-not-found">
            <p class="description">
                記事が見つかりませんでした。右側のサイドメニューより、もう一度記事をお探しください。
            </p>
            <p>
                <a class="hover-text-line" href="<?php SiteUtils::show_home_uri() ?>">
                    ホームページへ
                </a>
            </p>
        </article>
    <?php endif;?>
</div>