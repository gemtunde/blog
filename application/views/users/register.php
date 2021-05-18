
<h2> <?= $title ;?> </h2>
<?php echo validation_errors() ; ?>

<?php echo form_open('users/register') ; ?>
     <div class='row'>
        <div class='col-md-4 col-md-offset-4'>
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" class="form-control" name='name' placehoder='Enter your name'>
                </div>
                
                <div class="form-group">
                    <label> Zipcode  </label>
                    <input type="text" class="form-control" name='zipcode' placehoder='Enter your zipcode'>
                </div>

                <div class="form-group">
                    <label> Email </label>
                    <input type="text" class="form-control" name='email' placehoder='Enter your emai'>
                </div>

                <div class="form-group">
                    <label> UserName </label>
                    <input type="text" class="form-control" name='username' placehoder='Enter your username'>
                </div>

                <div class="form-group">
                    <label> Password </label>
                    <input type="password" class="form-control" name='password'>
                </div>

                <div class="form-group">
                    <label>Confirm Password </label>
                    <input type="password" class="form-control" name='password2' >
                </div>

                <button class='btn btn-danger' type='submit'> Register </button>
        </div>
    </div>

<?php echo form_close() ?>
























