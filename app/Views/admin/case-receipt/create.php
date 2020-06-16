<?= $this->extend('admin/layouts/app') ?>

<?= $this->section('content') ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Case Receipt</h4>

            <?= $this->include('admin/layouts/messages') ?>

            <form action="<?= base_url() . '/admin/case-receipt/store'; ?>" class="pt-3" method="post">

                <div class="form-group">
                    <label for="exampleFormControlSelect3">User</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="customer_id">
                        <?php foreach ($users as $user) { ?>
                            <option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
                        <?php } ?>

                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Action Type</label>

                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="action_type">
                        <option value="nakit tahsilat">Nakit Tahsilat [-]</option>
                        <option value="bloke hesap">Bloke Hesap [+]</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Amount</label>
                    <input type="text" name="amount" class="form-control" placeholder="Amount">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Oluştur</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>