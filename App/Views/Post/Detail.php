<a href="index.php?page=post-list">Quay lại</a>
<table style="border-collapse: collapse;margin: auto" border="1px solid black">
    <tr >
        <th style="background-color: green">id</th>
        <th style="background-color: green">title</th>
        <th style="background-color: green">content</th>
        <th style="background-color: green">post_time</th>
        <th style="background-color: green">user_id</th>
    </tr>
    <tr>
        <td><?php echo $post->id ?></td>
        <td><?php echo $post->title ?></td>
        <td><?php echo $post->content ?></td>
        <td><?php echo $post->post_time ?></td>
        <td><?php echo $post->user_id ?></td>
    </tr>
</table>
