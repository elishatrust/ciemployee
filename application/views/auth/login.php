<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">

            <!--  flash message | login form -->
            <?php if($this->session->flashdata('login')) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('login'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <!--  flash message | register form -->
            <?php if($this->session->flashdata('register')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('register'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

                <div class="card shadow">
                    <div class="card-header">
                        <h4><?= $form_title;?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('login');?>" method="POST">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="<?= set_value('email')?>" placeholder="Enter email address">
                                        <small class="text-danger"><?= form_error('email')?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                                        <small class="text-danger"><?= form_error('password')?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary float-right mt-2 px-4">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-3">
                    <a href="<?= base_url('register')?>">Create an Account!</a>   
                </div>
            </div>
        </div>
    </div>
</div>