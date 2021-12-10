
<?php
include_once "App/Views/Layout/head.php";
include_once "App/Views/Layout/post_infor.php";
?>
<br>
<a href="index.php?page=create-user">Create New User</a>

<form action="" method="get">
    <table>
        <tr>
            <th><input type="text" name="search" placeholder="nhap tu khoa"></th>
            <th><button type="submit">Search</button></th>
        </tr>
    </table>
</form>

<table style="border-collapse: collapse;margin: auto" border="1px solid black">
    <thead>
    <tr>
        <th>id</th>
        <th>image</th>
        <th>name</th>
        <th>birthday</th>
        <th>email</th>
        <th>address</th>
        <th colspan="3">action</th>
    </tr>
    </thead>
    <tbody>
    <?php if(isset($users)|| !empty($users)) :?>
    <?php foreach ($users as $user):?>
    <tr>
        <td><?php echo $user->id?></td>
        <td><img width="100px" src="<?php echo "upload/".($user->image!==null?$user->image:"defaul.png")?>"></td>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->birthday?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->address?></td>
        <td><a href="index.php?page=delete-user&id=<?php echo $user->id?>">Delete</a></td>
        <td><a href="index.php?page=detail-user&id=<?php echo $user->id?>">Detail</a></td>
        <td><a href="index.php?page=update-user&id=<?php echo $user->id?>">Update</a></td>
    </tr>
    <?php endforeach;?>
    <?php else: ?>
    <td><?php echo "ERROR"?></td>
    <?php endif; ?>
    </tbody>
</table>

