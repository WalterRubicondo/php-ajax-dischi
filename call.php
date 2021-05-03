<?php
  include './_partials/dati.php';

  header('Content-Type: application/json');

  echo json_encode($dischi);

?>