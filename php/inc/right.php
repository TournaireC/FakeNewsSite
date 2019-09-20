<main class="right"> 
        <article>
            <h2 class="right__title"><?php echo $article['titre'] ?></h2>
            <div class="textArticle">
                <a href="" class="post__category post__category--color-<?php echo $article['categorie'] ?>"><?php echo $article['categorie'] ?></a>
                <div class="post__meta">
                <img class="post__author-icon" src="../images/icon-<?php  echo $article['icon'] ?>.png" alt="">
                <strong class="post__author"><?php echo $article['auteur'] ?></strong>
                <time datetime="2018-03-27">le <?php echo $article['date'] ?></time>
                </div>
                <p><?php echo $article['texte'] ?></p>
              
                <a href="index.php" class="post__link">Back to home</a>
            </div>
          </article>
</main>