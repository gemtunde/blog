<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ci_blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/flatly/bootstrap.min.css" >
    <link rel="stylesheet" href="<?php echo base_url() ; ?>assets/css/style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo site_url(); ?>">CI-Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url(); ?>">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>posts">Blog-Posts</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>categories">Categories</a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <ul class="navbar-nav mr-auto">
    <?php if(!$this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>users/login">Login</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>users/register">Register</a>
      </li>
      <?php endif; ?>

      <?php if($this->session->userdata('logged_in')) : ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>posts/create">Create Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>categories/create">Create Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url(); ?>logout">Logout</a>
      </li>
      <?php endif; ?>

      </ul>
    </form>
  </div>
</nav>


<div class="container">

<?php if($this->session->flashdata('user_registered')) : ?>
<?php echo "<p class='alert alert-success'>". $this->session->flashdata('user_registered')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('post_created')) : ?>
<?php echo "<p class='alert alert-success'>". $this->session->flashdata('post_created')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('post_updated')) : ?>
<?php echo "<p class='alert alert-success'>". $this->session->flashdata('post_updated')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('post_deleted')) : ?>
<?php echo "<p class='alert alert-danger'>". $this->session->flashdata('post_deleted')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('category_created')) : ?>
<?php echo "<p class='alert alert-success'>". $this->session->flashdata('category_created')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('user_loggin')) : ?>
<?php echo "<p class='alert alert-success'>". $this->session->flashdata('user_loggin')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('user_loggout')) : ?>
<?php echo "<p class='alert alert-danger'>". $this->session->flashdata('user_loggout')." </p>" ; ?>
<?php endif ; ?>

<?php if($this->session->flashdata('loggin_failed')) : ?>
<?php echo "<p class='alert alert-danger'>". $this->session->flashdata('loggin_failed')." </p>" ; ?>
<?php endif ; ?>



