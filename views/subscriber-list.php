<!-- Get header file -->
<?php require_once(VIEW_ROOT . '/templates/header.php');  ?>
<main class="subscriber-list">
    <a href="<?php echo BASE_ROOT; ?>"><i class="icon-arrow-right"></i></a>
    <!-- ORDER FORMS -->
    <div class="order">
        <form action="<?php echo BASE_ROOT ?>/subscriber-list" method="POST">
            <button name="order-by-name">Order by name</button>
        </form>
        <form action="<?php echo BASE_ROOT ?>/subscriber-list" method="POST">
            <button name="order-by-date">Order by date</button>
        </form>
        <form action="<?php echo BASE_ROOT ?>/subscriber-list" method="POST">
            <button name="default">Set default state</button>
        </form>
    </div>
    <!-- SEARCH BLOCK -->
    <div class="search">
        <form action="<?php echo BASE_ROOT ?>/subscriber-list" method="POST">
            <input type="text" name="name">
            <button name="search-by-name">Search</button>
        </form>
    </div>
    <!-- PROVIDER BLOCK -->
    <div class="providers">
        <?php if (!empty($subscribers)) : ?>
            <?php foreach ($providers as $provider) : ?>

                <form action="<?php echo BASE_ROOT ?>/subscriber-list" method="POST">
                    <input type="hidden" name="name" value="<?php echo $provider; ?>">
                    <?php
                    if (isset($_POST['search-provider'])) {
                        if ($provider == $providerName) {
                            $class = 'active';
                        } else {
                            $class = '';
                        }
                    }
                    ?>
                    <button class="<?php if (isset($class)) echo $class; ?>" name="search-provider"><?php echo $provider; ?></button>
                </form>

            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <!-- SUBCRIBER TABLE LIST -->
    <table>
        <!-- TABLE HEAD -->
        <thead>
            <tr>
                <th>email</th>
                <th>date</th>
                <th></th>
            </tr>
        </thead>
        <!-- TABLE BODY -->
        <tbody>
            <!-- check for subscriber existing -->
            <?php if (!empty($subscribers)) : ?>

                <!-- render subscriber -->
                <?php foreach ($subscribers as $subscriber) : ?>

                    <tr>
                        <td><?php echo $subscriber['email']; ?></td>
                        <td><?php echo $subscriber['subscription_date'] ?></td>
                        <td>
                            <!-- SUBSCRIBER DELETE FORM -->
                            <form method="POST" action="<?php echo BASE_ROOT ?>/subscriber-list/delete">
                                <input type="hidden" name="sudcriber-id" value="<?php echo $subscriber['id'] ?>">
                                <button name="delete-subscriber">Delete</button>
                            </form>
                        </td>
                    </tr>

                <?php endforeach; ?>

                <!-- if subscriber array is empty -->
            <?php else : ?>
                <tr>
                    <td colspan="3">
                        <h1>No subscribers</h1>
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</main>

<!-- Get footer file -->
<?php require_once(VIEW_ROOT . '/templates/footer.php');  ?>
