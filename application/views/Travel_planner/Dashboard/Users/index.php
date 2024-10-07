<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Planner | Users</title>
</head>
<style>
.profile-img {
    width: 37px;
    height: 37px;
    border-radius: 50%;
}
</style>
<body>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Image</th>
            <th>Prefix</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Type</th>
            <th>Edit</th>
        </tr>
        <?php
        foreach($users as $user){
            ?>
            <tr class="align-items-center text-center">
                <td><img class="profile-img" src="data:image/jpeg;base64, <?=base64_encode($user['image'])?>"/></td>
                <td><?=$user['prefix']?></td>
                <td><?=$user['name']?></td>
                <td><?=$user['email']?></td>
                <td><?=$user['number']?></td>
                <td><?=$user['gender']=='m'?"Male":"Female"?></td>
                <td><?=$user['dob']?></td>
                <td><?=$user['user_type_id']?></td>
                <?php
                if($user['user_type_id']!='super admin' || viewUserRole([2])){
                    ?>
                    <td><form method="post" action="<?=$_SERVER["REQUEST_URI"]?>"><button class="btn btn-warning" name="edit" value="<?=$user['id']?>"><i class="fas fa-wrench"></i></button></form></td>
                    <?php
                }?>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>