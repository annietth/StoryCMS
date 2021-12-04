<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-md-8">
            <h3>All Posts</h3>
        </div>
        <?php if (isset($_SESSION["role"])) : ?>
        <div class="col-md-4">
            <a href="<?= url('post/create') ?>" class="btn btn-primary float-right">
                <i class="fas fa-plus-circle"></i> Create
            </a>
        </div>
        <?php endif ?>
    </div>
    <div class="row mb-3">
        <?php foreach ($posts as $post) : ?>
            <div class="col-md-12 mb-3">
                <div class="card">
                    <div class="card-header">
                        <?= $post['title']; ?>
                    </div>
                    <div class="card-body">
                        <?= $post['content']; ?>
                    </div>
                    <?= $post["auteur"] ?>
                    <div class="card-footer text-right">
                        <a href="<?= url('post/show/' . $post['id']); ?>" class="btn btn-primary">
                            <i class="fas fa-eye"></i> View
                        </a>
                        <?php// var_dump($_SESSION)?>
                        <?php if (isset($_SESSION["role"]) /*&& $_SESSION["role"] == 1*/) : ?>
                            <a href="<?= url('post/edit/' . $post['id']); ?>" class="btn btn-success">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?= url('post/delete/' . $post['id']); ?>" class="btn btn-danger">
                                <i class="fas fa-trash-alt mr-1"></i>Delete
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>