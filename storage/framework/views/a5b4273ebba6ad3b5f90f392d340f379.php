<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">Master Barang</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo e(route('profile')); ?>" class="tbl-biru">My Profile</a></li>
                </ul>
            </div>
    </nav>
    

    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('barang.create')); ?>" class="btn btn-secondary">Tambah Barang</a>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Satuan</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($barang->kodebarang); ?></td>
                        <td><?php echo e($barang->namabarang); ?></td>
                        <td><?php echo e($barang->hargabarang); ?></td>
                        <td><?php echo e($barang->deskripsibarang); ?></td>
                        <td><?php echo e($barang->satuan_nama); ?></td>
                        <td>
                            
                            <div class="d-flex">
                                <a href="" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                <a href="<?php echo e(route('barang.edit', ['barang' => $barang->id])); ?>" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    <form action="<?php echo e(route('barang.destroy', ['barang' => $barang->id])); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\masterBarangUTS\resources\views/barang/index.blade.php ENDPATH**/ ?>