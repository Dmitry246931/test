<?php $__env->startSection('title-block'); ?>
    Машины <?php echo e($user->family); ?>

    <?php echo e(isset($message) ? $message : Null); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>Машины <?php echo e($user->family); ?></h1>
    <div>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Марка</th>
                <th scope="col">Модель</th>
                <th scope="col">Цвет</th>
                <th scope="col">Номер</th>
                <th scope="col">Изменить</th>
                <th scope="col">Удалить</th>
            </tr>
            </thead>

            <?php $__currentLoopData = $autos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $auto => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($value -> mark); ?>

                    </td>
                    <td>
                        <?php echo e($value -> model); ?>

                    </td>
                    <td>
                        <?php echo e($value -> color); ?>

                    </td>
                    <td>
                        <?php echo e($value -> gos_number); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('ss' , $value->id)); ?>" class="btn btn-secondary">Изменить данные</a>
                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('autos.destroy' ,  $value->id )); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>

    <a href="<?php echo e(route('autos.create',$user)); ?>" class="btn btn-secondary">Добавить автомобиль</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\web\Test\resources\views/my_auto.blade.php ENDPATH**/ ?>