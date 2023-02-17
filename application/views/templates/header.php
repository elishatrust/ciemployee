<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="container">
      <a class="navbar-brand" href="#">TanzGov Agency</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown pr-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Auth
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= base_url('user_page')?>">User</a>
              <a class="dropdown-item" href="<?= base_url('admin_page')?>">Admin</a>
              <a class="dropdown-item" href="#">Setting</a>
            </div>
          </li>
          <li class="nav-item">
          </li>
        </ul>
        <span class="navbar-link">
            <a href="<?= base_url('login')?>">Login</a>
        </span>
      </div>
  </div>

</nav>

<div class="container">
    <div class="row">
      <div class="col-md-12">

      
          <!--  flash message | adding data -->
          <?php if($this->session->flashdata('added')) : ?>
          <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
              <?= $this->session->flashdata('added'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <?php endif; ?>
          </div>
          <!--  flash message | updating data -->
          <?php if($this->session->flashdata('update')) : ?>
          <div class="alert alert-success alert-dismissible fade show m-2" role="alert">
              <?= $this->session->flashdata('update'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <?php endif; ?>
          </div>
          <!--  flash message | deleting data -->
          <?php if($this->session->flashdata('delete')) : ?>
          <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
              <?= $this->session->flashdata('delete'); ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <?php endif; ?>
          </div>

      </div>
    </div>
</div>