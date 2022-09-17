<?php
while(isset($_POST["submit-survey"])){
    $GLOBALS["counter"] += 1;
    
    if(isset($_POST["a1"])){
        $answer = $_POST["a1"];

        $_GET[$answers];
    }

    elseif(isset($_POST["a2"])){
        $answer = $_POST["a2"];

        $_GET[$answers];
    }

    elseif(isset($_POST["a3"])){
        $answer = $_POST["a3"];
    }

    elseif(isset($_POST["a4"])){
        $answer = $_POST["a4"];
    }



    $GLOBALS["a1"] = 0;
    $GLOBALS["a2"] = 0;
    $GLOBALS["a3"] = 0;
    $GLOBALS["a4"] = 0;
}