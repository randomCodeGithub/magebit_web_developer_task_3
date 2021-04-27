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
                <div class="social">

                    <a href="#" class="social__block facebook">
                        <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social__block insta">
                        <i class="icon-instagram"></i>
                    </a>
                    <a href="#" class="social__block twitter">
                        <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social__block youtube">
                        <i class="icon-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-image"></div>
</main>

<!-- Get footer file -->
<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>