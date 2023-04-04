<?php get_header(); ?>
<main class="main">
    <div class="container">
        <h1><span class="orange-letter">W</span>elcome to <span class="orange-letter">AssignedTasksWP</span> project!</h1>
        <p><a href="<?= wp_registration_url(); ?>">Register now</a> and try use this tool for your time management!</p>
        <div class="btns-wrap">
        <a href="<?= wp_login_url(); ?>" class="btn btn-login">Login in</a>
        <a href="<?= wp_registration_url(); ?>" class="btn btn-register">Register</a>
        </div>
    </div>
    <div class="quote">
        <p><span class="orange-letter">Today</span> is your opportunity to build the tomorrow you want</p>
    </div>
    <div class="apelsin"></div>
</main>
<?php get_header(); ?>