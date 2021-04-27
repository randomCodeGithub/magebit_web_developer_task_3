<!-- Get header file -->
<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<main>
    <section class="subscribe">
        <!-- Get navigation file -->
        <?php require_once(VIEW_ROOT . '/templates/navigation.php');  ?>

        <div class="subscribe__area">
            <div id="subscribe">
                <!-- SUCCESS BLOCK -->
                <div class="success"><img src="<?php echo BASE_ROOT ?> /assets/img/cup.svg">
                    <h2>Thanks for subscribing!</h2>
                    <p class="description">You have successfully subscribed to our email listing. Check your email for the discount code.</p>
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