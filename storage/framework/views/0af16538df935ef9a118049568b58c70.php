<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-6 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">
            </div>
        </div>
    </nav>
    <div class="container-sm my-5">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 col-xl-4 border">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Detail Barang</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="kodebarang" class="form-label">Kode Barang</label>
                        <h5><?php echo e($barang->kodebarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="namabarang" class="form-label">Nama Barang</label>
                        <h5><?php echo e($barang->namabarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="hargabarang" class="form-label">Harga Barang</label>
                        <h5><?php echo e($barang->hargabarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="deskripsibarang" class="form-label">Deskripsi Barang</label>
                        <h5><?php echo e($barang->deskripsibarang); ?></h5>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="satuan" class="form-label">Satuan</label>
                        <h5><?php echo e($barang->satuan->nama); ?></h5>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 d-grid">
                        <a href="<?php echo e(route('barang.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php /**PATH C:\UTSKU\resources\views/barang/show.blade.php ENDPATH**/ ?>