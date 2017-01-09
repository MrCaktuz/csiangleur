<footer class="footer">
    <div class="clear">
        <section class="footerSection">
            <h2 class="title title__section">
                Menu
            </h2>
            <ol class="footerSection__list">
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Accueil
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Qui sommes-nous
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Comment ça marche
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Fiches info
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Contact
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Liens utiles
                    </a>
                </li>
            </ol>
        </section>
        <section class="footerSection">
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
        <section class="footerSection">
            <h2 class="title title__section">
                Autres liens
            </h2>
            <ol class="footerSection__list">
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Nous contacter
                    </a>
                </li>
                <li class="footerSection__listElt">
                    <a class="link" href="#">
                        Nous suivre
                    </a>
                </li>
            </ol>
        </section>
    </div>
    <small class="footerSection__copyrights">&copy; csi angleur 2017 - site réalisé par <a class="footerSection__copyrights--link link" href="http://mathieuclaessens.be">Mathieu Claessens</a></small>
</footer>
<!-- gMap key => AIzaSyBUjvsQNMd_bcP-ME-xWqckXQISl4ogzSc -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUjvsQNMd_bcP-ME-xWqckXQISl4ogzSc"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/scripts/jquery.min.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/scripts/gmap.js'; ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/scripts/scripts.js'; ?>"></script>
</body>
</html>
<?php
    unset( $_SESSION['errors'] );
    unset( $_SESSION['success'] );
    unset( $_SESSION['data'] );
?>
