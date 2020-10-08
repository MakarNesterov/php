<?php
    echo "Занятие 1-3a <br/><br/>";
    $a = 4;
    $b = 6;
    $c = 3;
    $d = 8;
    $p = $a + $b + $c + $d;
    echo "Периметр четырехугольника равен $p";
    
    echo "<hr/>";
    
    
    
    echo "Занятие 1-3b <br/><br/>";
    $x = 0.5;
    $a = 7 * $x;
    $b = 21 * $x;
    $S = ($a + $b) * ($a + $b);
    echo "S равно $S";
    
    echo "<hr/>";

 

    echo "Занятие 1-4a <br/><br/>";
    $why = true;
    $a = 4;
    $b = 3;
    $c = 2;
    $d = 2;
    $h = 2;
    
    if ($why == true) {
        $E = (($a + $b) / 2) * $h;
        echo "Площадь трапеции равна $E";
    }
    else if ($why != true) {  
        $E = $a + $b + $c + $d;
        echo "Периметр трапеции равен $E";
    }
    
    echo "<hr/>";



    echo "Занятие 1-4b <br/><br/>";
 
    
    echo "<hr/>";



    echo "Занятие 1-5a <br/><br/>";
    
    $optimist = 0;
    $pessimist = 0;
    
    for ($i = 0; $i < 101; $i += 1) {
        $computer = rand(0, 1);                
        
        if ($i < 100 && $computer == 1) 
            $optimist += 1;                      
        else if ($i < 100 && $computer == 0) 
            $pessimist += 1;                      
        else 
            echo "Сейчас компьютер на $optimist% оптимист и на $pessimist% пессимист";           
    }       

    echo "<hr/>";


    
    echo "Занятие 1-5b <br/><br/>";

    
    
    
    $password = "001";
  
    $hacker = "";
        
        for ($j = 0; $j <= 8; $j += 1) {
            if ($j.$k.$l == $password) break;
            for ($k = 0; $k <= 8; $k += 1) {
                if ($j.$k.$l == $password) break;    
                for ($l = 0; $l <= 8; $l += 1) {
                    if ($j.$k.$l == $password) break;
                    /*for ($k = 0; $k <= 9; $k += 1) {
                        if ($h.$a.$c.$k.$e.$r = $password) break;
                        for ($e = 0; $e <= 9; $e += 1) {
                            if ($h.$a.$c.$k.$e.$r = $password) break;
                            for ($r = 0; $r <= 9; $r += 1) {
                                if ($h.$a.$c.$k.$e.$r = $password) break;
                            
                            }       
                        }       
                    }*/       
                }       
            }       

        }       
    echo $j.$k.$l;
    echo "<br/>";   
    echo $j;    
    echo "<br/>"; 
    echo $k;
    echo "<br/>"; 
    echo $l;
?>