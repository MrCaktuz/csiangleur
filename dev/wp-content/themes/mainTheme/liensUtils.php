<?php
/*
        Template Name: Liens utils
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
            <h1 class="title title__page">Liens utiles</h1>
            <div class="wrap wrap__fiches">
                <div class="mainSection__legend">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <ul class="links__list">
                    <?php if( have_rows('usefullLinks') ): ?>
                        <?php while ( have_rows('usefullLinks') ) : the_row(); ?>
                            <li class="links__listElt card card__links">
                                <?php the_sub_field( 'usefullLinksDescription' ) ?>
                                <div class="button__container button__container--fiches">
                                    <a class="button" href="<?php the_sub_field( 'usefullLinksUrl' ) ?>" target="_blank" rel="external">
                                        Accéder au site
                                    </a>
                                </div>
                            </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
<?php get_footer();
