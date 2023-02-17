
<div class="container p-3"> 
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 card p-3">
            <h3 class="py-2 text-center"><?=$profile;?></h3> 

            <div class="text-center">
                <img src="<?= base_url('assets/images/posts/noimage.jpg'); ?>" alt="" class="rounded-circle py-4" style="width: 7rem;">
            </div>
            
            <div class="px-4">
                <label>First name:  </label> <span class="px-3"><?= $empProf->first_name; ?></span>
            </div>

            <div class="px-4">
                <label>Last name:  </label> <span class="px-3"><?= $empProf->last_name; ?></span>
            </div>

            <div class="px-4">
                <label>Email:  </label> <span class="px-3"><?= $empProf->email; ?></span>
            </div>

            <div class="px-4">
                <label>Phone:  </label> <span class="px-3"><?= $empProf->phone; ?></span>
            </div>

            <div class="px-4">
                <label>Address:  </label> <span class="px-3"><?= $empProf->address; ?></span>
            </div>

            <a href="<?= base_url('employee');?>" class="text-primary text-right mt-2 px-4">Leave</a>
             
        </div>
        <div class="col-md-4"></div>
    </div>
</div> 
