<table style="border-collapse: collapse;margin: auto" border="1px solid black">
    <a href="index.php?page=User-list">Quay lại</a>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>birthday</th>
        <th>email</th>
        <th>address</th>
        <th>password</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?php echo $user->id?></td>
        <td><?php echo $user->name?></td>
        <td><?php echo $user->birthday?></td>
        <td><?php echo $user->email?></td>
        <td><?php echo $user->address?></td>
        <td><?php echo $user->password?></td>
    </tr>
    </tbody>
</table>
