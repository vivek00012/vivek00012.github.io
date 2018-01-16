<?php
                   include "dbconfig.php";
                   $sql="select * from angulartest1 where status='sortlisted' order by id asc limit 3";
                   $result=mysqli_query($conn,$sql);

                     

                   if(mysqli_num_rows($result)>=1){
              while($row=mysqli_fetch_object($result)){
                $messagelength=25;
                date_default_timezone_set('Asia/Kolkata');

                    $t=time();
                    
                     $curyear= date('Y', $t);
                     $curmonth= date('m', $t);
                     $curdate= date('d', $t);
                     $curhour= date('h', $t);
                     $curmin =date('i', $t);
                     $cursec= date('s', $t);
                 
                   $time = strtotime($row->dateadded);// converts into unix px_timestamp2string(pxdoc, value, format)
                     $year= date('Y', $time);
                     $month= date('m', $time);
                     $date= date('d', $time);
                     $hour= date('h', $time);
                     $min =date('i', $time);
                     $sec= date('s', $time);
                     $secdiff=abs($cursec-$sec);
                     $mindiff=abs($curmin-$min);
                     $hoursdiff=abs($curhour-$hour);
                     $daysdiff=abs($curdate-$date);
                     $monthsdiff=abs($curmonth-$month);
                     $yeardiff=  abs($curyear-$year);

                     //12+time
                     $secdiff2=abs($cursec-$sec)+12;
                     $hoursdiff2=abs($curhour-$hour)+12;
                     $mindiff2=abs($curmin-$min)+12;
                     


                 echo "<li>
                    <a href='#!'>
                        <div class='task-info clearfix'>
                            <div class='desc'>";
                               echo "<h5>".ucwords($row->name)."</h5>";
                               echo "<p>".substr("$row->message",0,$messagelength)."....."."</p>";
                           echo "</div>";
                            if(($secdiff)>0 &&($mindiff)==0 && ($hoursdiff)==0 && ($daysdiff) ==0 && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<div><i>Just now</i></div>";
                               
                            }elseif(($mindiff)>0 && ($hoursdiff)==0 && ($daysdiff)==0 && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<div><span style='color:#000;;letter-spacing:0.2em;font-weight:bold;'>Sortlisted </span><span style='color:#fff;font-weight:bold'>" .abs($mindiff). " </span><i> minutes ago</i></div>";  
                            }elseif(($hoursdiff)>=0 && ($daysdiff) < 1 && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<div><span style='color:#000;letter-spacing:0.2em;font-weight:bold;'>Sortlisted </span><span style='color:#fff;font-wight:bold'>" .abs($hoursdiff). "</span> <i>hours ago</i></div>";  
                            }elseif( ($daysdiff >0) && ($monthsdiff)==0 &&($yeardiff)==0){
                                echo "<div><span style='color:#000;letter-spacing:0.2em;font-weight:bold;'>Sortlisted </span><span style='color:#fff;font-wight:bold'>" .((abs($daysdiff) -1)). "</span><i> days ago</i></div>";  
                            }elseif(($monthsdiff)>0 &&($yeardiff)==0){
                                echo "<div style='color:#000;letter-spacing:0.2em;font-weight:bold;'><span>Sortlisted </span><span style='color:#fff;font-weight:bold'>" .abs($monthsdiff). "</span><i> months ago</i></div>";  

                            }else 
                            {
                                if(($yeardiff)>0){
                                echo "<div><span  style='color:#000;letter-spacing:0.2em;font-weight:bold'>Sortlisted</span>".abs($yeardiff). "<i> years ago</i></div>";  

                                }
                            }

                          
                  echo "</div>
                   </a>
                       </li>";
                }//close if
                }//close while
                else{
                echo "<li id='nulltask'>
                 Currently no pending tasks
                </li>";
            }

                ?>