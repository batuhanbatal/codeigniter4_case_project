<!DOCTYPE html>
<html lang="en">

<head>
    <?= view('admin/layouts/head'); ?>
</head>

<body>
    <div class="container-scroller">

        <?= view('admin/layouts/navbar'); ?>

        <div class="container-fluid page-body-wrapper">

            <?= view('admin/layouts/sidebar'); ?>    

            <div class="main-panel">
                <div class="content-wrapper">
                </div>

                <!-- content-wrapper ends -->
                <?= view('admin/layouts/footer'); ?>
                
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <?= view('admin/layouts/scripts'); ?>

</body>

</html>