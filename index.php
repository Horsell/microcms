
    <?php
      $bdd = new PDO('mysql:host=localhost;dbname=microcms;charset=utf8', 'horsell', 'Integra0@@');
      $articles = $bdd->query('select * from t_article order by art_id desc');

require 'model.php';
$articles = getArticles();
require 'view.php';