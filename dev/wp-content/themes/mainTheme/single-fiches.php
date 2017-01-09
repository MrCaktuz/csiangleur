<?php
/*
        Template Name: Single-fiches
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
            <h1 class="title title__page"><?php the_title(); ?></h1>
            <div class="wrap__fiches">
                <div class="mainSection__textBlock singleFiche__definition box">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if( have_rows('ficheSection') ): ?>
                    <?php while ( have_rows('ficheSection') ) : the_row(); ?>
                        <article class="singleFiche__article clear">
                            <h2 class="singleFiche__subTitle"><?php the_sub_field( 'ficheSectionTitle' ); ?></h2>
                            <img class="singleFiche__illustration" src="<?php the_sub_field( 'ficheSectionImg' ); ?>" alt="illustration de la section" />
                            <div class="mainSection__legend singleFiche__content">
                                <?php the_sub_field( 'ficheSectionContent' ); ?>
                            </div>
                        </article>
                <?php endwhile; endif; ?>
                <div class="button__container button__container--singleFiche clear">
                    <?php
                        $posts = new WP_QUERY( [ 'pagename' => 'Fiches info' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                        <a class="button singleFiche__back" href="<?php the_permalink(); ?>">Retour vers nos fiches</a>
                    <?php endwhile; endif; ?>
                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'fiches' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                    <?php endwhile; endif; ?>
                    <a class="button singleFiche__more" href="<?php the_field( 'ficheLink' ); ?>">Pour en savoir plus</a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
