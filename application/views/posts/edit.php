<h2><?=$title ?> </h2>  
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
<input class="form-control" type="hidden" name="id" value="<?php echo $post['id'] ; ?>" >
    <div class="form-group">
        <label> Title </label>
        <input class="form-control" type="text" name="title" placeholder="Add Title" 
        value="<?php echo $post['title'] ; ?>" >
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
        <textarea name="body" class="form-control" placeholder="Add Message" >
        <?php echo $post['body'] ; ?>
        </textarea>
    </div>
    <button class="btn btn-success"> Submit </button>

<?php echo form_close(); ?>