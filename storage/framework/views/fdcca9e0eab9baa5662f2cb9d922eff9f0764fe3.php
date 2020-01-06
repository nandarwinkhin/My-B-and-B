<?php $__env->startSection('title'); ?>
    Create RoomType
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mt-5 ml-0 mr-0">
        <div class="col-md-2">
            <div class="calandar">
                <?php echo $__env->make('../sharedata/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="col-md-8 container card card-body">
            <form method="post">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <div class="alert alert-danger"><?php echo e($error); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                <legend>Add A RoomType</legend>

                <?php if(session('status')): ?>
                    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                <div class="form-group">
                    <label for="title"> RomeType</label>
                    <input type="text" class="form-control" name="roomType" id="title" placeholder="Room Type">
                </div>
                <div class="form-group">
                    <label for="price"> Price</label>
                    <input type="number" class="form-control" name="price" id="title" placeholder="Enter price">
                </div>


                <button type="submit" class="btn btn-primary">Add RoomType</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>