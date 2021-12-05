<table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Identifiant</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users as $user)
        { ?>
            <tr>
                <td>
                    <?=$user['id'] ?>
                </td>
                <td>
                    <?=$user['name'] ?>
            </td>
                <td>
                    <?=$user['email'] ?>
            </td>
                <td>
                <a href="<?php echo url('users/delete/' . $user['id']); ?>" class="btnStyle1">
                    Supprimer
                </a>
            </td>
            </tr>
        <?php
        }

        ?>
        <tbody>
    </table>
</div>
