<?php
function alertMessage($alert){
    if(isset($alert)){
        $result = '<div class='.$alert[0].'>'.$alert[1].'</div><br>';

        return $result;
    }
}

function getTemplates($template)
{
    require_once('template/'.$template.'.php');
}

function getApp($App){

    require_once('app/'.$App.'.php');
}

function getTemplatesApp($template,$App){

    require_once('app/'.$App.'.php');
    require_once('template/'.$template.'.php'); 
}

function getHeader (){
    require_once('template/partial/header.php');
}

function getFooter (){
    require_once('template/partial/footer.php');
}

function getAdmin(){
    return $_SESSION['admin'];
}
?>