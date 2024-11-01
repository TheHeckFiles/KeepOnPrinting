<?php
//debug!
//phpinfo();
//$errorLog = ini_get('error_log');
//var_dump($errorLog);
?>
<?php snippet('header') ?>
<article>
  <h2 class="h2"><?= $page->title()->esc() ?></h2>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</article>

<?php snippet('footer') ?>