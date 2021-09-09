<?php

$dns = 'mysql:host=localhost;dbname=blog';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dns, $user, $pwd, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
  ]);
} catch (PDOException $e) {
<<<<<<< HEAD
<<<<<<< HEAD
  throw new Exception($e->getMessage());
}

return $pdo;
=======
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  echo "ERROR : " . $e->getMessage();
}

return $pdo;
<<<<<<< HEAD
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
