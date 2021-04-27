<!-- Get header file -->
<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>

<main>
    <section class="subscribe">

        <!-- Get navigation file -->
        <?php require_once(VIEW_ROOT . '/templates/navigation.php');  ?>

        <div class="subscribe__area">
            <div id="subscribe">
                <h2>Subscribe to newsletter</h2>
                <p class="description">Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
                <!-- FORM BLOCK -->
                <form id="subscription" method="POST" action="<?php echo HOME_ROOT; ?>/subscription" onsubmit="return validate()" name="subscribe">
                    <div class="input-email-area" style="position: relative;">
                        <input id="subscriber-email" type="text" name="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Type your email address here…">
                        <button id="send-email" name="send-email" type="submit"><i class="icon-arrow-right"></i></button>

                        <!-- ERROR BLOCK -->
                        <div class="error-messages-area">
                            <div id="email-errors">
                                <?php if (isset($errors['message'])) echo $errors['message']; ?>
                            </div>
                            <div id="check-box-error">
                                <?php if (isset($errors['check'])) echo $errors['check']; ?>
                            </div>
                        </div>
                    </div>
                    <!-- CUSTOM CHECKBOX BLOCK -->
                    <div class="checkbox">
                        <label>
                            <input id="terms" type="checkbox" name="terms" value="">
                            <span class="custom-checkbox"><i class="icon-check"></i></span>
                            <p>
                                I agree to <a href="#">terms of service</a>
                            </p>
                        </label>
                    </div>

                </form>
                <!-- SOCIAL ICON BLOCK -->
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