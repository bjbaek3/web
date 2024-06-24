<!DOCTYPE html>
<html>
<body>
<h1>Get CSV</h1>

<?php

 
//Open the file.
// $fileHandle = fopen("/volume1/syslog/strand_syslog/SysLog-Ng/syslog20190619", "r");
$fileHandle = fopen("syslog20190619x", "r");
 
//Loop through the CSV rows.
while (($col = fgetcsv($fileHandle, 0, ",")) !== FALSE) {
    //Print out my column data.
    echo $col[0]  ;
    echo $col[1]  ;
    echo $col[2]  ;
    echo $col[3]  ;
    echo $col[4]  ;
    echo $col[5]  ;

    echo '<br>';
	
	}

?>


</body>
</html>


 