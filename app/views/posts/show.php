<?php require APP_ROOT . '/views/inc/header.php' ?>

<h1><?php echo $data['post']->title; ?></h1>
<div class="bg-secondary text-white p-2 mb-3">

    Written by <?php echo $data['user']->name ?>
    on <?php echo $data['post']->created_at ?>
</div>
<p><?php echo $data['post']->body ?></p>

<?php if ($data['post']->user_id === $_SESSION['user_id']) : ?>
    <hr>
    <div class="row">
        <a href="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-dark">Edit</a>

        <form action="<?php echo URL_ROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" 
        method="POST">
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>

<?php endif; ?>

<?php require APP_ROOT . '/views/inc/footer.php' ?>