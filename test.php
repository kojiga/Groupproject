<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$start='7:45';
                            $hours='1:45';

                                  $time = explode(':', $hours);
                                  if(count($time) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr = $time[0] + ($time[1] / 60);


                                  $time2 = explode(':', $start);
                                  if(count($time2) != 2)
                                      throw new Exception("Invalid value!");
                                  $hr2 = $time2[0] + ($time2[1] / 60);

                                  
                                  $count=$hr+$hr2;
                                  echo $count;


?>
</body>
</html>