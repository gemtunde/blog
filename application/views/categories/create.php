<h2> <?= $title ; ?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('categories/create') ;?>

    <div class="form-group">
        <label> Name </lable>
        <input class="form-control" type="text" name="name" placeholder="Category">
    </div>

    <button class="btn btn-danger" type='submit'>Submit </button>

<?php echo form_close() ; ?>



























