<?php
    /**
    * replaceF function is use to take user name is replace tha "<<UserName>>"
    * template to the nam of the user
    */
    function replaceF()
    {
            $template = "Hello <<UserName>>, How are you?";
            $S = readline("enter name : ");
            //str_replace to replace  <<UserName>> from template
            echo str_replace("<<UserName>>", $S , $template)."\n";
    }
    replaceF();
?>