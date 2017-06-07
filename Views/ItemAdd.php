<html>
<head>
    <title>Items</title>
</head>
<h1><?= $title ?></h1>
<h4>
    <a href="http://mvcapp.dev/cal2?c=Item&a=lists">Home</a>
    <a href="http://mvcapp.dev/cal2?c=Fabric&a=lists">Fabric</a>&nbsp;
    <a href="http://mvcapp.dev/cal2?c=Cosmetic&a=lists">Cosmetic</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="http://mvcapp.dev/cal2?c=Item&a=add">New</a>
</h4>
<h5><?= $message ?></h5>
<form method="post">
    <table width="25%" border="0" cellpadding="3" cellspacing="0">
        <tr>
            <td>Code</td>
            <td><input disabled type="text" value="<?= $code ?>" name="post[code]"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="post[name]"></td>
        </tr>
        <tr>
            <td>Brand</td>
            <td><input type="text" name="post[brand]"></td>
        </tr>
        <tr>
            <td>Model</td>
            <td><input type="text" name="post[model]"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td>
                <select name="post[category]">
                    <?php
                        if($categories) {
                            foreach ($categories as $cat) {
                                ?>
                                <option value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td><input type="text" name="post[price]"></td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" name="submit" value="Save"></td>
        </tr>
    </table>
</form>
</body>
</html>