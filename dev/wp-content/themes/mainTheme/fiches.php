<?php
/*
        Template Name: Fiches
*/
get_header();
?>
        <div class="slogan">
            <p class="slogan__line slogan__line--one">Des soins de</p>
            <p class="slogan__line slogan__line--two">qualité</p>
            <p class="slogan__line slogan__line--three">pour tous</p>
        </div>
        <div class="mainNav clear" role="navigation">
            <input class="mainNav__input" type="checkbox" id="toggle-nav">
            <label class="mainNav__label link" for="toggle-nav">Menu</label>
            <ol class="mainNav__list">
                <?php foreach ( csia_get_menu_items( 'main-nav' ) as $navItem ): ?>
                    <li class="mainNav__listElt">
                        <a class="mainNav__listLink link<?php echo $navItem -> isCurrent ? ' link--active' : ''; ?>" href="<?php echo $navItem -> url; ?>">
                            <?php echo $navItem -> label ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ol>
        </div>
    </header>
    <div class="content clear">
        <div class="hiddenFooter">
            <h1 class="title title__page">Fiches info</h1>
            <div class="wrap__fiches">
                <div class="mainSection__legend">
                    <?php
                        $posts = new WP_QUERY( [ 'pagename' => 'Fiches info' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
                <ul class="fiches__list wrap clear">
                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'fiches' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                    <li class="fiches__listElt card card__fiches">
                        <?php the_title(); ?>
                        <div class="button__container button__container--fiches">
                            <a class="button" href="<?php the_permalink(); ?>">
                                Plus
                            </a>
                        </div>
                    </li>
                    <?php endwhile; endif; ?>

                </ul>

                    <div class="mainSection__subTitle mainSection__subTitle--fiches">
                        <p>Recevez nos fiches et activités directement sur votre e-mail en vous inscrivant à notre newsletter.</p>
                    </div>
                <?php
                    $posts = new WP_QUERY( [ 'pagename' => 'Newsletter' ] );
                    if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                ?>
                    <div class="button__container">
                        <a class="button" href="<?php the_permalink(); ?>">M'inscrire à la newsletter</a>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
<?php get_footer();
