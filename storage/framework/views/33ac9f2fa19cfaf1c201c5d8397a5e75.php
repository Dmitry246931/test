<?php $__env->startSection('title-block'); ?>
    Наши клиенты
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Список клиентов</h1>
    <div style="margin-top: 100px">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Фамилия</th>
                <th scope="col">Имя</th>
                <th scope="col">Отчество</th>
                <th scope="col">Номер</th>
                <th scope="col">Автомобили клиента</th>
                <th scope="col">Изменить данные</th>
                <th scope="col"></th>
            </tr>
            </thead>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($value -> family); ?>

                    </td>
                    <td>
                        <?php echo e($value -> name); ?>

                    </td>
                    <td>
                        <?php echo e($value -> name_father); ?>

                    </td>
                    <td>
                        <?php echo e($value -> phone); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('users.show' , $value->id)); ?>" class="btn btn-secondary">Просмотр
                            атомобиля(ей)</a>
                    </td>
                    <td>
                        <a href="<?php echo e(route('users.edit' , $value->id )); ?>" class="btn btn-secondary">Изменить данные</a>
                    </td>
                    <td>
                        <form method="POST" action="<?php echo e(route('users.destroy' , $value->id )); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-outline-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
    <div>
        <?php echo e($users->links()); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\web\Test\resources\views/all_clients_page.blade.php ENDPATH**/ ?>