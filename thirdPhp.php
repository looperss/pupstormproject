<!DOCTYPE html>
<html lang="en"></html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    echo "这是内嵌在html里的php"
?>
<form action="service/inventoryService.php" method="post">
    <div>invId<input name="invId"></div>
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
    <div>createDate<input name="createDate"></div>
    <p><input type="submit" value="添加"></p>
</form>
</body>

