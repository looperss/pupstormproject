<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <title>secondPage</title>
    <link rel="stylesheet" href="css/secondPhpCss.css">
</head>
<body>
<?php
    echo "这是内嵌在secondPhp html的php"
?>
<div>
    <div>
        <P>原料信息展示</P>
    </div>
    <form method="post" action="service/addRecordService.php">
        <div>
            <table>
                <tr>
                    <td>invId</td>
                    <td>funcId</td>
                    <td>invCode</td>
                    <td>invName</td>
                    <td>invSpecies</td>
                    <td>invClassId</td>
                    <td>gwDiff</td>
                    <td>thicknessInMM</td>
                    <td>widthInMM</td>
                    <td>lengthInMM</td>
                    <td>remark</td>
                    <td>createPerson</td>
                    <td>createDate</td>
                </tr>
                <?php
                require_once("db/DbManage.php");

                $dbManage = new DbManage();

                $query = "SELECT * FROM inventory";
                $result = $dbManage->getSqlTxt($query);

                while (!!$row = mysqli_fetch_array($result)){
                    echo "<tr><td>".$row["invId"]."</td><td>".
                        $row["funcId"]."</td><td>".
                        $row["invCode"]."</td><td>".
                        $row["invName"]."</td><td>".
                        $row["invSpecies"]."</td><td>".
                        $row["invClassId"]."</td><td>".
                        $row["gwDiff"]."</td><td>".
                        $row["thicknessInMM"]."</td><td>".
                        $row["widthInMM"]."</td><td>".
                        $row["lengthInMM"]."</td><td>".
                        $row["remark"]."</td><td>".
                        $row["createPerson"]."</td><td>".
                        $row["createDate"]."</td></tr>>";
                }
                ?>
            </table>
            <div>
                <div>
                    <input value="新增数据" type="submit" onclick="document.getElementById('btnNum').value='1'">
                    <input type="hidden" value="0" id="btnNum" name="clickBtnNum">
                </div>
            </div>
        </div>
    </form>
</div>
</body>

