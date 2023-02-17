<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow">
                    <div class="card-header">
                        <h4><?= $form_title;?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('register');?>" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name</label>
                                        <input type="text" name="first_name" class="form-control" value="<?= set_value('first_name')?>" placeholder="Enter first name">
                                        <small class="text-danger"><?= form_error('first_name')?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" class="form-control" value="<?= set_value('last_name')?>" placeholder="Enter last name">
                                        <small class="text-danger"><?= form_error('last_name')?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= set_value('email')?>" placeholder="Enter email address">
                                        <small class="text-danger"><?= form_error('email')?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                        <small class="text-danger"><?= form_error('password')?></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm password</label>
                                        <input type="password" name="password2" class="form-control" placeholder="Confirm password">
                                        <small class="text-danger"><?= form_error('password2')?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control" value="<?= set_value('address')?>" placeholder="Enter address location">
                                        <small class="text-danger"><?= form_error('address')?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary mt-2 px-4">Register Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>