
<?php require APPROOT . '/views/inc/header.php'?>
<?php   flash('Post_message');?>
<?php flash('post_message') ?>
<div class="row mb-3">
    <div class="col-md-6">
        <h1>Posts</h1>
    </div>
    <div class="col-md-6">
        <a href="<?php echo URLROOT ?>/posts/add" class="btn btn-primary float-right">
            <i class="fa fa-pencil"></i> ADD POST
        </a>
        </div>
</div>
<?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3">
        <h4 class="card-title"><?php echo $post->title; ?></h4>
        <div class="bg-light p-2 mb-3">
            Written by <?php echo $post->name; ?> on <?php echo $post->postcreated; ?>
            <p class="card-text"><?php echo $post->body ?></p>
<a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postid; ?>" class="btn btn-dark">MORE</a>
        </div>
    </div>
<?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'?>