<?php
    require_once("../db/DbManage.php");
    $invId = $_POST["invId"];
    $funcId = $_POST["funcId"];
    $invCode = $_POST["invCode"];
    $invName = $_POST["invName"];
    $invSpecies = $_POST["invSpecies"];
    $invClassId = $_POST["invClassId"];
    $gwDiff = $_POST["gwDiff"];
    $thicknessInMM = $_POST["thicknessInMM"];
    $widthInMM = $_POST["widthInMM"];
    $lengthInMM = $_POST["lengthInMM"];
    $remark = $_POST["remark"];
    $createPerson = $_POST["createPerson"];
    $createDate = $_POST["createDate"];

    $dbManage = new DbManage();
    $sqlTxt = "INSERT INTO inventory(invId, funcId, invCode, invName, invSpecies, invClassId," .
        " gwDiff, thicknessInMM, widthInMM, lengthInMM, remark, createPerson, createDate) VALUE('" . $invId . "' ,'"
                                                                                                    . $funcId . "' ,'"
                                                                                                    . $invCode . "' ,'"
                                                                                                    . $invName . "' ,'"
                                                                                                    . $invSpecies . "' ,'"
                                                                                                    . $invClassId . "' ,'"
                                                                                                    . $gwDiff . "' ,'"
                                                                                                    . $thicknessInMM . "' ,'"
                                                                                                    . $widthInMM . "' ,'"
                                                                                                    . $lengthInMM . "' ,'"
                                                                                                    . $remark . "' ,'"
                                                                                                    . $createPerson . "' ,'"
                                                                                                    . $createDate . "' )";
//    $sqlTxt = "INSERT INTO inventory(invId, gwDiff) VALUE('" . $invId . "','"
//                                                                . $gwDiff . "')";

    $result = $dbManage->excuteSqlTxt($sqlTxt);

//    if($result == true){
//        header("location:first.php");
//    }else{
//        header("location:second.php");
//    }