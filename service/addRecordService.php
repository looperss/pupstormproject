<?php
    $btnNum = $_POST["clickBtnNum"];

    if($btnNum == 1){
        header("location:../thirdPhp.php");
    }else if($btnNum == 0){
        header("location:../firstPhp.php");
    }