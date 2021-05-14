<h2> <?php echo $post['title'] ;?></h2>
<small class="post-date"> Posted on: <?php echo $post['created_at'] ; ?> </small><br />
<img src=" <?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" >

<div class="post-body">
    <?php echo $post['body'] ;?>
</div>

<hr>

<a class="btn btn-primary pull-left" href="edit/<?php echo $post['slug']; ?>" > Edit </a> 

<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" class="btn btn-danger" value="Delete" /> 
<?php echo form_close(); ?>
<hr> 
<h3> Comments </h3>
<?php if($comments) : ?>
        <?php foreach($comments as $comment) :?>
           <div class="well">
            <h5><?php echo $comment['name'] ;?> at  <?php echo $comment['created_at'] ?></h5>
             <p><?php echo $comment['body'] ;?></p>
             </div>
        <?php endforeach ; ?>


<?php else : ?>
<p> No Comments </p>

<?php endif ; ?>
<hr >
<h3> Add Comment </h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>

    <div class="form-group">
        <label> Name </label>
        <input class='form-control' type='text' name='name' placeholder='Enter Name' />
    </div>

    <div class="form-group">
        <label> Email </label>
        <input class='form-control' type='email' name='email' placeholder='Enter Email' />
    </div>

    <div class="form-group">
        <label> Message </label>
        <Textarea class='form-control' name='body' placeholder='Enter message' >
            
        </Textarea> 
    </div>
    <input type='hidden' name='slug' value="<?php echo $post['slug'] ; ?>" >
    <button type='submit' class='btn btn-danger' name='submit' >
    submit
    </button>

<?php echo form_close();?>











