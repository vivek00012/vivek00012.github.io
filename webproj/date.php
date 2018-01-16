<?php
date_default_timezone_set('Asia/Kolkata');
$t=time();                    
$curyear= date('Y', $t);
$curmonth= date('m', $t);
$curdate= date('d', $t);
$curhour= date('h', $t);
$curmin =date('i', $t);
$cursec= date('s', $t);
$meri=date('a',$t);
if($month=01){
                      $curmonth='January';
                    }elseif($curmonth=02){
                      $curmonth='Feburary';
                    }elseif($curmonth=03){
                      $curmonth='March';
                    }elseif($curmonth=04){
                      $curmonth='April';
                    }elseif($curmonth=05){
                      $curmonth='May';
                    }elseif($curmonth=06){
                      $curmonth='June';

                    }elseif($curmonth=06){
                       $curmonth='July';
                    }elseif($curmonth=06){
                       $curmonth='August';
                    }elseif($curmonth=06){
                      $curmonth='September';

                    }elseif($curmonth=06){
                      $curmonth='October';

                    }elseif($curmonth=06){
                      $curmonth='November';
    
                    }else{
                      $curmonth='December';                  
                    }  
echo "<div class='chdate'>$curdate</div>";
echo "<div class='chdate'>".strtoupper($curmonth)."&nbsp;</div>";
echo "<div class='chdate '>".substr($curyear,2)."&nbsp&nbsp"."</div>";


?>