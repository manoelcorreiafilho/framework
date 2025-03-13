<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>id</th>
            <th>name</th>
        </thead>
        <tbody>
            <?php for ($i=0; $i < count($model -> getUsers()); $i++) { ?>
            <tr>
                <td><?php echo $model -> getUsers()[$i]['id'] ?></td>
                <td><?php echo $model -> getUsers()[$i]['username'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>