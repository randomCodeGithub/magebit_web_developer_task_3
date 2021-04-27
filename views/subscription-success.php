<!-- Get header file -->
<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<main>
    <section class="subscribe">
        <!-- Get navigation file -->
        <?php require_once(VIEW_ROOT . '/templates/navigation.php');  ?>

        <div class="subscribe__area">
            <div id="subscribe">
                <!-- SUCCESS BLOCK -->
                <div class="success" style="position:relative"><img src="<?php echo BASE_ROOT ?> /assets/img/cup.svg">
                    <h2>Thanks for subscribing!</h2>
                    <p class="description">You have successfully subscribed to our email listing. Check your email for the discount code.</p>
                    <p style="position: absolute; width: 100%; text-align:center; bottom: -30px; font-family: Arial, Helvetica, sans-serif;">
                        <a style="text-decoration: none; color:green;" href="<?php echo BASE_ROOT; ?>/subscriber-list" target="_blank">SUBSCRIBER LIST</a>
                    </p>
                </div>
                <!-- SOCIAL ICONS BLOCK -->
                <?php require_once(VIEW_ROOT . '/templates/social-icons.php');  ?>
            </div>
        </div>
    </section>
    <div class="bg-image"></div>
</main>

<!-- Get footer file -->
<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>