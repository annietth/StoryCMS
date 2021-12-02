<h1>article page</h1>
<?php foreach ($articles as $article) : ?>
<p><?= $article->getTitre()?></p>
<p><?= $article->getContenue()?></p>
<p><?= $article->getAuteur()?></p>
<p><?= $article->getDate()?></p>
<?php endforeach ?>