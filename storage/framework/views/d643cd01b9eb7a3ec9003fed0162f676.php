<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="/js/profile.js"></script>
    <script src="/js/footer.js"></script>

    <title>Profile</title>
</head>

<body class="profile_body">
    
    <div class="profile_wrapper">
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   

    <form
    id="edit_profile_form"
    action="<?php echo e(url('/profile/'.$user->user_id)); ?>"
    method="POST"
    enctype="multipart/form-data"
    class="container-fluid"
  >
    <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
    <h1 id="your_profile">Your Profile</h1>

      <div class="row">
        <div class="col-lg-12">

            <label for="profile_picture_upload" class="profile-picture-container">
                <img id="profile_picture" src="/img/avatar.png" alt="Profile Picture" />
            </label>
            <input type="file" name="profile_picture" class="input_profile text-center" id="profile_picture_upload" />


        

          <h2><?php echo e($user -> first_name); ?>, <?php echo e($user -> last_name); ?></h2>
          <h5><?php echo e($user -> email); ?></h5>

          
           
          <strong><p class="mt-5 fs-4">Edit Your Profile Here:</p></strong>

          <label for="email" class="label_profile mt-4">First Name:</label>
          <input
            class="input_profile"
            type="text"
            name="first_name"
            value="<?php echo e($user->first_name); ?>"
            required
            disabled
          />

          <label for="email" class="label_profile">Last Name:</label>
          <input
            class="input_profile"
            type="text"
            name="last_name"
            value="<?php echo e($user->last_name); ?>"
            required
            disabled
          />

          <label for="email" class="label_profile">Email:</label>
          <input
            class="input_profile"
            type="email"
            name="email"
            value="<?php echo e($user->email); ?>"
            required
            disabled
          /><br />
          <button
            type="button"
            id="edit_button"
            class="btn btn-dark button_profile"
          >
            Edit
          </button>
          <button
            type="submit"
            style="display: none"
            id="save_button"
            class="btn btn-dark button_profile"
          >
            Save Changes
          </button>

        </div>
      </div>
   
  </form>
</div>
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>

<?php /**PATH C:\Users\User\Desktop\bootcamp\capstone\dp\resources\views/profile.blade.php ENDPATH**/ ?>