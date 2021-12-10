<form method="post">
    <input type="text" name="name" value="<?php echo $user->name?>">
    <input type="date" name="birthday" value="<?php echo $user->birthday?>">
    <select name="address">
        <option <?php echo $user->address=="Hà Nội"?"selected":""?> value="Hà Nội">Hà Nội</option>
        <option  <?php echo $user->address== "Đà Nẵng"?"selected":""?>value="Đà Nẵng">Đà Nẵng</option>
        <option  <?php echo $user->address == "Quảng Ninh"?"selected":""?>value="Quảng Ninh">Quảng Ninh</option>
    </select>
    <input type="password" name="password" value="<?php echo $user->password?>">
    <input type="text" name="email" value="<?php echo $user->email?>">
    <button type="submit">Edit</button>
    <a href="index.php?page=User-list">Quay lại</a>
</form>
