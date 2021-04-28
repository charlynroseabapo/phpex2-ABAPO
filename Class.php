<?php

class Triangle{
   function triangleRange($fnum, $snum){

    if(!empty($fnum && $snum)){
        $max = (($fnum + $snum) - 1);
        return $max;

    }else
    return 0;

    }
}

class Binary{
    function onesInBinary($bnum){

        $count = 0;
        while ($bnum)
    {
        $count += $bnum & 1;
        $bnum >>= 1;
    }
        return $count;

    }
}

class Join{
    function wordsJoin($fpart,$spart){

        return join('/', array(trim($fpart, '/'), trim($spart, '/')));
        
    }  
    
}

class Square{
    function perfectSquare($square){
        while($square>0){

            $sastry = ($square . $square + 1);

            if($sastry = sqrt($sastry)){

                if($sastry == floor($sastry)){

                    return "$square => $sastry => TRUE ($square is a perfect square)";
            
                }else{

                    return "$square => $sastry => FALSE ($square is not a perfect square)";
            
        
                }
       
            }
        }
        
    }
    
}



?>