<h2><?=$title ?> </h2>  
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
    <div class="form-group">
        <label> Title </label>
        <input class="form-control" type="text" name="title" placeholder="Add Title"  />
    </div>

    <div class="form-group">
        <label> Category </label>
       <select name='category_id' class='form-control'>
       <?php foreach($categories as $category) : ?>

            <option value='<?php echo $category['id'] ; ?>'><?php echo $category['name'] ; ?> </option>

            <?php endforeach ; ?>
       </select>
    </div>

    <div class="form-group">
        <lable>Message </label>
        <textarea name="body" class="form-control" placeholder="Add Message">

        </textarea>
    </div>

    <div class="form-group">
        <label> Upload Image </label>
        <input class="form-control" type="file" name="userfile" size=20  />
    </div>

    <button class="btn btn-success"> Submit </button>

<?php echo form_close(); ?>