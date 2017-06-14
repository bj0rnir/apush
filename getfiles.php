<?php
    function getSaved(){
        $output = getcwd() . "/saved";
        $files = scandir($output);
        $cnt = count($files); 
        $in = 0;
        while ($in < $cnt){
            echo "<option>" . $files[$in] . "</option>" ;
            $in++;
        }
    }
    getSaved();
