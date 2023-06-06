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
                    <li><a href="<?php echo e(url('/home')); ?>" class="tbl-biru">Go Back Home</a></li>
                </ul>
            </div>
    </nav>
    
    
    <div class="wrapper">
        <section id="home">
            <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/classicu 2023-06-02 105934.405 AM.jpg')); ?>" height="300px" width="300px" alt="image">
            <div class="kolom">
                <h2 class="anyong">Hellooo, it's Me Puput</h2>
                
                
            </div>
        </section>
    </div>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\LENOVO\masterBarangUTS\resources\views/profile.blade.php ENDPATH**/ ?>