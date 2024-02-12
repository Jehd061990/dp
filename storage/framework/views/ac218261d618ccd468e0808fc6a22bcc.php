<?php if(Session::get('account_type') == 'admin'): ?>
<?php echo $__env->make('layouts/navbar_admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(Session::get('account_type') == 'super admin'): ?>
<?php echo $__env->make('layouts/navbar_superadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
<?php echo $__env->make('layouts/navbar_user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?><?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>