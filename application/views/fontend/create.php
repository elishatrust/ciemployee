
<div class="container p-3"> 
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 card p-3">
            <h3 class="py-2 text-center"><?=$form_title;?></h3>    
                <form action="<?= base_url('employee/store');?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="first_name">First name*</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter fisrt name">
                        <small class="text-danger"><?= form_error('first_name'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="last_name">Last Name*</label>
                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
                        <small class="text-danger"><?= form_error('last_name'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone*</label>
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                        <small class="text-danger"><?= form_error('phone'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address*</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter address">
                        <small class="text-danger"><?= form_error('address'); ?></small>
                    </div>
                    <a href="<?= base_url('employee');?>" class="btn btn-dark float-left mt-2 px-4">Cancel</a>
                    <button type="submit" class="btn btn-primary mt-2 float-right px-4">Save</button>
                <?= form_close(); ?>
            </div>
        <div class="col-md-3"></div>
    </div>
</div> 
