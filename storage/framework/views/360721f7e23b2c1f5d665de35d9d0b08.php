<?php $__env->startSection('title-block'); ?>
    Главная страница
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div id="page-content-wrapper" style="margin-top: 100px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Добро пожаловать на онлайн парковку</h1>
                    <p>
                        Вы можете посмотреть свой(и) автомобиль(и) онлайн.
                    </p>
                    <p>
                        Если вы ни разу не были у нас и хотите забронировать место для своего(их) автомобиля(ей),
                        то вы можете нажать на кнопку ниже этого текста.
                    </p>
                    <a href="<?php echo e(route('users.create')); ?>" class="btn btn-secondary">
                        Добавить клиента
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\web\Test\resources\views/main.blade.php ENDPATH**/ ?>