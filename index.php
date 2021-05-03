<?php
include './_partials/template/header.php';
?>


<main>
  <?php

  foreach ($dischi as $disco => $info) {
    echo "<h1>" . "Disco n." .($disco + 1) . "</h1>";
    echo "<h3>" . $info["author"] . "</h3>";
    echo "<p>" . $info["title"] . "</p>";
    echo "<p>" . $info["year"] . "</p>";
    echo "<p>" . $info["genre"] . "</p>";
    echo $info["poster"];
  }
  ?>
</main>


<?php
include './_partials/template/footer.php';
?>
