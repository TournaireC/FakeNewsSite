<?php
$navs = [
  'Plan du site' => 'index.php',
  'Mention légales' => 'index.php',
  'Contact' => 'contact.php'
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="contact">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Say a word</strong> Contact us</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque scelerisque suscipit nibh quis porttitor. Integer iaculis mi urna, a pulvinar quam adipiscing ut. Vivamus vel vestibulum mauris.
          </p>
        </div>
        <nav>
          <ul class="left__nav">
            <?php foreach ($navs as $key => $nav) {
              ?>
              <li class="left__nav-item"><a href="<?php echo $nav ?>" class="left__nav-link"><?php echo $key ?></a></li>
              <?php
            } 
              ?>     
            <!-- <li class="left__nav-item"><a href="" class="left__nav-link">Plan du site</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Mentions légales</a></li>
            <li class="left__nav-item"><a href="" class="left__nav-link">Contact</a></li> -->
          </ul>
        </nav>
</header>
<main class="right">
    <h2 class="right__title">Contact</h2>
    <section>
        <form action="#" method="post">
                <div>
                    <input type="radio" name="genre" value="mme">
                    <label for="mme">Mme</label> /
                    <input type="radio" name="genre" value="m.">
                    <label for="m.">M.</label>
                    <label for="prenom"></label>
                    <input type="text" placeholder="Prenom" class="border" id="prenom">
                    <label for="nom"></label>
                    <input type="text" placeholder="Nom" class="border" id="nom">
                </div>
                <div>
                    <label for="mail"></label>
                    <input type="email" placeholder="Adresse e-mail" class="border" id="mail">
                </div>
                <div class="interligne">
                    <label for="">J'ai connu ce site grâce à </label>
                    <select name="choix" placeholder="Choisir..." id="choix" class="border">
                        <option value="">Choisir</option>
                        <option value="facebook">Facebook</option>
                        <option value="twitter">Twitter</option>
                        <option value="google">Google</option>
                        <option value="bAO">Bouche à oreilles</option>
                        <option value="JT">JT de 13h de Jean-Pierre Pernault</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="interligne">
                    <label for="commentaire">Pour laisser un commentaire libre à propos d'O'Clock, c'est par ici :</label><br>
                    <textarea name="" id="" cols="40" rows="5" placeholder="Votre message" class="border"></textarea>
                </div>
                <div class="interligne">
                    <input type="checkbox" name="check">
                    <label for="check">Je certifie la véracité de ces informations</label>                
                </div>
                <div class="interligne">
                    <label for="fichier">Ajouter un fichier :</label>
                    <input type="file">
                </div>
                <div id="button">
                    <input type="submit" value="Envoyer">
            </div>  
        </form>
    </section>
</main>

</body>
</html>