<div class="card-header">
    Create users
</div>
<div class="card-body">
    <form action="<?= url('users/createUsers') ?>" method="post">
        <div class="form-group">
            <label>name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>email</label>
            <input type="text" name="email"></input>
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text" name="password"></input>
        </div>
        <button type="submit" class="btn btn-primary"> Create </button>
    </form>
</div>