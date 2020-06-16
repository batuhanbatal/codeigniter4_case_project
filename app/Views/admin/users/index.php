<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic Table</h4>
            <p class="card-description">
                Add class <code>.table</code>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name.</th>
                            <th>E-Mail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?= $user['id']; ?></td>
                                <td><?= $user['name']; ?></td>
                                <td><?= $user['email']; ?></td>
                                <td>
                                    <a href="<?= base_url() . '/admin/users/edit/' . $user['id']; ?>" type="button" class="btn btn-warning">Edit</a>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    <button type="button" class="btn btn-primary">Case</button>
                                </td>
                              
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>