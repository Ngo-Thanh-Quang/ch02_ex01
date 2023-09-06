<?php
    $description = $_POST['description'];
    $giagoc = $_POST['giagoc'];
    $percent = $_POST['percent'];
    $giacuoi = $giagoc - ($percent*$giagoc/100);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
</head>
<style>
body{
    justify-content: center;
    display: flex;
}
main{
    text-align: center;
    border: 2px solid #82343c;
    width: 600px;
    height: auto;
}
h1 {
    color: #82343c;
}
td{
    width: 200px;
    height: 30px;
    text-align: left;
    font-size: 20px;
}
input{
    font-size: 20px;
}
#buttons{
    justify-content: center;
    display: flex;
}
form{
    justify-content: center;
    display: flex;
}
</style>
<body>  
        <main>
        <h1 style="text-align: center;">Product Discount Calculator</h1>
        <form action="tinhtien.php" method="post"  style="padding-bottom: 20px;">
            <table>
                <tr>
                    <td>
                    <label>Product Description:</label>
                    </td>
                    <td>
                    <?php echo $description ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>List Price:</label>
                    </td>
                    <td>
                    $<?php echo number_format($giagoc,2) ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Standard Discount:</label>
                    </td>
                    <td>
                    <?php echo $percent; ?>%
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Discount Amount:</label>
                    </td>
                    <td>
                    $<?php echo number_format($percent*$giagoc/100,2); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Discount Price:</label>
                    </td>
                    <td>
                    $<?php echo number_format($giacuoi,2); ?>
                    </td>
                </tr>
            </table>
        </form>
        </main>
</body>
</html>