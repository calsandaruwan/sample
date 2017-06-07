<html>
<head>
    <title>Cosmetic</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <h4>
        <a href="http://mvcapp.dev/cal2?c=Item&a=lists">Home</a>
    </h4>
    <table width="100%" border="1" cellpadding="3" cellspacing="0">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Made</th>
            <th>Type</th>
            <th>Unit Price</th>
        </tr>
        <?php
            if($result) {
                foreach ($result as $row) {
                    ?>
                    <tr>
                        <td><?= $row['code'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['brand'] ?></td>
                        <td><?= $row['model'] ?></td>
                        <td><?= $row['made'] ?></td>
                        <td><?= $row['type'] ?></td>
                        <td><?= '$ '.$row['price'] ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>