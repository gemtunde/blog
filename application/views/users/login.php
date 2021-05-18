
<?php echo form_open('users/login') ; ?>


<div class="row">

        <div class="col-md-4 col-md-offset-4">
             <h2><?= $title ?> </h2>

             <?php echo validation_errors() ; ?>
             <div class="form-group">
                <label> UserName/Email </label>
                <input type="text" class="form-control" name='username' placeholder='Email or Username' autofocus>
             </div>

             <div class="form-group">
                <label> Password </label>
                <input type="password" class="form-control" name='password' autofocus>
             </div>

                <button class='btn btn-success btn-block' tpye='submit'> Login </button>
        </div>
</div>



<?php echo form_close() ; ?>