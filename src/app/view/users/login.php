<div class="card-header">
    login
</div>
<div class="card-body">
    <form action="<?= url('users/login') ?>" method="post">
        <div class="form-group">
            <label>email</label>
            <input type="text" name="email"></input>
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="text" name="password"></input>
        </div>
        <button type="submit" class="btn btn-primary"> login </button>
    </form>
</div>