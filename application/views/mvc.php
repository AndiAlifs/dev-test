<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC View -> Test 3</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Jumlah Data</th>
            </tr>
        </thead>
        <?php foreach ($data as $dat):?>
        <tr>
            <td><?= $dat->category;?></td>
            <td><?= $dat->count;?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>