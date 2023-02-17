<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>
<body class="bg-primary p-4">

<div class="container p-3"> 
    <div class="row">
        <div class="col-md-12">
          <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text-center p-2" id="staticBackdropLabel"><?php echo $form_title; ?></h4>
                    </div>
                    <div class="modal-body">

                        <?= validation_errors(); ?>
                        <?= form_open('employee/store'); ?>

                            <div class="form-group mb-3">
                                <label for="name">First name*</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter fisrt name">
                                <small class="text-danger"><?= $form_error('first_name'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Last Name*</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter last name">
                                <small class="text-danger"><?= $form_error('last_name'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Email*</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                                <small class="text-danger"><?= $form_error('email'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Phone*</label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                                <small class="text-danger"><?= $form_error('phone'); ?></small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="name">Address*</label>
                                <input type="text" class="form-control" name="name" id="address" placeholder="Enter address">
                                <small class="text-danger"><?= $form_error('address'); ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-2 float-end px-4">Save</button>
                    

                        <?= form_close(); ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>