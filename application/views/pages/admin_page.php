<div class="py-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

            <!--  flash message | register form -->
            <?php if($this->session->flashdata('register')) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('register'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

                <div class="card">
                    <div class="card-header">
                        <h4><?= $admin_title;?></h4>
                    </div>
                    <div class="card-body">
                        <h6>
                            Username: <?php echo $this->session->userdata('auth_user')['first_name'];?>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>