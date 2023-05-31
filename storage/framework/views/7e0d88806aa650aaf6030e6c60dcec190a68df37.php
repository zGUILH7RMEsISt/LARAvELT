<h1>Listagem de usuários</h1>
<ul>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li>
    <?php echo e($item->name); ?> 
<a href="<?php echo e(route('users.show', $item->id)); ?>"> Detalhes </a>
</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</ul><?php /**PATH /var/www/resources/views/users/index.blade.php ENDPATH**/ ?>