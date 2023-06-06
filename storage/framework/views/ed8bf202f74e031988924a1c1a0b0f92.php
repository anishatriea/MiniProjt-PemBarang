<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS : ANISHA TRIE </title><br>
    <title>LARAVEL MENYENANGKAN</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
<div class="p-3 mb-2 text-emphasis-warning">
    <div class="container text-center my-5">
        <h1 class="mb-4" style="color: #884A39; font-size: 70px; font-family: 'Cormorant Garamond';">WELCOME TO MAMA</h1>
        <h1>Mini Project-Laravel</h1><br>
        
        <img class="img-thumbnail" src="<?php echo e(Vite::asset('resources/images/ini.jpg')); ?>" alt="image">

        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a class="btn btn-outline-dark btn-lg" href="<?php echo e(url('/home')); ?>">Home</a>
            </div>
        </div>
    </div>
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</div>
</body>
</html>
<?php /**PATH C:\UTSKU\resources\views/welcome.blade.php ENDPATH**/ ?>