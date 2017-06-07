<html>
<head>
    <title>Items</title>
</head>
<body>
<h1><?= $title ?></h1>
<h4>
    <a href="http://mvcapp.dev/cal2?c=Fabric&a=lists">Fabric</a>&nbsp;
    <a href="http://mvcapp.dev/cal2?c=Cosmetic&a=lists">Cosmetic</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://mvcapp.dev/cal2?c=Item&a=add">New</a>
</h4>
<table width="100%" border="1" cellpadding="3" cellspacing="0">
    <tr>
        <th>Code</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Category</th>
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
                <td><?= $row['category'] ?></td>
                <td><?= '$ '.$row['price'] ?></td>
            </tr>
            <?php
        }
    }
    ?>
</table>
</body>
</html>