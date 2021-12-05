<h1>Liste des articles</h1>

<?php if (isset($_SESSION["role"])) : ?>
<a href="<?= url('post/create') ?>">
    <i class="fas fa-plus-circle"></i> Rédiger un article
</a>
<?php endif ?>

<div class="listeArticles">
    <?php foreach ($posts as $post) : ?>
    <div class="article">
        <h2><?= $post['title']; ?></h2>
        <h3><?= $post['auteur'] ?></h3>
        <p class="articleContenu"><?= $post['content']; ?></p>
        <div class="listeActionsArticle">
            <a href="<?= url('post/show/' . $post['id']); ?>" class="btnStyle1">
                Voir l'article
            </a>
            <?php if (isset($_SESSION["role"])) : ?>
                <a href="<?= url('post/edit/' . $post['id']); ?>" class="btnStyle1">
                    Editer
                </a>
                <a href="<?= url('post/delete/' . $post['id']); ?>" class="btnStyle1">
                    Supprimer
                </a>
            <?php endif ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

