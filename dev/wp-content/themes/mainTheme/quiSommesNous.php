<?php
/*
        Template Name: Qui sommes-nous
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
            <h1 class="title title__page">Qui sommes-nous</h1>
            <input class="mainSection__checkbox" type="checkbox" id="toggle-section-ourTeam">
            <section class="mainSection">
                <h2 class="hidden">Notre équipe</h2>
                <label class="mainSection__label" for="toggle-section-ourTeam">
                    <span class="mainSection__title title title__section">
                        Notre équipe
                    </span>
                </label>
                <div class="mainSection__content">
                    <div class="mainSection__textBlock box">
                        <?php the_field('ourTeam'); ?>
                    </div>
                    <div class="button__container">
                        <a class="button" href="<?php the_field( 'ourTeamLink' ) ?>">Découvrez notre équipe au complet</a>
                    </div>
                </div>
            </section>
            <input class="mainSection__checkbox" type="checkbox" id="toggle-section-working">
            <section class="mainSection">
                <h2 class="hidden">Fonctionnement</h2>
                <label class="mainSection__label" for="toggle-section-working">
                    <span class="mainSection__title title title__section">
                        Fonctionnement
                    </span>
                </label>
                <div class="mainSection__content">
                    <div class="mainSection__subTitle">
                        <?php the_field( 'workingIntro' ); ?>
                    </div>
                    <?php if( have_rows('workingContent') ): ?>
                        <?php while ( have_rows('workingContent') ) : the_row(); ?>
                            <div class="mainSection__textBlock box">
                                <?php the_sub_field( 'workingContentBlock' ); ?>
                            </div>
                    <?php endwhile; endif; ?>

                    <div class="mainSection__legend">
                        <?php the_field( 'workingLegend' ); ?>
                    </div>
                    <div class="button__container">
                        <a class="button" href="<?php the_field( 'workingLink' ); ?>">Je suis malade hors des heures d'ouverture</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php get_footer();
