<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="flex items-center space-x-4">
        <img src="<?php echo e($menu->menu_image); ?>" alt="<?php echo e($menu->menu_name); ?>" class="w-24 h-24 object-cover rounded-full">
        <div>
            <h3 class="text-lg font-medium"><?php echo e($menu->menu_name); ?></h3>
            <p class="text-gray-500"><?php echo e($menu->menu_description); ?></p>
            <p class="text-gray-700 font-bold">Rp <?php echo e(number_format($menu->price, 0, ',', '.')); ?></p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH E:\DATA\KERJA\NEXA SEMARANG\Web-Programmer-Challenge\resources\views/components/menu-card.blade.php ENDPATH**/ ?>