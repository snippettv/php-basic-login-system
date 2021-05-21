<?php
/*
 Junior = 1-2 years
 Mid = 2-3 years
 Senior = 3-5 years
 * */
//http requests: using GET request
if(empty($_GET['years'])){
    echo 'Please enter a year';
}else{

    $years_xp =$_GET['years'];

    if($years_xp >=1 && $years_xp <=3){
        echo 'Junior';
    }else if($years_xp >3 && $years_xp <=5){
        echo 'Mid';
    }else if($years_xp >6 && $years_xp <=100){
        echo 'Senior';
    }else{
        echo "None of the types";
    }
}





