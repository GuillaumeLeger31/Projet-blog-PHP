<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

$pdo = require_once __DIR__ . '/../database.php';

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======

$pdo = require_once __DIR__ . '/../database.php';

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
class ArticleDB
{
  private PDOStatement $statementCreateOne;
  private PDOStatement $statementUpdateOne;
  private PDOStatement $statementDeleteOne;
  private PDOStatement $statementReadOne;
  private PDOStatement $statementReadAll;
<<<<<<< HEAD
<<<<<<< HEAD
  private PDOStatement $statementReadUserAll;
=======

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======

>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1

  function __construct(PDO $pdo)
  {
    $this->statementCreateOne = $pdo->prepare('
      INSERT INTO article (
        title,
        category,
        content,
<<<<<<< HEAD
<<<<<<< HEAD
        image,
        author
=======
        image
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
        image
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
      ) VALUES (
        :title,
        :category,
        :content,
<<<<<<< HEAD
<<<<<<< HEAD
        :image,
        :author
=======
        :image
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
        :image
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
      )
    ');
    $this->statementUpdateOne = $pdo->prepare('
      UPDATE article
      SET
        title=:title,
        category=:category,
        content=:content,
<<<<<<< HEAD
<<<<<<< HEAD
        image=:image,
        author=:author
      WHERE id=:id
    ');
    $this->statementReadOne = $pdo->prepare('SELECT article.*, user.firstname, user.lastname FROM article LEFT JOIN user ON article.author = user.id WHERE article.id=:id');
    $this->statementReadAll = $pdo->prepare('SELECT article.*, user.firstname, user.lastname FROM article LEFT JOIN user ON article.author = user.id');
    $this->statementDeleteOne = $pdo->prepare('DELETE FROM article WHERE id=:id');
    $this->statementReadUserAll = $pdo->prepare('SELECT * FROM article WHERE author=:authorId');
  }


  public function fetchAll(): array
=======
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
        image=:image
      WHERE id=:id
    ');
    $this->statementReadOne = $pdo->prepare('SELECT * FROM article WHERE id=:id');
    $this->statementReadAll = $pdo->prepare('SELECT * FROM article');
    $this->statementDeleteOne = $pdo->prepare('DELETE FROM article WHERE id=:id');
  }


  public function fetchAll()
<<<<<<< HEAD
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  {
    $this->statementReadAll->execute();
    return $this->statementReadAll->fetchAll();
  }

<<<<<<< HEAD
<<<<<<< HEAD
  public function fetchOne(string $id): array
=======
  public function fetchOne(string $id)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
  public function fetchOne(string $id)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  {
    $this->statementReadOne->bindValue(':id', $id);
    $this->statementReadOne->execute();
    return $this->statementReadOne->fetch();
  }

<<<<<<< HEAD
<<<<<<< HEAD
  public function deleteOne(string $id): string
=======
  public function deleteOne(string $id)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
  public function deleteOne(string $id)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  {
    $this->statementDeleteOne->bindValue(':id', $id);
    $this->statementDeleteOne->execute();
    return $id;
  }

<<<<<<< HEAD
<<<<<<< HEAD
  public function createOne($article): array
=======
  public function createOne($article)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
  public function createOne($article)
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  {
    $this->statementCreateOne->bindValue(':title', $article['title']);
    $this->statementCreateOne->bindValue(':content', $article['content']);
    $this->statementCreateOne->bindValue(':category', $article['category']);
    $this->statementCreateOne->bindValue(':image', $article['image']);
<<<<<<< HEAD
<<<<<<< HEAD
    $this->statementCreateOne->bindValue(':author', $article['author']);
    $this->statementCreateOne->execute();
    return $this->fetchOne($this->pdo->lastInsertId());
  }

  public function updateOne($article): array
=======
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
    $this->statementCreateOne->execute();
  }

  public function updateOne($article)
<<<<<<< HEAD
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
  {
    $this->statementUpdateOne->bindValue(':title', $article['title']);
    $this->statementUpdateOne->bindValue(':content', $article['content']);
    $this->statementUpdateOne->bindValue(':category', $article['category']);
    $this->statementUpdateOne->bindValue(':image', $article['image']);
    $this->statementUpdateOne->bindValue(':id', $article['id']);
<<<<<<< HEAD
<<<<<<< HEAD
    $this->statementUpdateOne->bindValue(':author', $article['author']);
    $this->statementUpdateOne->execute();
    return $article;
  }

  public function fetchUserArticle(string $authorId): array
  {
    $this->statementReadUserAll->bindValue(':authorId', $authorId);
    $this->statementReadUserAll->execute();
    return $this->statementReadUserAll->fetchAll();
  }
}

=======
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
    $this->statementUpdateOne->execute();
    return $article;
  }
}


<<<<<<< HEAD
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
=======
>>>>>>> 19a2bb679bbefff182dc3b6e408a93909abe36a1
return new ArticleDB($pdo);