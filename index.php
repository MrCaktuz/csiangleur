<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site professionnel de Sophie Minet neuropsychologue. Reprend les informations les plus importantes au sujet de son travail et de ce qu'elle propose à ses patients.">
        <meta name="keywords" content="Sophie, Minet, Neuropsychologue, Ciney, Hamois, Louvière, Schaltin, scéances, bilan, prise en charge, test, évaluation, fonctions intellectuelles, trouble de l'attention, mnésique, enfants, Psychologue">
        <meta name="author" content="Mathieu Claessens">
        <meta name ="viewport" content="width=device-width,initial-scale1">
        <link rel="stylesheet" href="./css/styles.css">
        <title>Contact form</title>
    </head>
    <body>
        <section class="section contact clear" id="contact" itemscope itemtype="http://schema.org/Person">
            <h2 class="section__title">Formulaire</h2>
            <form class="form mainSection__content" action="contact.php" method="POST" id="contactForm">
                <fieldset class="form__group">
                    <label class="form__label" for="name">Nom</label>
                    <input type="text" name="name" value="<?php if( isset( $_SESSION["data"]["name"] ) ) : ?><?php echo $_SESSION["data"]["name"]; ?><?php endif; ?>" class="form__input" id="name" placeholder="Votre nom ici"/>
                    <?php if( isset( $_SESSION['errors']['name'] ) ) : ?>
                        <div class="wrapFromFeedback">
                            <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['name']; ?></p>
                        </div>
                    <?php endif; ?>
                </fieldset>
                <fieldset class="form__group">
                    <label class="form__label" for="email">E-mail</label>
                    <input type="email" name="email" value="<?php if( isset( $_SESSION["data"]["email"] ) ) : ?><?php echo $_SESSION["data"]["email"]; ?><?php endif; ?>" class="form__input" id="email" placeholder="Votre adresse mail ici" />
                    <?php if( isset( $_SESSION['errors']['email'] ) ) : ?>
                        <div class="wrapFromFeedback">
                            <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['email']; ?></p>
                        </div>
                    <?php endif; ?>
                </fieldset>
                <fieldset class="form__group">
                    <label class="form__label form__label--msg" for="message">Message</label>
                    <textarea name="message" cols="40" rows="10" class="form__input form__input--textarea" id="message" placeholder="Votre message ici"><?php if( isset( $_SESSION["data"]["message"] ) ) : ?><?php echo $_SESSION["data"]["message"]; ?><?php endif; ?></textarea>
                    <?php if( isset( $_SESSION['errors']['message'] ) ) : ?>
                        <div class="wrapFromFeedback">
                            <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['message']; ?></p>
                        </div>
                    <?php endif; ?>
                </fieldset>
                <fieldset class="form__group">
                    <input type="submit" value="Envoyer" class="wpcf7-form-control wpcf7-submit form__submit form__input" />
                </fieldset>
                <div class="wrapFromFeedback">
                    <?php if( isset( $_SESSION['errors'] ) ) : ?>
                        <p class="formFeedback formFeedback--fail"><?php echo $_SESSION['errors']['summary']; ?></p>
                    <?php endif; ?>
                    <?php if( isset( $_SESSION['success'] ) ) : ?>
                        <p class="formFeedback formFeedback--success"><?php echo $_SESSION['success']; ?></p>
                    <?php endif; ?>
                </div>
                <?php var_dump( $_SESSION ); ?>
            </form>
        </section>
    </body>
</html>
<?php
    unset( $_SESSION['errors'] );
    unset( $_SESSION['success'] );
    unset( $_SESSION['data'] );
?>
