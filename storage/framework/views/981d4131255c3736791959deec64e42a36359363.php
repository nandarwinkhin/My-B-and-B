<?php $__env->startSection('title','Create Room'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mt-5 ml-0 mr-0">

        <div class="col-md-2">
            <div class="calandar">
                <?php echo $__env->make('../sharedata/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>

        <div class="container col-md-8 card card-body">
            <form method="post">
                <?php echo e(csrf_field()); ?>

                <?php $__currentLoopData = $errors->all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                    <p class="alert alert-danger"><?php echo e($error); ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                <legend>Add A Room</legend>
                <?php if(session('status')): ?>
                    <div class="alert alert-success"><?php echo e(session('status')); ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="roomNumber">Room Numer</label>
                    <input type="text" class="form-control" id="roomNumber" name="roomNumber"
                           placeholder="Enter Room Number">
                </div>
                <div class="form-group">
                    <label for="inputState">Room Type</label>
                    <select id="inputState" name="roomType" class="form-control">
                        <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $room): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <option value="<?php echo e($room->roomtype); ?>"><?php echo e($room->roomtype); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Room</button>
            </form>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>