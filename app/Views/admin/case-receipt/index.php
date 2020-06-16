<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <?= $this->include('admin/layouts/messages') ?>

            <h4 class="card-title">Case Receipt</h4>
            
            <a href="<?= base_url() . '/admin/case-receipt/create'; ?>" type="button" class="btn btn-primary">Case Receipt Create</a>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Action Type</th>
                            <th>Debt</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($case as $data_case) { ?>
                            <tr>
                                <td><?= $data_case['id']; ?></td>
                                <td><?= $data_case['name']; ?></td>
                                <td><?= $data_case['action_type']; ?></td>
                                <td><?= $data_case['debt']; ?></td>
                                <td><?= $data_case['credit']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>