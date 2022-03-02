<?php

  require __DIR__ . '/../milestone1/data.php';

    header('Content-Type: application/json');
    echo json_encode($albums);