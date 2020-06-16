<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <?= $this->include('admin/layouts/messages') ?>

            <h4 class="card-title">Case Detail</h4>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Action Type</th>
                            <th>Debt</th>
                            <th>Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($case as $data) { ?>
                            <tr style="color:#fff;"
                                <?php if($data['action_type'] == 'nakit tahsilat') { ?> class="bg-danger">  <?php } ?>
                                <?php if($data['action_type'] == 'bloke hesap')    { ?> class="bg-success"> <?php } ?>
                                <td><?= $data['id']; ?></td>
                                <td><?= $data['action_type']; ?></td>
                                <td><?= $data['debt']; ?></td>
                                <td><?= $data['credit']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <?= $this->include('admin/layouts/messages') ?>

            <h4 class="card-title">Total</h4>
            Çekilebilen Miktar : <?= $delimitation_view; ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

