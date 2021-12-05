<h1>Accueil</h1>
<p>
    Bienvenu sur le CMS réalisé par : Renaud FRADIN, Jacky TRUONG et Annie TRAN.<br>
    A Travers ce CMS, vous pourrez rédiger des articles afin qu'ils soient vu de tout le monde.
    Vous pourrez biensûr les éditer si le rôle vous le permet !
</p>
<div class="container listePage">
    <a class="listePage1" href="post">
        <span>Liste des articles</span>
    </a>
    <?php if (isset($_SESSION["role"])): ?>
    <a class="listePage2" href="post/create">
        <span>Rédiger un article</span>
    </a>
    <?php endif ?>
    <a class="listePage3" href="users">
        <span>Liste des utilisateurs</span>
    </a>
</div>