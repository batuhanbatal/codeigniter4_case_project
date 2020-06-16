<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User Edit</h4>

            <?= $this->include('admin/layouts/messages') ?>

            <form action="<?= base_url() . '/admin/users/update/' . $user['id']; ?>" class="pt-3" method="post">

                <div class="form-group">
                    <label for="exampleInputUsername1">Username</label>
                    <input type="text" name="name" value="<?= $user['name']; ?>" class="form-control" id="exampleInputUsername1" placeholder="Username">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="email" value="<?= $user['email']; ?>" class="form-control" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" name="password_confirm" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
                </div>

                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Money Limit</label>
                    <input type="text" value="<?= $user['money_limit']; ?>" name="money_limit" class="form-control" placeholder="Money Limit">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>

                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>