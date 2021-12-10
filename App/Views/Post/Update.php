<form method="post">
    <input type="text" name="title"  value="<?php echo $post->title ?>">
    <input type="text" name="content"  value="<?php echo $post->content ?>">
    <input type="date" name="post_time" value="<?php echo $post->post_time ?>">
    <input type="number" name="user_id" value="<?php echo $post->user_id ?>">
    <button type="submit">Update</button>
    <a href="index.php?page=post-list">Quay lại</a>
</form>