<?php
<<<<<<< HEAD
<<<<<<< HEAD
require_once __DIR__ . '/database/database.php';
$authDB = require_once __DIR__ . '/database/security.php';
$currentUser = $authDB->isLoggedin();

=======
$articleDB = require_once __DIR__ . '/database/models/ArticleDB.php';
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
$articleDB = require_once __DIR__ . '/database/models/ArticleDB.php';
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$id = $_GET['id'] ?? '';
if ($id) {
  $articleDB->deleteOne($id);
}
header('Location: /');
