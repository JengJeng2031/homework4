<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylemul.css">
</head>
<body>

    <div class="main">
        
        <div class="main_two">
            <div>
                <?php
                $my_val = isset($_POST['my_val']) ? $_POST['my_val'] : ''; 
                ?>
                <h1>ตารางสูตรคูณ</h1>
                <br>
                <form method="post">
                    <label for="my_val">โปรดเลือกแม่ : </label>
                    <input type="number" name="my_val" placeholder="กรอกตัวเลข">
                    <button type="submit"> ตกลง</button>
                </form>
                <br>
                <div class="table_scroll">
                    <table class="table_1">
                        <tbody>
                            <?php for  ($j = 1; $j <= 24; $j++) { ?>
                                <tr>
                                    <td><?php echo $my_val ?></td>
                                    <td> x </td>
                                    <td><?php echo $j ?></td>
                                    <td> = </td>
                                    <td><?php echo $my_val * $j ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</body>
</html>