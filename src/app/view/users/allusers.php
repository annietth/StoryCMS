<div>
    <h1>users</h1>
    <a href="users/create">inscription</a>
    <?php
    foreach ($users as $user) { ?>
        <p>
            <?= $user['id']?>
        </p>
        <p>
            <?= $user['name']?>
        </p>
        <p>
            <?= $user['email']?>
        </p>

        <a href="<?php echo url('users/delete/' . $user['id']); ?>" class="btn btn-danger">
            <i class="fas fa-trash-alt mr-1"></i>Delete
        </a>
   <?php }
    
    ?>
</div>