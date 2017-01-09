<?php
/*
        Template Name: Contact
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
    <div class="content">
        <div class="hiddenFooter">
            <h1 class="title title__page">Nous contacter</h1>
            <input class="mainSection__checkbox" type="checkbox" id="toggle-sectionFindUs">
            <section class="mainSection">
                <h2 class="hidden">Nous trouver</h2>
                <label class="mainSection__label" for="toggle-sectionFindUs">
                    <span class="title title__section mainSection__title">
                        Nous trouver
                    </span>
                </label>
                <div class="mainSection__content clear">
                    <div class="mainSection__cols mainSection__cols--info">
                        <section class="mainSection__contact mainSection__contact--address">
                            <h2 class="title title__section">Coordonnées</h2>
                            <div itemscope itemtype="https://schema.org/Organization">
                                <div itemscope itemtype="https://schema.org/PostalAddress" itemprop="address">
                                    <p class="addressLine addressLine--location"><span itemprop="postOfficeBoxNumber">48</span>, <span itemprop="streetAddress">rue vaudrée</span></p>
                                    <p class="addressLine"><span itemprop="postalCode">4000</span> <span itemprop="addressLocality">Liège</span></p>
                                </div>
                                <p class="addressLine addressLine--phone" itemprop="telephone">02 880 65 67</p>
                                <a class="addressLine addressLine--email link" href="#" itemprop="email">contact@csiangleur.be</a>
                            </div>
                        </section>
                        <section class="mainSection__contact mainSection__contact--schedule">
                            <h2 class="title title__section">Horaire</h2>
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
                    </div>
                    <div class="mainSection__cols mainSection__cols--maps">
                        <section class="mainSection__maps">
                            <h2 class="title title__section">Nous rendre visite</h2>
                            <img class="mainSection__maps--img" src="<?php echo get_template_directory_uri() . '/assets/img/house.jpg'; ?>" alt="Photo de la maison médicale" width="1280" height="544"/>
                            <div class="mainSection__maps--gmap" id="gmap"></div>
                        </section>
                    </div>
                </div>
            </section>
            <input class="mainSection__checkbox" type="checkbox" id="toggle-sectionTeam">
            <section class="mainSection" id="team">
                <h2 class="hidden">Notre équipe</h2>
                <label class="mainSection__label" for="toggle-sectionTeam">
                    <span class="mainSection__title title title__section">
                        Notre équipe
                    </span>
                </label>
                <div class="mainSection__content mainSection__content--idCard clear">
                    <?php
                        $posts = new WP_QUERY( [ 'post_type' => 'membres' ] );
                        if ( $posts -> have_posts() ): while ( $posts -> have_posts() ): $posts -> the_post();
                    ?>
                        <section class="idCard box">
                            <div class="idCard__picWrap">
                                <img class="idCard__picture box" src="<?php the_post_thumbnail_url(); ?>" alt="" />
                            </div>
                            <div class="wrap_idCard">
                                <h3 class="idCard__title">
                                    <?php echo the_title(); ?>
                                    <span class="idCard__function">
                                        <?php the_field( 'memberFunction' ); ?>
                                    </span>
                                </h3>
                                <section class="idCard__shedule">
                                    <h2 class="idCard__title">Horaire</h2>
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
                            </div>
                        </section>
                    <?php endwhile; endif; ?>
                </div>
            </section>
            <input class="mainSection__checkbox" type="checkbox" id="toggle-sectionForm">
            <section class="mainSection mainSection--lastClear" id="contact">
                <h2 class="hidden">Nous contacter</h2>
                <label class="mainSection__label" for="toggle-sectionForm">
                    <span class="mainSection__title title title__section">
                        Nous contacter
                    </span>
                </label>
                <form class="form mainSection__content" action="<?php echo get_template_directory_uri() . '/formValidation.php'; ?>" method="POST" id="contactForm">
                    <fieldset class="form__group">
                        <label class="form__label" for="name">Nom</label>
                        <input type="text" name="name" value="<?php if( isset( $_SESSION["data"]["name"] ) ) : ?><?php echo $_SESSION["data"]["name"]; ?><?php endif; ?>" class="form__input" id="name" placeholder="Votre nom ici"/>
                        <?php if( isset( $_SESSION['errors']['name'] ) ) : ?>
                            <div class="wrapFormFeedback">
                                <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['name']; ?></p>
                            </div>
                        <?php endif; ?>
                    </fieldset>
                    <fieldset class="form__group">
                        <label class="form__label" for="email">E-mail</label>
                        <input type="email" name="email" value="<?php if( isset( $_SESSION["data"]["email"] ) ) : ?><?php echo $_SESSION["data"]["email"]; ?><?php endif; ?>" class="form__input" id="email" placeholder="Votre adresse mail ici" />
                        <?php if( isset( $_SESSION['errors']['email'] ) ) : ?>
                            <div class="wrapFormFeedback">
                                <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['email']; ?></p>
                            </div>
                        <?php endif; ?>
                    </fieldset>
                    <fieldset class="form__group">
                        <label class="form__label form__label--msg" for="message">Message</label>
                        <textarea name="message" cols="40" rows="10" class="form__input form__input--textarea" id="message" placeholder="Votre message ici"><?php if( isset( $_SESSION["data"]["message"] ) ) : ?><?php echo $_SESSION["data"]["message"]; ?><?php endif; ?></textarea>
                        <?php if( isset( $_SESSION['errors']['message'] ) ) : ?>
                            <div class="wrapFormFeedback">
                                <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['message']; ?></p>
                            </div>
                        <?php endif; ?>
                    </fieldset>
                    <fieldset class="form__group">
                        <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit form__submit form__input" />
                    </fieldset>
                    <div class="wrapFormFeedback">
                        <?php if( isset( $_SESSION['errors'] ) ) : ?>
                            <p class="formFeedback formFeedback--summary"><?php echo $_SESSION['errors']['summary']; ?></p>
                        <?php endif; ?>
                        <?php if( isset( $_SESSION['success'] ) ) : ?>
                            <p class="formFeedback formFeedback--success"><?php echo $_SESSION['success']; ?></p>
                        <?php endif; ?>
                    </div>
                </form>
            </section>
        </div>
    </div>
<?php get_footer();
