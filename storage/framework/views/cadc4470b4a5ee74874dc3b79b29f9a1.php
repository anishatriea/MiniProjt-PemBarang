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
    
    
    <div class="wrapper">
        <section id="home">
            <img src="https://img.freepik.com/free-vector/storehouse-workers-keeping-records-boxes_74855-11065.jpg?w=740&t=st=1685776143~exp=1685776743~hmac=cd9c99eb34d02d66a7af658a4af3413aa374fc5111051aebefd678dbf3dd5da0"/>
            <div class="kolom">
                <h2 class="deskripsi">Welcome in Master Barang</h2>
                <p>Halo, perkenalkan nama saya Putri Zahrafi Anam yang kerap disapa Puput. Saya lahir di Surabaya, 5 Agustus 2003. Saat ini saya sedang mengenyam pendidikan S1 di IT Telkom Surabaya Jurusan Sistem Informasi. Saya anak kedua dari 2 bersaudara. Hobi saya adalah Menonton Youtube, Rebahan, dan Membaca Buku.</p>
                <p><a href="<?php echo e(route('barang.index')); ?>" class="tbl-pink">List Barang</a></p>
            </div>
        </section>
    </div>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\masterBarangUTS\resources\views/home.blade.php ENDPATH**/ ?>