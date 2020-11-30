<?php
$samplestr="NITIN";
$lengstr= strlen($samplestr);
$midpoint= floor($lengstr / 2);
$newStr='';

for($i=0;$i<=$lengstr;$i++){
   if($i==$midpoint){
       $newStr.=$samplestr;
   }else{
       for ( $j = 0; $j < $midpoint; $j++) {
           $newStr .= '&nbsp;&nbsp';
       }
       if(isset($samplestr[$i])){
           $newStr .= $samplestr[$i];
       }

   }
    $newStr .= '<br>';
}
echo $newStr;die;
?>