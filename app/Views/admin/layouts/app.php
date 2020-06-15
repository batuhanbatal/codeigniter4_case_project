<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('admin/layouts/head') ?>
</head>

<body>
    <div class="container-scroller">

        <?= $this->include('admin/layouts/navbar') ?>


        <div class="container-fluid page-body-wrapper">

            <?= $this->include('admin/layouts/sidebar') ?>


            <div class="main-panel">
                <div class="content-wrapper">
                    <?= $this->renderSection('content') ?>
                </div>

                <!-- content-wrapper ends -->
                <?= $this->include('admin/layouts/footer') ?>


            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?= $this->include('admin/layouts/scripts') ?>


</body>

</html>