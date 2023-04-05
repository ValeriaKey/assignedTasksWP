<?php get_header(); ?>
<main class="main">
    <div class="greeting-box-and-logg-out">
        <p>
        <?php 
        if(is_user_logged_in()) {
            $currentUser = wp_get_current_user();
            echo "Achive your goals, " . $currentUser->user_login . "!";
        }
        ?>
        </p>
        <a href="<?= wp_logout_url(); ?>" class="exit">
            X
        </a>
    </div>
    <div href="" class="apelsin"></div>
</main>
<?php get_header(); ?>