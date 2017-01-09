<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name ="viewport" content="width=device-width,initial-scale1">
    <meta name="author" content="Mucht - Mathieu Claessens">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/styles.css'; ?>" media="screen" title="no title">

    <title><?php the_title();?> - <?php bloginfo( 'name' ); ?></title>
</head>
<body>
    <header class="header">
        <div class="clear">
            <a href="<?php echo esc_url( home_url() ); ?>">
                <img class="header__logo" src="<?php echo get_template_directory_uri() . '/assets/img/CSI-logoNoText.png'; ?>" alt="Lien vers l'accueil" width="210" height="210"/>
            </a>
            <p class="header__title">Centre de Santé Intégré d'Angleur</p>
        </div>
