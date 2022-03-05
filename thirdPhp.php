<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/thirdPhpCss.css">
    <script type="text/javascript" src="JS/thirdPhpJs.js"></script>
</head>
<body>
<?php
    echo "这是内嵌在html里的php22222222244444444444444444"
?>
<form action="service/inventoryService.php" method="post">
    <div>invId<input name="invId" id="invId"></div>
    <div>funcId<input name="funcId"></div>
    <div>invCode<input name="invCode"></div>
    <div>invName<input name="invName"></div>
    <div>invSpecies<input name="invSpecies"></div>
    <div>invClassId<input name="invClassId"></div>
    <div>gwDiff<input name="gwDiff"></div>
    <div>thicknessInMM<input name="thicknessInMM"></div>
    <div>widthInMM<input name="widthInMM"></div>
    <div>lengthInMM<input name="lengthInMM"></div>
    <div>remark<input name="remark"></div>
    <div>createPerson<input name="createPerson"></div>
    <div>createDate<input type="date" name="createDate" id="createDate" value="<?php echo date("Y-m-d"); ?>"></div>
<!--    <div>createDate<input type="date" name="createDate" id="createDate" placeholder="请选择日期" class="show_placeholder"></div>-->
    <p><input type="submit" value="添加" ></p>
</form>
</body>

