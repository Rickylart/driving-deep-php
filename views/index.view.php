<!-- including the head -->
<?php require_once ('partials/head.php'); ?>
<!-- including the navbar -->
<?php require_once ('partials/nav.php'); ?>
<!-- including the banner -->
<?php require_once ('partials/banner.php'); ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <h1>Welcome to the Home page</h1>
    <hr/>
    My Database data
    <hr/>

    <?php
    
    foreach ($posts as $key => $value) {
      echo "<li>".$value['title']."</li>";
    }
    
    ?>
  </div>
</main>

<!-- including the footer -->
<?php require_once ('partials/footer.php'); ?>