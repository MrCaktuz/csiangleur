<?php
/*
        Template Name: Comment ça marche
*/
get_header();
?>
        <div class="slogan slogan__sections">
            <p class="slogan__line slogan__line--one">Des soins de</p>
            <p class="slogan__line slogan__line--two">qualité</p>
            <p class="slogan__line slogan__line--three">pour tous</p>
            <a class="slogan__toggleSections link open" href="">Seulement les titres</a>
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
            <h1 class="title title__page">Comment ça marche</h1>

            <?php if( have_rows('howItWorksSections') ): ?>
                <?php while ( have_rows('howItWorksSections') ) : the_row(); ?>
                    <input class="mainSection__checkbox" type="checkbox" id="toggle_<?php echo csia_get_id_from_title( get_sub_field_object( 'howItWorksSectionsTitle' )[ 'value' ] ); ?>">
                    <section class="mainSection" id="section_<?php echo csia_get_id_from_title( get_sub_field_object( 'howItWorksSectionsTitle' )[ 'value' ] ); ?>">
                        <h2 class="hidden"><?php the_sub_field( 'howItWorksSectionsTitle' ) ?></h2>
                        <label class="mainSection__label" for="toggle_<?php echo csia_get_id_from_title( get_sub_field_object( 'howItWorksSectionsTitle' )[ 'value' ] ); ?>">
                            <span class="mainSection__title title title__section">
                                <?php the_sub_field( 'howItWorksSectionsTitle' ) ?>
                            </span>
                        </label>
                        <div class="mainSection__content">
                            <div class="mainSection__subTitle">
                                <?php the_sub_field( 'howItWorksSectionsIntro' ); ?>
                            </div>

                            <?php if( have_rows('howItWorksSectionsContent') ): ?>
                                <?php while ( have_rows('howItWorksSectionsContent') ) : the_row(); ?>
                                    <div class="mainSection__textBlock box">
                                        <?php the_sub_field('howItWorksSectionsBlock'); ?>
                                    </div>
                                    <div class="mainSection__legend">
                                        <?php the_sub_field( 'howItWorksSectionsBlockLegend' ); ?>
                                    </div>
                            <?php endwhile; endif; ?>

                            <div class="mainSection__legend">
                                <?php the_sub_field( 'howItWorksSectionsLegend' ); ?>
                            </div>
                            <?php if( have_rows('howItWorksSectionsLink') ): ?>
                                <?php while ( have_rows('howItWorksSectionsLink') ) : the_row(); ?>
                                <div class="button__container">
                                    <a class="button" href="<?php the_sub_field( 'howItWorksSectionsLinkUrl' ) ?>"><?php the_sub_field( 'howItWorksSectionsLinkTitle' ); ?></a>
                                </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </section>
            <?php endwhile; endif; ?>

        </div>
    </div>
<?php get_footer();
