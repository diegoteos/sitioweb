<?php

/*

for ($i=9999; $i >= 0; $i--) { 
    
    echo $stri . $i .'<br/>';
}
*/

$enter = "ENTER";
$delay = "DELAY 150";
$stri = "STRING ";
$delays = "DELAY 50";

/* for ($a=0; $a <= 9 ; $a++) { 
    for ($b=0; $b <= 9 ; $b++) { 
        for ($c=0; $c <= 9 ; $c++) { 
            for ($d=0; $d <= 9 ; $d++) { 
                echo $delay . '<br/>';
                echo $stri . $a . $b . $c . $d . '<br/>';
            }
        }
    }
} */

for ($a=8; $a <= 9 ; $a++) { 
    for ($b=0; $b <= 9 ; $b++) { 
        for ($c=0; $c <= 9 ; $c++) { 
            for ($d=0; $d <= 9 ; $d++) { 
                echo $delay . '<br/>';
                echo $stri . $a . '<br/>';
                echo $delays . '<br/>';
                echo $stri . $b . '<br/>';
                echo $delays . '<br/>';
                echo $stri . $c . '<br/>';
                echo $delays . '<br/>';
                echo $stri . $d . '<br/>';
            }
        }
    }
}


// echo "E:\Users\Diego\Desktop\USB-Rubber-Ducky-master\Encoder>java -jar encoder.jar -i rubber.txt -l es.properties";