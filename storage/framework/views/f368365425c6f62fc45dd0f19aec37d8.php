<?php $__env->startSection('title-block'); ?>
    Парковка
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form method="post" action="<?php echo e(route('auto')); ?>">
        <?php echo csrf_field(); ?>
        <div style="width: 1000px; margin-left: 300px; margin-top: 100px">
            <h3>Выберите автомобиль</h3>
            <div class="form-group">
                <label>Владелец</label>
                <select class="form-control input-sm" name="category_id">
                    <option value="">--select--</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->id); ?>"><?php echo e($value->family); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group" style="position:relative">
                <label>Машины</label>
                <select class="form-control input-sm" name="subcategory_id"></select>
            </div>
            <button class="btn btn-secondary" type="submit" style="margin-top: 20px">Поставить авто на парковку</button>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

        <?php echo csrf_field(); ?>
        <script>
            $(function () {
                var loader = $('#loader'),
                    category = $('select[name="category_id"]'),
                    subcategory = $('select[name="subcategory_id"]');
                loader.hide();
                subcategory.attr('disabled', 'disabled')
                subcategory.change(function () {
                    var id = $(this).val();
                    if (!id) {
                        subcategory.attr('disabled', 'disabled')
                    }
                })

                category.change(function () {
                    var id = $(this).val();
                    if (id) {
                        loader.show();
                        subcategory.attr('disabled', 'disabled')
                        $.get('<?php echo e(url('/dropdown-data?cat_id=')); ?>' + id)
                            .success(function (data) {
                                var s = '<option value="">---select--</option>';
                                data.forEach(function (row) {
                                    s += '<option value="' + row.id + '">' + row.mark + "   " + row.gos_number + '</option>'
                                })
                                subcategory.removeAttr('disabled')
                                subcategory.html(s);
                                loader.hide();
                            })
                    }
                })
            })
        </script>
    </form>
    <h1>  <?php $__currentLoopData = $auto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aut=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-group m-3 ">
                <li class="list-group-item">
                    <?php echo e($value->mark); ?> <?php echo e($value->model); ?> <?php echo e($value->color); ?> <?php echo e($value->gos_number); ?>

                    <a href="<?php echo e(route('auto_out' , $value->id)); ?>" class="btn btn-secondary">Покинуть парковку</a>
                </li>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </h1>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\web\Test\resources\views/parking.blade.php ENDPATH**/ ?>