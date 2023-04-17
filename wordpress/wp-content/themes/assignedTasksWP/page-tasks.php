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
    <h1 class="title">
        <?= get_the_title(); ?>
    </h1>
    <ul class="list-notes">
        <li class="note-item">
            <div class="head-note">
                <h4>Cooking note</h4>
                <div class="exp"></div>
            </div>
            <div class="head-details">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptate nihil? Ullam consectetur quae corporis?</p>
            </div>
        </li>
    </ul>
    <div class="process-and-done-tasks">
        <div class="wrapper">
        <div class="new-task tasks">
            X
        </div>
        <div class="process-tasks tasks">
            <h3>In process</h3>
        </div>
        <div class="done-tasks tasks">
        <h3>Done tasks</h3>
        </div>
        </div>
    </div>
    <div href="" class="apelsin"></div>
</main>
<?php get_footer(); ?>