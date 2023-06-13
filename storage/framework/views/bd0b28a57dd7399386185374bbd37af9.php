<?php $__env->startSection('title-block'); ?>
    Добавление нового авто
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Добавить новый автомобиль
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="POST"
          <?php if(isset($auto)): ?>
              action="<?php echo e(route('autos.update',$auto , $auto)); ?>">
        <?php echo csrf_field(); ?>
        <?php else: ?>
            action="<?php echo e(route('autos.store', $user)); ?>" >
            <?php echo csrf_field(); ?>
        <?php endif; ?>

        <?php if(isset($auto)): ?>
            <?php echo method_field('put'); ?>
        <?php endif; ?>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="form-group ">
                        <label for="formGroupExampleInput">Марка Авто</label>
                        <input type="text" name="mark"
                               value="<?php echo e(old('mark',isset($auto) ? $auto->mark : null)); ?>"
                               class="form-control " id="formGroupExampleInput" placeholder="Введите Марку Авто">
                        <?php $__errorArgs = ['mark'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Модель</label>
                        <input type="text" name="model"
                               value="<?php echo e(old('model',isset($auto) ? $auto->model : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Модель авто">
                        <?php $__errorArgs = ['model'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Цвет автомобиля</label>
                        <input type="text" name="color"
                               value="<?php echo e(old('color',isset($auto) ? $auto->color : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Цвет автомобиля">
                        <?php $__errorArgs = ['color'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Гос. номер машины</label>
                        <input type="text" name="gos_number"
                               value="<?php echo e(old('gos_number',isset($auto) ? $auto->gos_number : null)); ?>"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Гос. номер машины">
                        <?php $__errorArgs = ['gos_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group m-2">
            <button class="btn btn-secondary" type="submit"
                    style="margin-top: 20px"><?php echo e(isset($auto) ? 'Сохранить'  : 'Добавить'); ?></button>
            <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary" style="margin-top: 20px">назад</a>
            </p>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\web\Test\resources\views/auto_new.blade.php ENDPATH**/ ?>