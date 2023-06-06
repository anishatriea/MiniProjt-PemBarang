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
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('barang.index')); ?>" class="nav-link">List Barang</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-house-fill me-3 fs-1"></div>
            <h4 class="mb-0">Berikut Beranda saya</h4>
        </div>
    </div>
    <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-2" style="width: 100000px;">
            <div class="row g-10">
              <div class="col-md-6">
                <img src="<?php echo e(Vite::asset('resources/images/ohini.jpg')); ?>" class="img-fluid rounded-start" alt="...">
              </div><br>
              <div class="col-md-6">
                <div class="card-body">
                  <h2 class="card-title font-monospace text">Simak!!!</h5><br>
                    <p class="font-monospace text-justify">Kami menawarkan sejumlah keunggulan dalam layanan peminjaman kami. Pertama, pilihan barang yang lengkap dan berkualitas. Kedua, proses peminjaman yang cepat dan mudah melalui platform online kami yang user-friendly. Ketiga, 
                        pengiriman tepat waktu dan pengambilan barang yang aman untuk memberikan kenyamanan dan kepercayaan kepada Anda.</p><br>
                    <p class="font-monospace text-justify">Kami memiliki tawaran spesial yang tidak boleh Anda lewatkan! Dapatkan diskon 10% untuk peminjaman pertama Anda dengan menggunakan kode promo "PINJAM10". Jangan sia-siakan kesempatan ini!</p>
                </div>
              </div>
            </div>
          </div>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\UTSKU\resources\views/home.blade.php ENDPATH**/ ?>