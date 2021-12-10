<a href="index.php?page=User-list">Quay lại</a>
<?php
include_once "App/Views/Layout/head.php";
?>
<a href="index.php?page=create-post">Create New Post</a>
<table style="border-collapse: collapse;margin: auto" border="1px solid black">
    <thead>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>content</th>
        <th>post_time</th>
        <th>user_id</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(isset($posts)):?>
    <?php foreach ($posts as $post) :?>
    <tr>
        <td><?php echo $post->id?></td>
        <td><?php echo $post->title?></td>
        <td><?php echo $post->content?></td>
        <td><?php echo $post->post_time?></td>
        <td><?php echo $post->user_id?></td>
        <td><a href="index.php?page=delete-post&id=<?php echo $post->id?>">Delete</a></td>
        <td><a href="index.php?page=detail-post&id=<?php echo $post->id?>">Detail</a></td>
        <td><a href="index.php?page=update-post&id=<?php echo $post->id?>">Update</a></td>
    </tr>
    <?php endforeach;?>
    <?php else:?>
    <tr>
        <td><?php echo "ERROR"?></td>
    </tr>
    <?php endif;?>
    </tbody>
</table>
