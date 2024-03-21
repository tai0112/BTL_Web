<?php
    error_reporting(0);
    $a = $_POST["txtA"];
    $b = $_POST["txtB"];
    $c = $_POST["txtC"];
    if (isset($_POST['btnTinh']))
    {
        // Kiểm tra điều kiện tam giác
        if($a + $b > $c && $a + $c > $b && $b + $c > $a) 
        {
            if($a == $b && $b == $c) 
            {
                $loai =  "Tam giác đều";
            } 
            elseif($a == $b || $a == $c || $b == $c) 
            {
                if($a*$a + $b*$b == $c*$c || $a*$a + $c*$c == $b*$b || $b*$b + $c*$c == $a*$a) 
                {
                    $loai =  "Tam giác vuông cân";
                } 
                else 
                {
                    $loai =  "Tam giác cân";
                }
            } 
            elseif($a*$a + $b*$b == $c*$c || $a*$a + $c*$c == $b*$b || $b*$b + $c*$c == $a*$a) 
            {
                $loai =  "Tam giác vuông";
            } 
            else 
            {
                $loai =  "Tam giác thường";
            }
        } 
        else 
        {
            $loai =  "Đây không phải là tam giác";
        }
    }
    
?>
<body>
<form action="" method="POST">
        <table>
        <tr class="header_row">
                <td colspan="2>" style="text-align: center; font-weight: bold; font-size: 25;">NHẬN DẠNG TAM GIÁC</td>
            </tr>
            <tr>
                <td>Cạnh 1:</td>
                <td><input style="margin-left: 25px;" type="text" name="txtA" value="<?php echo $a;?>" placeholder="0"> (cm)</td>
            </tr>
            <tr>
                <td>Cạnh 2:</td>
                <td><input style="margin-left: 25px;" type="text" name="txtB" value="<?php echo $b;?>" placeholder="0"> (cm)</td>
            </tr>
            <tr>
                <td>Cạnh 3:</td>
                <td><input style="margin-left: 25px;" type="text" name="txtC" value="<?php echo $c;?>" placeholder="0"> (cm)</td>
            </tr>
            <tr>
                <td>Loại tam giác:</td>
                <td><input style="margin-left: 25px;" type="text" name="loai_tg" value="<?php echo $loai;?>" placeholder="0"> </td>
            </tr>
            <tr class="footer_row">
                <td colspan="2>" style="text-align: center; "><input type="submit" name="btnTinh" value="Nhận dạng"></td>
            </tr>
        </table>
    </form>
</body>

<style>
    .header_row {
        color: darkred;
        background-color: orange;
    }

    table {
        background-color: khaki;
        font-family: Arial, Helvetica, sans-serif;
        width: 400px;
        height: 200px;
        border-radius: 10px;
    }

    body {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    }
</style>