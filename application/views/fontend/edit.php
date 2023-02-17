
<div class="container p-3"> 
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 card p-3">
            <h3 class="py-2 text-center"><?=$form_edit;?></h3> 
                <form action="<?= base_url('employee/update/'.$val->id); ?>" method="POST">
                    <div class="form-group mb-3">
                        <label for="first_name">First name*</label>
                        <input type="text" class="form-control" name="first_name" value="<?= $val->first_name; ?>">
                        <small class="text-danger"><?= form_error('first_name'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="last_name">Last Name*</label>
                        <input type="text" class="form-control" name="last_name" value="<?= $val->last_name; ?>">
                        <small class="text-danger"><?= form_error('last_name'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" name="email" value="<?= $val->email; ?>">
                        <small class="text-danger"><?= form_error('email'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone*</label>
                        <input type="number" class="form-control" name="phone" value="<?= $val->phone; ?>">
                        <small class="text-danger"><?= form_error('phone'); ?></small>
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address*</label>
                        <input type="text" class="form-control" name="address" value="<?= $val->address; ?>">
                        <small class="text-danger"><?= form_error('address'); ?></small>
                    </div>
                    <a href="<?= base_url('employee');?>" class="btn btn-dark float-left mt-2 px-4">Cancel</a>
                    <button type="submit" class="btn btn-info mt-2 float-right px-4">Update</button>
                <?= form_close(); ?>
            </div>
        <div class="col-md-3"></div>
    </div>
</div> 
