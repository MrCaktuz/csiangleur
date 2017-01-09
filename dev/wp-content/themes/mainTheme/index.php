<?php
/*
        Template Name: Homepage
*/
get_header();
?>
        <div class="slogan slogan__home">
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
        <img class="header__photo" src="<?php echo get_template_directory_uri() . '/assets/img/house.jpg'; ?>" alt="Photo de la maison médicale" width="1280" height="544"/>
    </header>
    <div class="content wrap clear">
        <div class="hiddenFooter">
            <h1 class="title title__page hidden">Centre de santé intégré d'Angleur</h1>
            <section class="card card__home">
                <h2 class="card__title card__title--newsletter">Newsletter</h2>
                <p class="card__text">
                    <?php the_field( 'newsletterDescription' ); ?>
                </p>
                <div class="button__container">
                    <a class="button" href="<?php the_field( 'newsletterLink' ); ?>">Nous suivre</a>
                </div>
            </section>
            <section class="card__home card--schedule card">
                <h2 class="card__title card__title--schedule">Horaire</h2>
                <div class="schedule">
                    <ol class="schedule__col schedule__col--days">
                        <li class="schedule__days">Lundi</li>
                        <li class="schedule__days">Mardi</li>
                        <li class="schedule__days">Mercredi</li>
                        <li class="schedule__days">Jeudi</li>
                        <li class="schedule__days">Vendredi</li>
                        <li class="schedule__days">Samedi</li>
                        <li class="schedule__days">Dimanche</li>
                    </ol>
                    <ol class="schedule__col schedule__col--times">
                        <li class="schedule__times"><?php the_field( 'lundi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'mardi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'mercredi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'jeudi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'vendredi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'samedi' ); ?></li>
                        <li class="schedule__times"><?php the_field( 'dimanche' ); ?></li>
                    </ol>
                </div>
            </section>
            <section class="card__home card">
                <h2 class="card__title card__title--contact">Coordonnées</h2>
                <div itemscope itemtype="https://schema.org/Organization">
                    <div itemscope itemtype="https://schema.org/PostalAddress" itemprop="address">
                        <p class="addressLine addressLine--location"><span itemprop="postOfficeBoxNumber"><?php the_field( 'door_number' ); ?></span>, <span itemprop="streetAddress"><?php the_field( 'street' ); ?></span></p>
                        <p class="addressLine"><span itemprop="postalCode"><?php the_field( 'postal_code' ); ?></span> <span itemprop="addressLocality"><?php the_field( 'city' ); ?></span></p>
                        <p class="addressLine" itemprop="addressCountry"><?php the_field( 'country' ); ?></p>
                    </div>
                    <p class="addressLine addressLine--phone" itemprop="telephone">02 880 65 67</p>
                    <a class="addressLine addressLine--email link" href="#" itemprop="email">contact@csiangleur.be</a>
                </div>
                <div class="button__container">
                    <a class="button" href="./?page_id=20#formSection">Nous contacter</a>
                </div>
            </section>
        </div>
    </div>
<?php get_footer();
