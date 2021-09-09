<?php
<<<<<<< HEAD
<<<<<<< HEAD
require __DIR__ . '/database/database.php';
$authDB = require_once './database/security.php';
$currentUser = $authDB->isLoggedin();
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
$articleDB = require_once __DIR__ . '/database/models/ArticleDB.php';
$articles = $articleDB->fetchAll();
$categories = [];

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$selectedCat = $_GET['cat'] ?? '';

if (count($articles)) {
  $cattmp = array_map(fn ($a) => $a['category'],  $articles);
  $categories = array_reduce($cattmp, function ($acc, $cat) {
    if (isset($acc[$cat])) {
      $acc[$cat]++;
    } else {
      $acc[$cat] = 1;
    }
    return $acc;
  }, []);
  $articlePerCategories = array_reduce($articles, function ($acc, $article) {
    if (isset($acc[$article['category']])) {
<<<<<<< HEAD
<<<<<<< HEAD
      $acc[$article['category']] = [...$acc[$article['category']], $article];
=======
      $acc[$article['category']][] = $article;
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
      $acc[$article['category']][] = $article;
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
    } else {
      $acc[$article['category']] = [$article];
    }
    return $acc;
  }, []);
}
<<<<<<< HEAD
<<<<<<< HEAD


?>



=======
?>

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
?>

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php require_once 'includes/head.php' ?>
  <link rel="stylesheet" href="/public/css/index.css">
  <title>Blog</title>
</head>

<body>
  <div class="container">
    <?php require_once 'includes/header.php' ?>
    <div class="content">
      <div class="newsfeed-container">
<<<<<<< HEAD
<<<<<<< HEAD
        <ul class="category-container">
          <li class=<?= $selectedCat ? '' : 'cat-active' ?>><a href="/">Tous les articles <span class="small">(<?= count($articles) ?>)</span></a></li>
          <?php foreach ($categories as $catName => $catNum) : ?>
            <li class=<?= $selectedCat ===  $catName ? 'cat-active' : '' ?>><a href="/?cat=<?= $catName ?>"> <?= $catName ?><span class="small">(<?= $catNum ?>)</span> </a></li>
          <?php endforeach; ?>
        </ul>
=======
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
        <div class="category-container">
          <ul class="category-container">
            <li class=<?= $selectedCat ? '' : 'cat-active' ?>>
              <a href="/">Tous les articles <span class="small">(<?= count($articles) ?>)</span></a>
            </li>
            <?php foreach ($categories as $catName => $catNum) : ?>
              <li class=<?= $selectedCat ===  $catName ? 'cat-active' : '' ?>>
                <a href="/?cat=<?= $catName ?>"> <?= $catName ?><span class="small">(<?= $catNum ?>)</span> </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
<<<<<<< HEAD
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
        <div class="newsfeed-content">
          <?php if (!$selectedCat) : ?>
            <?php foreach ($categories as $cat => $num) : ?>
              <h2><?= $cat ?></h2>
              <div class="articles-container">
                <?php foreach ($articlePerCategories[$cat] as $a) : ?>
<<<<<<< HEAD
<<<<<<< HEAD
                  <a href="/show-article.php?id=<?= $a['id'] ?>" class="article block">
=======
                  <a  href="/show-articles.php?id=<?= $a['id'] ?>" class="article block">
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
                  <a  href="/show-articles.php?id=<?= $a['id'] ?>" class="article block">
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
                    <div class="overflow">
                      <div class="img-container" style="background-image:url(<?= $a['image'] ?>"></div>
                    </div>
                    <h3><?= $a['title'] ?></h3>
<<<<<<< HEAD
<<<<<<< HEAD
                    <?php if ($a['author']) : ?>
                      <div class="article-author">
                        <p><?= $a['firstname'] . ' ' . $a['lastname']  ?></p>
                      </div>
                    <?php endif; ?>
                  </a>
=======
                </a>
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
                </a>
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
                <?php endforeach; ?>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
            <h2><?= $selectedCat ?></h2>
            <div class="articles-container">
              <?php foreach ($articlePerCategories[$selectedCat] as $a) : ?>
<<<<<<< HEAD
<<<<<<< HEAD
                <a href="/show-article.php?id=<?= $a['id'] ?>" class="article block">
=======
                <a href="/show-articles.php?id=<?= $a['id'] ?>" class="article block">
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
                <a href="/show-articles.php?id=<?= $a['id'] ?>" class="article block">
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
                  <div class="overflow">
                    <div class="img-container" style="background-image:url(<?= $a['image'] ?>"></div>
                  </div>
                  <h3><?= $a['title'] ?></h3>
                </a>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
  </div>

</body>

</html>