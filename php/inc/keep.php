<?php
$navs = [
  'Plan du site' => 'index.php',
  'Mention légales' => 'index.php',
  'Contact' => 'contact.php'
];
?>


<header class="left">
        <h1 class="left__title">O'Clock Students News</h1>
        <div class="left__paragraph">
          <h2 class="left__subtitle"><strong class="left__subtitle-strong">Latest news</strong> from our students</h2>
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
