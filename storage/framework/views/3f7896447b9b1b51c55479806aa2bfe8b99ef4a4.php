<?php $__env->startSection('title','Guest'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mt-5  ml-0 mr-0">
        <div class="col-md-2">
            <div class="calandar">
                <?php echo $__env->make('../sharedata/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
        <div class="card card-body col-md-8 container">
            <legend>Check In Form</legend>
            <form action="">
                <div class="row">
                    <div class="col">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="Name....">
                    </div>
                    <div class="col">
                        <label for="fatherName">Father Name</label>
                        <input type="text" name="fname" id="" class="form-control" placeholder="Father Name....">
                    </div>
                    <div class="col">
                        <label for="forPhone">Phone Number</label>
                        <input type="number" name="phone" id="" class="form-control">
                    </div>
                </div>
                <br>
                <label for="forNrc">Nrc Number</label><br>
                <div class="row">

                    <div class="col">

                        <select name="nrctype" id="" class="form-control">
                            <option value="">Choice...</option>
                        </select>
                    </div>
                    <div class="col">

                        <select name="nrctype" id="" class="form-control">
                            <option value="">Na</option>
                            <option value="">Pu</option>
                            <option value="">Ea</option>
                            <option value="">Th</option>
                        </select>
                    </div>
                    <div class="col">

                        <input type="number" name="nrc" id="" class="form-control" placeholder="Number...">
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col col-md-1">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                   value="option1">
                            <label class="form-check-label" for="inlineRad"></label>
                            ကျး
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                   value="option2">
                            <label class="form-check-label" for="inlineRadio2">မ</label>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        
                        <input type="number" name="age" id="" class="form-control" placeholder="Age...">
                    </div>
                    <div class="col">

                        <input type="text" name="age" id="" class="form-control" placeholder="National.">
                    </div>
                    <div class="col">
                        <input type="text" name="job" class="form-control" id="" placeholder="your job">
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="forAddress">Address</label>
                        <input type="text" name="address" id="" class="form-control">
                    </div>
                    <div class="col col-md-4">
                        <label for="forAddress">Satte</label>
                        <input type="text" name="address" id="" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="checkincolor" value="red">
                <input type="submit" value="Check In" class="mt-3 btn btn-outline btn-outline-info">
                <input type="button" value="Cancel" class="mt-3 btn btn-outline btn-outline-warning">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>