<?php

class PostOffice {
     
    function mailFiler() {

        $fp=fopen("string.txt","w");

        $mycsv=fgetcsv($fp,200,"*");
        echo $mycsv[2];

        fclose($fp);
    }

    function mailRegex() {

        $fp=fopen("string.txt","w");

        if(charset=utf-8){
            $mycsv=fgetcsv($fp,200,"*");
            echo $mycsv[2];
        }
        
        fclose($fp);
    }

    function spiltroad() {

        $fp=fopen("road.txt","w");

        for{
            $arr = explore('區');
            echo $arr[1];
            echo <br/>;
        }

        fclose($fp);
    }
}
 
$PostOffice = new PostOffice();
echo $PostOffice->do_something();

?>