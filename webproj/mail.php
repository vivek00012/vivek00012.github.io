<?php

                include "dbconfig.php";
                $sql= "select * from angulartest1 where status not in ('deleted','selected','sortlisted','onboarded') order by id desc limit 4";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>=1){
                //while loop open
                while($row=mysqli_fetch_object($res)){ 

                    $messagelength=20;
                    date_default_timezone_set('Asia/Kolkata');

                     $t1=time();
                    
                     $curyear= date('Y', $t1);
                     $curmonth= date('m', $t1);
                     $curdate= date('d', $t1);
                     $curhour= date('h', $t1);
                     $curmin =date('i', $t1);
                     $cursec= date('s', $t1);
                 
                   $time2 = strtotime($row->dateadded);
                     $year= date('Y', $time2);
                     $month= date('m', $time2);
                     $date= date('d', $time2);
                     $hour= date('h', $time2);
                     $min =date('i', $time2);
                     $sec= date('s', $time2);
                   
                     $secdiff=abs($cursec-$sec);
                     $hoursdiff=abs($curhour-$hour);
                     $mindiff=abs($curmin-$min);
                     $daysdiff=abs($curdate-$date);
                     $monthsdiff=abs($curmonth-$month);
                     $yeardiff=  abs($curyear-$year); 
                     //12+time
                     $secdiff2=abs($cursec-$sec)+12;
                     $hoursdiff2=abs($curhour-$hour)+12;
                     $mindiff2=abs($curmin-$min)+12;
                     
                    
                    
   
                echo "<li>
                    <a href='#'>
                        <span class='photo'><i class='fa fa-user' aria-hidden='true'></i></span>
                                <span class='subject'>";
                             echo   "<span class='from'>".ucwords($row->name)."</span>";
                                if(($secdiff)>0 &&($mindiff)==0 && ($hoursdiff)==0 && ($daysdiff) ==0 && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<span class='time' ><i> Just now</i></span>";
                               
                            }elseif(($mindiff)>0 && ($hoursdiff)==0 && ($daysdiff)==0 && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<span class='time'>(<span style='color:#fff;font-weight:bold'>" .abs($mindiff). "</span>)<i> minutes ago</i></span>";  
                            }elseif(($hoursdiff)>0 && ($daysdiff) ==0 && ($monthsdiff)==0 &&($yeardiff)==0 ){
                                echo "<span class='time'>(<span style='color:#fff;font-weight:bold'>" .abs($hoursdiff). "</span>)<i> hours ago</i></span>";  
                            }elseif(($hoursdiff)>=0 && ($daysdiff < 1) && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<span class='time'>(<span style='color:#fff;font-wight:bold'>" .$hoursdiff2. "</span>)<i> hours ago</i></span>";  
                            }elseif(($daysdiff >0) && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<span class='time'>(<span style='color:#fff;font-wight:bold'>" .(($daysdiff )). "</span>)<i> days ago</i></span>";  
                            }elseif(($monthsdiff)>0 &&($yeardiff)==0){
                                echo "<span class='time'>(<span style='color:#fff;font-wight:bold'>" .abs($monthsdiff). "</span>)<i> months ago</i></span>";  

                            }else 
                            {
                                if(($yeardiff)>0){
                                echo "<span class='time'>(".abs($yeardiff). ")<i> years ago</i></span>";  

                                }
                            }//else close
                                echo "</span>
                                <span class='message'>".substr("$row->message",0,$messagelength)."....".
                                "</span>";
                 echo " </a>
                </li>";//while li close
               }//while close

               }//main
               else{
                echo "<li>Currently no new mails</li>";
               }
                //while loop close
                ?>