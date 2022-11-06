<?php

session_start();

function ErrorMessage(){
    if(isset($_SESSION["ErrorMessage"])){
        $Output = "<div class=\"alert alert-danger\">";
        $Output .= htmlentities($_SESSION["ErrorMessage"]);
        $Output .= "</div>";
        $_SESSION["ErrorMessage"] = null;
        return $Output;
    }
}


function SuccessMessage(){
    if(isset($_SESSION["SucessMessage"])){
        $Output = "<div class=\"alert alert-success\">";
        $Output .= htmlentities($_SESSION["SucessMessage"]);
        $Output .= "</div>";
        $_SESSION["SucessMessage"] = null;
        return $Output;
    }
}

?>