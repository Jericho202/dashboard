<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Clinic Appointment System</title>
        <link rel="shortcut icon" href="" type="image/x-icon">
        <?php echo $__env->make('Links.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body class="wrapper layout-fixed  light-mode ">
        <div class="preloader flex-column justify-content-center align-items-center ">
            <img src="" class="" alt="AdminLTELogo" height="50" width="50">
        </div>

        <?php echo $__env->make('Admin.Admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        <?php echo $__env->make('Admin.SideAdmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
       
         <?php echo $__env->yieldContent('MainContent'); ?>
    <?php echo $__env->make('Links.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>

<?php /**PATH C:\Laravel Projects\Clinic Appointment System\ClinicAppointmentSystem\resources\views/Admin/Dashboard.blade.php ENDPATH**/ ?>